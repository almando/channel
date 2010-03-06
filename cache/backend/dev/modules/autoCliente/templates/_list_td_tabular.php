<td class="sf_admin_text sf_admin_list_td_Codigo">
  <?php echo $cliente->getCodigo() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_Nome">
  <?php echo link_to($cliente->getNome(), 'cliente_edit', $cliente) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_Telefone">
  <?php echo $cliente->getTelefone() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_Transversalinicial">
  <?php echo $cliente->getTransversalinicial() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_Transversalfinal">
  <?php echo $cliente->getTransversalfinal() ?>
</td>
