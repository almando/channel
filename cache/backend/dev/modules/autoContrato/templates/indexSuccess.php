<?php use_helper('I18N', 'Date') ?>

<?php if(!$sf_request->isXmlHttpRequest()): ?><div class="laigu" id="sf_admin_container"><?php endif ?>
  <h1><?php echo __('Contrato List', array(), 'messages') ?></h1>

  <?php include_partial('contrato/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('contrato/list_header', array('pager' => $pager)) ?>
  </div>

<div id="filter_win4b848fd552e17" class="x-container" style="visibility: hidden; float: right;">
    <div class="x-panel-header"><?php echo __('Filters', array(), 'sf_admin') ?></div>
    <div class="x-panel-body" id="filter_div4b848fd552e17">
      <?php include_partial('contrato/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
    </div>
</div>

<script type="text/javascript">
Ext.onReady(function(){
    var panel;
    panel = new Ext.Panel({
        title: 'Filters',
        collapsible: true,
        applyTo:'filter_win4b848fd552e17',
        style: {visibility: 'visible'}
    });
    panel.show();

});
</script>


  <div id="sf_admin_content">
    <form action="<?php echo url_for('contrato_collection', array('action' => 'batch')) ?>" method="post">
    <?php include_partial('contrato/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    <ul class="sf_admin_actions">
      <?php include_partial('contrato/list_batch_actions', array('helper' => $helper)) ?>
      <?php include_partial('contrato/list_actions', array('helper' => $helper)) ?>
    </ul>
    </form>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('contrato/list_footer', array('pager' => $pager)) ?>
  </div>
<?php if(!$sf_request->isXmlHttpRequest()): ?></div><?php endif ?>

<?php include_partial('contrato/assets') ?>
