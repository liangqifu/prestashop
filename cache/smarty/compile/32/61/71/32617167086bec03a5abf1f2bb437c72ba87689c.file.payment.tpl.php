<?php /* Smarty version Smarty-3.1.19, created on 2016-01-10 15:25:49
         compiled from "/var/lib/openshift/563781552d52714e8400005b/app-root/runtime/repo/shop/themes/default-bootstrap/modules/cheque/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10747552895692077de1a870-64414751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32617167086bec03a5abf1f2bb437c72ba87689c' => 
    array (
      0 => '/var/lib/openshift/563781552d52714e8400005b/app-root/runtime/repo/shop/themes/default-bootstrap/modules/cheque/views/templates/hook/payment.tpl',
      1 => 1446149814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10747552895692077de1a870-64414751',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5692077de2c3b3_29768892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5692077de2c3b3_29768892')) {function content_5692077de2c3b3_29768892($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
        <p class="payment_module">
            <a class="cheque" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','payment',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl);?>
">
                <?php echo smartyTranslate(array('s'=>'Pay by check','mod'=>'cheque'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'cheque'),$_smarty_tpl);?>
</span>
            </a>
        </p>
    </div>
</div>
<?php }} ?>
