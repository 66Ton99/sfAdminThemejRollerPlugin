<?php if (sfConfig::get('app_sf_admin_theme_jroller_css_reset')):?>
	[?php use_stylesheet('<?php echo sfConfig::get('app_sf_admin_theme_jroller_web_dir','/sfAdminThemejRollerPlugin'). '/css/reset.css'?>') ?]
<?php endif; ?>
<?php if (sfConfig::get('app_sf_admin_theme_jroller_include_jquery')):?>
	[?php use_javascript('<?php echo sfConfig::get('app_sf_admin_theme_jroller_web_dir','/sfAdminThemejRollerPlugin') . '/js/jquery.min.js'?>') ?]
	[?php use_javascript('<?php echo sfConfig::get('app_sf_admin_theme_jroller_web_dir','/sfAdminThemejRollerPlugin') . '/js/jquery-ui.custom.min.js'?>') ?]
	[?php use_stylesheet('<?php echo sfConfig::get('app_sf_admin_theme_jroller_web_dir','/sfAdminThemejRollerPlugin'). '/css/jquery/'. sfConfig::get('app_sf_admin_theme_jroller_theme','redmond').'/jquery-ui.custom.css'?>') ?]
<?php endif;?>
<?php if (isset($this->params['css'])): ?> 
	[?php use_stylesheet('<?php echo $this->params['css'] ?>', 'first') ?] 
<?php else: ?> 
	[?php use_stylesheet('<?php echo sfConfig::get('app_sf_admin_theme_jroller_web_dir','/sfAdminThemejRollerPlugin'). '/css/jroller.css'?>') ?]
<?php endif; ?>
[?php use_stylesheet('<?php echo sfConfig::get('app_sf_admin_theme_jroller_web_dir','/sfAdminThemejRollerPlugin'). '/css/fg.menu.css'?>') ?]
[?php   
	use_javascript('<?php echo sfConfig::get('app_sf_admin_theme_jroller_web_dir','/sfAdminThemejRollerPlugin') . '/js/fg.menu.js'?>');
	use_javascript('<?php echo sfConfig::get('app_sf_admin_theme_jroller_web_dir','/sfAdminThemejRollerPlugin') . '/js/jroller.js'?>');
?]
