<?php use_helper('I18N', 'Date', 'Url') ?>

<?php if(!$sf_request->isXmlHttpRequest()): ?><div class="laigu" id="sf_admin_container"><?php endif ?>
  <h1><?php echo __('Edit Cliente', array(), 'messages') ?></h1>

  <?php include_partial('cliente/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('cliente/form_header', array('cliente' => $cliente, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('cliente/form', array('cliente' => $cliente, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('cliente/form_footer', array('cliente' => $cliente, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

<?php foreach($configuration->getEditDetail() as $k => $v): ?>
<div id="detail_<?php echo $k ?>" class="laigu"></div>
<script type="text/javascript">
  <?php $xget = array(); foreach($v["params"] as $paramk => $paramv) $xget[] = "xget[$paramk]=".$cliente->$paramv() ?>
  Ext.get("detail_<?php echo $k ?>").load({url: "<?php echo url_for($v["module"]."/index") ?>?<?php echo implode("&", $xget) ?>", scripts: true});
</script>
<?php endforeach ?>

<?php if(!$sf_request->isXmlHttpRequest()): ?></div><?php endif ?>

<?php include_partial('cliente/assets') ?>