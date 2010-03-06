<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('pessoas/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?codigo='.$form->getObject()->getCodigo() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('pessoas/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'pessoas/delete?codigo='.$form->getObject()->getCodigo(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['nome']->renderLabel() ?></th>
        <td>
          <?php echo $form['nome']->renderError() ?>
          <?php echo $form['nome'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['endereco']->renderLabel() ?></th>
        <td>
          <?php echo $form['endereco']->renderError() ?>
          <?php echo $form['endereco'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['bairro']->renderLabel() ?></th>
        <td>
          <?php echo $form['bairro']->renderError() ?>
          <?php echo $form['bairro'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cidade']->renderLabel() ?></th>
        <td>
          <?php echo $form['cidade']->renderError() ?>
          <?php echo $form['cidade'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['estado']->renderLabel() ?></th>
        <td>
          <?php echo $form['estado']->renderError() ?>
          <?php echo $form['estado'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cep']->renderLabel() ?></th>
        <td>
          <?php echo $form['cep']->renderError() ?>
          <?php echo $form['cep'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['transversalinicial']->renderLabel() ?></th>
        <td>
          <?php echo $form['transversalinicial']->renderError() ?>
          <?php echo $form['transversalinicial'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['transversalfinal']->renderLabel() ?></th>
        <td>
          <?php echo $form['transversalfinal']->renderError() ?>
          <?php echo $form['transversalfinal'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['telefone']->renderLabel() ?></th>
        <td>
          <?php echo $form['telefone']->renderError() ?>
          <?php echo $form['telefone'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['contato']->renderLabel() ?></th>
        <td>
          <?php echo $form['contato']->renderError() ?>
          <?php echo $form['contato'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fax']->renderLabel() ?></th>
        <td>
          <?php echo $form['fax']->renderError() ?>
          <?php echo $form['fax'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['email']->renderLabel() ?></th>
        <td>
          <?php echo $form['email']->renderError() ?>
          <?php echo $form['email'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['pessoafisica']->renderLabel() ?></th>
        <td>
          <?php echo $form['pessoafisica']->renderError() ?>
          <?php echo $form['pessoafisica'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cgc']->renderLabel() ?></th>
        <td>
          <?php echo $form['cgc']->renderError() ?>
          <?php echo $form['cgc'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['ie']->renderLabel() ?></th>
        <td>
          <?php echo $form['ie']->renderError() ?>
          <?php echo $form['ie'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cpf']->renderLabel() ?></th>
        <td>
          <?php echo $form['cpf']->renderError() ?>
          <?php echo $form['cpf'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['profissao']->renderLabel() ?></th>
        <td>
          <?php echo $form['profissao']->renderError() ?>
          <?php echo $form['profissao'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['datanascimento']->renderLabel() ?></th>
        <td>
          <?php echo $form['datanascimento']->renderError() ?>
          <?php echo $form['datanascimento'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['rg']->renderLabel() ?></th>
        <td>
          <?php echo $form['rg']->renderError() ?>
          <?php echo $form['rg'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
