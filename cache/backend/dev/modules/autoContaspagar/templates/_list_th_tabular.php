<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_registro">
  <?php if ('registro' == $sort[0]): ?>
    <?php echo link_to(__('Registro', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=registro&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Registro', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=registro&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_codigofornecedor">
  <?php if ('codigofornecedor' == $sort[0]): ?>
    <?php echo link_to(__('Codigofornecedor', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=codigofornecedor&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Codigofornecedor', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=codigofornecedor&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_numerodocumento">
  <?php if ('numerodocumento' == $sort[0]): ?>
    <?php echo link_to(__('Numerodocumento', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=numerodocumento&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Numerodocumento', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=numerodocumento&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_tipodocumento">
  <?php if ('tipodocumento' == $sort[0]): ?>
    <?php echo link_to(__('Tipodocumento', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=tipodocumento&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Tipodocumento', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=tipodocumento&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_dataemissao">
  <?php if ('dataemissao' == $sort[0]): ?>
    <?php echo link_to(__('Dataemissao', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=dataemissao&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Dataemissao', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=dataemissao&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_datavencimento">
  <?php if ('datavencimento' == $sort[0]): ?>
    <?php echo link_to(__('Datavencimento', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=datavencimento&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Datavencimento', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=datavencimento&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_valor">
  <?php if ('valor' == $sort[0]): ?>
    <?php echo link_to(__('Valor', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=valor&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Valor', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=valor&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_controlecusto">
  <?php if ('controlecusto' == $sort[0]): ?>
    <?php echo link_to(__('Controlecusto', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=controlecusto&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Controlecusto', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=controlecusto&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_historico">
  <?php if ('historico' == $sort[0]): ?>
    <?php echo link_to(__('Historico', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=historico&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Historico', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=historico&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_datapagamento">
  <?php if ('datapagamento' == $sort[0]): ?>
    <?php echo link_to(__('Datapagamento', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=datapagamento&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Datapagamento', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=datapagamento&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_desconto">
  <?php if ('desconto' == $sort[0]): ?>
    <?php echo link_to(__('Desconto', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=desconto&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Desconto', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=desconto&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_juros">
  <?php if ('juros' == $sort[0]): ?>
    <?php echo link_to(__('Juros', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=juros&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Juros', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=juros&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_multa">
  <?php if ('multa' == $sort[0]): ?>
    <?php echo link_to(__('Multa', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=multa&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Multa', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=multa&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_caixa">
  <?php if ('caixa' == $sort[0]): ?>
    <?php echo link_to(__('Caixa', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=caixa&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Caixa', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=caixa&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_numeroconta">
  <?php if ('numeroconta' == $sort[0]): ?>
    <?php echo link_to(__('Numeroconta', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=numeroconta&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Numeroconta', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=numeroconta&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_numerocheque">
  <?php if ('numerocheque' == $sort[0]): ?>
    <?php echo link_to(__('Numerocheque', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=numerocheque&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Numerocheque', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=numerocheque&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_codigocompra">
  <?php if ('codigocompra' == $sort[0]): ?>
    <?php echo link_to(__('Codigocompra', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=codigocompra&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Codigocompra', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=codigocompra&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_predatado">
  <?php if ('predatado' == $sort[0]): ?>
    <?php echo link_to(__('Predatado', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=predatado&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Predatado', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=predatado&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_filial">
  <?php if ('filial' == $sort[0]): ?>
    <?php echo link_to(__('Filial', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=filial&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Filial', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=filial&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_lancamentocaixa">
  <?php if ('lancamentocaixa' == $sort[0]): ?>
    <?php echo link_to(__('Lancamentocaixa', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=lancamentocaixa&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Lancamentocaixa', array(), 'messages'), '@contaspagar', array('query_string' => 'sort=lancamentocaixa&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>