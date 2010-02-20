<?php use_helper('I18N', 'Date') ?>

<?php if(!$sf_request->isXmlHttpRequest()): ?><div class="laigu" id="sf_admin_container"><?php endif ?>
  <h1><?php echo __('New Contaspagar', array(), 'messages') ?></h1>

  <?php include_partial('contaspagar/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('contaspagar/form_header', array('contaspagar' => $contaspagar, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('contaspagar/form', array('contaspagar' => $contaspagar, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('contaspagar/form_footer', array('contaspagar' => $contaspagar, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
<?php if(!$sf_request->isXmlHttpRequest()): ?></div><?php endif ?>

<?php include_partial('contaspagar/assets') ?>
