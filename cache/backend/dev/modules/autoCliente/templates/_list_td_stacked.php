<td colspan="5">
  <?php echo __('%%Codigo%% - %%Nome%% - %%Telefone%% - %%Transversalinicial%% - %%Transversalfinal%%', array('%%Codigo%%' => $cliente->getCodigo(), '%%Nome%%' => link_to($cliente->getNome(), 'cliente_edit', $cliente), '%%Telefone%%' => $cliente->getTelefone(), '%%Transversalinicial%%' => $cliente->getTransversalinicial(), '%%Transversalfinal%%' => $cliente->getTransversalfinal()), 'messages') ?>
</td>
