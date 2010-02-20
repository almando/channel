<?php use_helper('I18N', 'Date') ?>

<?php if(!$sf_request->isXmlHttpRequest()): ?><div class="laigu" id="sf_admin_container"><?php endif ?>
  <h1><?php echo __('Contaspagar List', array(), 'messages') ?></h1>

  <?php include_partial('contaspagar/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('contaspagar/list_header', array('pager' => $pager)) ?>
  </div>

<div id="filter_win4b7ff85b49670" class="x-container" style="visibility: hidden; float: right;">
    <div class="x-panel-header"><?php echo __('Filters', array(), 'sf_admin') ?></div>
    <div class="x-panel-body" id="filter_div4b7ff85b49670">
      <?php include_partial('contaspagar/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
    </div>
</div>

<script type="text/javascript">
Ext.onReady(function(){
    var panel;
    panel = new Ext.Panel({
        title: 'Filters',
        collapsible: true,
        applyTo:'filter_win4b7ff85b49670',
        style: {visibility: 'visible'}
    });
    panel.show();

});
</script>


  <div id="sf_admin_content">
    <form action="<?php echo url_for('contaspagar_collection', array('action' => 'batch')) ?>" method="post">
    <?php include_partial('contaspagar/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    <ul class="sf_admin_actions">
      <?php include_partial('contaspagar/list_batch_actions', array('helper' => $helper)) ?>
      <?php include_partial('contaspagar/list_actions', array('helper' => $helper)) ?>
    </ul>
    </form>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('contaspagar/list_footer', array('pager' => $pager)) ?>
  </div>
<?php if(!$sf_request->isXmlHttpRequest()): ?></div><?php endif ?>

<?php include_partial('contaspagar/assets') ?>
