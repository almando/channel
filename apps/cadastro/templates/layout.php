<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php use_helper('JavascriptBase') ?>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <?php javascript_tag(); ?>
    var outerLayout; //init global vars
    $(document).ready( function() {
	//layout da pagina
	    outerLayout = $('body').layout({
		    applyDefaultStyles: true
		    //auto redimensionamento 
		    , west__onresize: function() { $("#accordion").accordion("resize"); }
		    , west__size: 280
		    , east__size: 340
	    });
     	    var accor = $("#accordion").accordion({
		    fillSpace: true,
		    header: "h3",
		    animated: 'bounceslide',
		    active: false,
		    navigation: true
	    });
	    <?php switch($this->getModuleName()):
	        case 'sfGuardUser': ?>
	    <?php case 'sfGuardPermission': ?>
	        $("#accordion").accordion('activate', 0);
	        <?php break; ?>
	    <?php case 'cadastro': ?>
	        $("#accordion").accordion('activate', 1);
	        <?php break; ?>
	    <?php endswitch; ?>
    });
    <?php end_javascript_tag(); ?>

  </head>
  <body>
	<div class="ui-layout-west">
	    <div id="accordion" class="basic">
			<h3><a href="#">Usuarios</a></h3>
			<div>
				<p> Gerência de usuarios, grupos e permissoes. </p>
				<ul>
                <li><?php echo link_to('Lista Usuários', 'sfGuardUser/index') ?> </li>
                <li><?php echo link_to('Novo Usuário', 'sfGuardUser/new') ?> </li>
                <li><?php echo link_to('Lista Grupos', 'sfGuardGroup/index') ?> </li>
                <li><?php echo link_to('Novo Grupo', 'sfGuardGroup/new') ?> </li>
                <li><?php echo link_to('Lista Permissões', 'sfGuardPermission/index') ?> </li>
				</ul>
			</div>
			
		</div>
	</div>
	<div class="ui-layout-center">
	    <?php echo $sf_content ?>
    </div>

  </body>
</html>
