<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_numerocontrato">
  <?php if ('numerocontrato' == $sort[0]): ?>
    <?php echo link_to(__('Numerocontrato', array(), 'messages'), '@contrato', array('query_string' => 'sort=numerocontrato&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Numerocontrato', array(), 'messages'), '@contrato', array('query_string' => 'sort=numerocontrato&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_codigocliente">
  <?php if ('codigocliente' == $sort[0]): ?>
    <?php echo link_to(__('Codigocliente', array(), 'messages'), '@contrato', array('query_string' => 'sort=codigocliente&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Codigocliente', array(), 'messages'), '@contrato', array('query_string' => 'sort=codigocliente&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_datacontrato">
  <?php if ('datacontrato' == $sort[0]): ?>
    <?php echo link_to(__('Datacontrato', array(), 'messages'), '@contrato', array('query_string' => 'sort=datacontrato&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Datacontrato', array(), 'messages'), '@contrato', array('query_string' => 'sort=datacontrato&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_tipocontrato">
  <?php if ('tipocontrato' == $sort[0]): ?>
    <?php echo link_to(__('Tipocontrato', array(), 'messages'), '@contrato', array('query_string' => 'sort=tipocontrato&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Tipocontrato', array(), 'messages'), '@contrato', array('query_string' => 'sort=tipocontrato&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_categoria">
  <?php if ('categoria' == $sort[0]): ?>
    <?php echo link_to(__('Categoria', array(), 'messages'), '@contrato', array('query_string' => 'sort=categoria&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Categoria', array(), 'messages'), '@contrato', array('query_string' => 'sort=categoria&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_area">
  <?php if ('area' == $sort[0]): ?>
    <?php echo link_to(__('Area', array(), 'messages'), '@contrato', array('query_string' => 'sort=area&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Area', array(), 'messages'), '@contrato', array('query_string' => 'sort=area&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_numeroaparelho">
  <?php if ('numeroaparelho' == $sort[0]): ?>
    <?php echo link_to(__('Numeroaparelho', array(), 'messages'), '@contrato', array('query_string' => 'sort=numeroaparelho&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Numeroaparelho', array(), 'messages'), '@contrato', array('query_string' => 'sort=numeroaparelho&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_numerocircuito">
  <?php if ('numerocircuito' == $sort[0]): ?>
    <?php echo link_to(__('Numerocircuito', array(), 'messages'), '@contrato', array('query_string' => 'sort=numerocircuito&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Numerocircuito', array(), 'messages'), '@contrato', array('query_string' => 'sort=numerocircuito&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_tipopagamento">
  <?php if ('tipopagamento' == $sort[0]): ?>
    <?php echo link_to(__('Tipopagamento', array(), 'messages'), '@contrato', array('query_string' => 'sort=tipopagamento&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Tipopagamento', array(), 'messages'), '@contrato', array('query_string' => 'sort=tipopagamento&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_diapagamento">
  <?php if ('diapagamento' == $sort[0]): ?>
    <?php echo link_to(__('Diapagamento', array(), 'messages'), '@contrato', array('query_string' => 'sort=diapagamento&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Diapagamento', array(), 'messages'), '@contrato', array('query_string' => 'sort=diapagamento&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_valoradesao">
  <?php if ('valoradesao' == $sort[0]): ?>
    <?php echo link_to(__('Valoradesao', array(), 'messages'), '@contrato', array('query_string' => 'sort=valoradesao&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Valoradesao', array(), 'messages'), '@contrato', array('query_string' => 'sort=valoradesao&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_valormanutencao">
  <?php if ('valormanutencao' == $sort[0]): ?>
    <?php echo link_to(__('Valormanutencao', array(), 'messages'), '@contrato', array('query_string' => 'sort=valormanutencao&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Valormanutencao', array(), 'messages'), '@contrato', array('query_string' => 'sort=valormanutencao&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_parcelasadesao">
  <?php if ('parcelasadesao' == $sort[0]): ?>
    <?php echo link_to(__('Parcelasadesao', array(), 'messages'), '@contrato', array('query_string' => 'sort=parcelasadesao&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Parcelasadesao', array(), 'messages'), '@contrato', array('query_string' => 'sort=parcelasadesao&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_datapagamentoadesao">
  <?php if ('datapagamentoadesao' == $sort[0]): ?>
    <?php echo link_to(__('Datapagamentoadesao', array(), 'messages'), '@contrato', array('query_string' => 'sort=datapagamentoadesao&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Datapagamentoadesao', array(), 'messages'), '@contrato', array('query_string' => 'sort=datapagamentoadesao&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_pontosadicionais">
  <?php if ('pontosadicionais' == $sort[0]): ?>
    <?php echo link_to(__('Pontosadicionais', array(), 'messages'), '@contrato', array('query_string' => 'sort=pontosadicionais&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Pontosadicionais', array(), 'messages'), '@contrato', array('query_string' => 'sort=pontosadicionais&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_valorpontoadcional">
  <?php if ('valorpontoadcional' == $sort[0]): ?>
    <?php echo link_to(__('Valorpontoadcional', array(), 'messages'), '@contrato', array('query_string' => 'sort=valorpontoadcional&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Valorpontoadcional', array(), 'messages'), '@contrato', array('query_string' => 'sort=valorpontoadcional&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_observacao">
  <?php if ('observacao' == $sort[0]): ?>
    <?php echo link_to(__('Observacao', array(), 'messages'), '@contrato', array('query_string' => 'sort=observacao&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Observacao', array(), 'messages'), '@contrato', array('query_string' => 'sort=observacao&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_suspenso">
  <?php if ('suspenso' == $sort[0]): ?>
    <?php echo link_to(__('Suspenso', array(), 'messages'), '@contrato', array('query_string' => 'sort=suspenso&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Suspenso', array(), 'messages'), '@contrato', array('query_string' => 'sort=suspenso&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_aviso1">
  <?php if ('aviso1' == $sort[0]): ?>
    <?php echo link_to(__('Aviso1', array(), 'messages'), '@contrato', array('query_string' => 'sort=aviso1&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Aviso1', array(), 'messages'), '@contrato', array('query_string' => 'sort=aviso1&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_aviso2">
  <?php if ('aviso2' == $sort[0]): ?>
    <?php echo link_to(__('Aviso2', array(), 'messages'), '@contrato', array('query_string' => 'sort=aviso2&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Aviso2', array(), 'messages'), '@contrato', array('query_string' => 'sort=aviso2&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_datacorte">
  <?php if ('datacorte' == $sort[0]): ?>
    <?php echo link_to(__('Datacorte', array(), 'messages'), '@contrato', array('query_string' => 'sort=datacorte&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Datacorte', array(), 'messages'), '@contrato', array('query_string' => 'sort=datacorte&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_dataligacao">
  <?php if ('dataligacao' == $sort[0]): ?>
    <?php echo link_to(__('Dataligacao', array(), 'messages'), '@contrato', array('query_string' => 'sort=dataligacao&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Dataligacao', array(), 'messages'), '@contrato', array('query_string' => 'sort=dataligacao&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_numerocc">
  <?php if ('numerocc' == $sort[0]): ?>
    <?php echo link_to(__('Numerocc', array(), 'messages'), '@contrato', array('query_string' => 'sort=numerocc&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Numerocc', array(), 'messages'), '@contrato', array('query_string' => 'sort=numerocc&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>