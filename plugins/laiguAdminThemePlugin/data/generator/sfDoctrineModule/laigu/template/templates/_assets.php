[?php use_stylesheet('<?php echo sfConfig::get('app_laigu_admin_theme_plugin_web_dir_extjs').'/resources/css/ext-all.css' ?>', 'first') ?]
[?php use_javascript('<?php echo sfConfig::get('app_laigu_admin_theme_plugin_web_dir_extjs').'/adapter/ext/ext-base.js' ?>', 'first') ?]
[?php use_javascript('<?php echo sfConfig::get('app_laigu_admin_theme_plugin_web_dir_extjs').'/ext-all.js' ?>', 'first') ?]

<?php if (isset($this->params['css']) && ($this->params['css'] !== false)): ?> 
[?php use_stylesheet('<?php echo $this->params['css'] ?>', 'first') ?] 
<?php elseif(!isset($this->params['css'])): ?> 
[?php use_stylesheet('<?php echo sfConfig::get('sf_admin_module_web_dir').'/css/global.css' ?>', 'first') ?] 
[?php use_stylesheet('<?php echo sfConfig::get('sf_admin_module_web_dir').'/css/default.css' ?>', 'first') ?] 
<?php endif; ?>


[?php use_stylesheet('/laiguAdminThemePlugin/css/laiguAdminTheme.css', 'first') ?]

<script type="text/javascript">
laiguLoadAjax = function(url, el_target)
{
  Ext.get(el_target).parent("div.laigu").load({url: url, scripts: true});
}

laiguSubmitAjax = function(url, el_target)
{
  Ext.get(el_target).parent("div.laigu").load({url: url, scripts: true, form: el_target});
}

Ext.select('a.laigu_ajax').on('click', function(ev, t) {
  // if is an image
  if (t.tagName == "IMG") t = t.parentNode;
  ev.stopPropagation(); // Cancels bubbling of the event
  ev.stopEvent() // preventDefault + stopPropagation
  laiguLoadAjax(t.href, t);
});

Ext.select('a.laigu_ajax_method_javascript_function').each(function(e){
  var onclick_content = e.getAttribute("onclick");
  onclick_content = onclick_content.replace("f\.submit()", "laiguSubmitAjax(f.action, f)");
  e.set({onclick: onclick_content});
});

Ext.select('input.laigu_ajax[type=submit]').on('click', function(ev, t) {
  ev.stopPropagation(); // Cancels bubbling of the event
  ev.stopEvent() // preventDefault + stopPropagation
  laiguSubmitAjax(t.form.action, t.form);
});

</script>