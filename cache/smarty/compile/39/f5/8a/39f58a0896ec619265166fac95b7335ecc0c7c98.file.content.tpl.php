<?php /* Smarty version Smarty-3.1.19, created on 2015-12-30 23:20:10
         compiled from "/var/lib/openshift/563781552d52714e8400005b/app-root/runtime/repo/shop/admin813frvbeq/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7920013785683f62a8332d2-11848560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39f58a0896ec619265166fac95b7335ecc0c7c98' => 
    array (
      0 => '/var/lib/openshift/563781552d52714e8400005b/app-root/runtime/repo/shop/admin813frvbeq/themes/default/template/content.tpl',
      1 => 1446149812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7920013785683f62a8332d2-11848560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5683f62a850cb5_11642052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5683f62a850cb5_11642052')) {function content_5683f62a850cb5_11642052($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
