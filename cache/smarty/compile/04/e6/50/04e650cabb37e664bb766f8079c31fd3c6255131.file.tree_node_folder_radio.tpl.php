<?php /* Smarty version Smarty-3.1.19, created on 2016-01-04 15:59:09
         compiled from "/var/lib/openshift/563781552d52714e8400005b/app-root/runtime/repo/shop/admin813frvbeq/themes/default/template/helpers/tree/tree_node_folder_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2060909501568a264d6712a6-35779881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04e650cabb37e664bb766f8079c31fd3c6255131' => 
    array (
      0 => '/var/lib/openshift/563781552d52714e8400005b/app-root/runtime/repo/shop/admin813frvbeq/themes/default/template/helpers/tree/tree_node_folder_radio.tpl',
      1 => 1446149812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2060909501568a264d6712a6-35779881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'root_category' => 0,
    'input_name' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568a264d6b3631_78014920',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568a264d6b3631_78014920')) {function content_568a264d6b3631_78014920($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/lib/openshift/563781552d52714e8400005b/app-root/runtime/repo/shop/tools/smarty/plugins/modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-folder-name-disable<?php }?>">
		<?php if ($_smarty_tpl->tpl_vars['node']->value['id_category']!=$_smarty_tpl->tpl_vars['root_category']->value) {?>
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<?php }?>
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li>
<?php }} ?>
