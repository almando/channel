<td class="sf_admin_text sf_admin_list_td_registro">
  <?php echo link_to($contaspagar->getRegistro(), 'contaspagar_edit', $contaspagar) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_codigofornecedor">
  <?php echo $contaspagar->getCodigofornecedor() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_numerodocumento">
  <?php echo $contaspagar->getNumerodocumento() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_tipodocumento">
  <?php echo $contaspagar->getTipodocumento() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_dataemissao">
  <?php echo false !== strtotime($contaspagar->getDataemissao()) ? format_date($contaspagar->getDataemissao(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_datavencimento">
  <?php echo false !== strtotime($contaspagar->getDatavencimento()) ? format_date($contaspagar->getDatavencimento(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_valor">
  <?php echo $contaspagar->getValor() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_controlecusto">
  <?php echo $contaspagar->getControlecusto() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_historico">
  <?php echo $contaspagar->getHistorico() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_datapagamento">
  <?php echo false !== strtotime($contaspagar->getDatapagamento()) ? format_date($contaspagar->getDatapagamento(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_desconto">
  <?php echo $contaspagar->getDesconto() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_juros">
  <?php echo $contaspagar->getJuros() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_multa">
  <?php echo $contaspagar->getMulta() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_caixa">
  <?php echo $contaspagar->getCaixa() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_numeroconta">
  <?php echo $contaspagar->getNumeroconta() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_numerocheque">
  <?php echo $contaspagar->getNumerocheque() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_codigocompra">
  <?php echo $contaspagar->getCodigocompra() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_predatado">
  <?php echo false !== strtotime($contaspagar->getPredatado()) ? format_date($contaspagar->getPredatado(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_filial">
  <?php echo $contaspagar->getFilial() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_lancamentocaixa">
  <?php echo $contaspagar->getLancamentocaixa() ?>
</td>
