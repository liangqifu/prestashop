<?php /* Smarty version Smarty-3.1.19, created on 2016-01-04 17:12:23
         compiled from "/var/lib/openshift/563781552d52714e8400005b/app-root/runtime/repo/shop/modules/blockcategories/views/blockcategories_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1851230809568a3777ce4b69-75145686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2365a0721f74b778521bc016a26ccc8686bd3fd6' => 
    array (
      0 => '/var/lib/openshift/563781552d52714e8400005b/app-root/runtime/repo/shop/modules/blockcategories/views/blockcategories_admin.tpl',
      1 => 1446149814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1851230809568a3777ce4b69-75145686',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'helper' => 0,
    'format' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568a3777d029c7_71472741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568a3777d029c7_71472741')) {function content_568a3777d029c7_71472741($_smarty_tpl) {?>
<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'In the default theme, these images will be displayed in the top horizontal menu; but only if the category is one of the first level (see Top horizontal menu module for more info).','mod'=>'blockcategories'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Menu thumbnails','mod'=>'blockcategories'),$_smarty_tpl);?>

		</span>
	</label>
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['helper']->value;?>

	</div>
	<div class="col-lg-6 col-lg-offset-3">
		<div class="help-block"><?php echo smartyTranslate(array('s'=>'Recommended dimensions (for the default theme): %1spx x %2spx','sprintf'=>array($_smarty_tpl->tpl_vars['format']->value['width'],$_smarty_tpl->tpl_vars['format']->value['height'])),$_smarty_tpl);?>
</div>
	</div>
</div>
<?php }} ?>
