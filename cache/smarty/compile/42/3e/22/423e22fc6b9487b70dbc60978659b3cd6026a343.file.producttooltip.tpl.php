<?php /* Smarty version Smarty-3.1.19, created on 2015-12-30 23:19:55
         compiled from "/var/lib/openshift/563781552d52714e8400005b/app-root/runtime/repo/shop/modules/producttooltip/views/templates/hook/producttooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20678930805683f61b0b5f34-29135505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '423e22fc6b9487b70dbc60978659b3cd6026a343' => 
    array (
      0 => '/var/lib/openshift/563781552d52714e8400005b/app-root/runtime/repo/shop/modules/producttooltip/views/templates/hook/producttooltip.tpl',
      1 => 1446149814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20678930805683f61b0b5f34-29135505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nb_people' => 0,
    'date_last_order' => 0,
    'date_last_cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5683f61b0f2662_72385099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5683f61b0f2662_72385099')) {function content_5683f61b0f2662_72385099($_smarty_tpl) {?>
<script type="text/javascript">
    $(document).ready(function () {
        <?php if (isset($_smarty_tpl->tpl_vars['nb_people']->value)) {?>
        $.growl({title: '', message: '<?php if ($_smarty_tpl->tpl_vars['nb_people']->value==1) {?><?php echo smartyTranslate(array('s'=>'%d person is currently watching this product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_people']->value,'mod'=>'producttooltip','js'=>1),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'%d people are currently watching this product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_people']->value,'mod'=>'producttooltip','js'=>1),$_smarty_tpl);?>
<?php }?>'});
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['date_last_order']->value)) {?>
        $.growl({title: '', message: '<?php echo smartyTranslate(array('s'=>'Last time this product was bought: ','mod'=>'producttooltip','js'=>1),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['date_last_order']->value,'full'=>1),$_smarty_tpl);?>
'});
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['date_last_cart']->value)) {?>
        $.growl({title: '', message: '<?php echo smartyTranslate(array('s'=>'Last time this product was added to a cart: ','mod'=>'producttooltip','js'=>1),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['date_last_cart']->value,'full'=>1),$_smarty_tpl);?>
'});
        <?php }?>

        });
</script>
<?php }} ?>
