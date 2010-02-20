<td class="sf_admin_text sf_admin_list_td_codigo">
  <?php echo link_to($cliente->getCodigo(), 'cliente_edit', $cliente) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nome">
  <?php echo $cliente->getNome() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_endereco">
  <?php echo $cliente->getEndereco() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_bairro">
  <?php echo $cliente->getBairro() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cidade">
  <?php echo $cliente->getCidade() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_estado">
  <?php echo $cliente->getEstado() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cep">
  <?php echo $cliente->getCep() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_transversalinicial">
  <?php echo $cliente->getTransversalinicial() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_transversalfinal">
  <?php echo $cliente->getTransversalfinal() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_telefone">
  <?php echo $cliente->getTelefone() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_contato">
  <?php echo $cliente->getContato() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_fax">
  <?php echo $cliente->getFax() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo $cliente->getEmail() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_pessoafisica">
  <?php echo $cliente->getPessoafisica() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cgc">
  <?php echo $cliente->getCgc() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_ie">
  <?php echo $cliente->getIe() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cpf">
  <?php echo $cliente->getCpf() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_profissao">
  <?php echo $cliente->getProfissao() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_datanascimento">
  <?php echo false !== strtotime($cliente->getDatanascimento()) ? format_date($cliente->getDatanascimento(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_rg">
  <?php echo $cliente->getRg() ?>
</td>
