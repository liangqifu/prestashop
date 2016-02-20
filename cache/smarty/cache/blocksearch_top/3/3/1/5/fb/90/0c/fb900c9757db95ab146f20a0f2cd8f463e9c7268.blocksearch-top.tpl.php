<?php /*%%SmartyHeaderCode:13775888905683f5c557e435-86262383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb900c9757db95ab146f20a0f2cd8f463e9c7268' => 
    array (
      0 => '/var/lib/openshift/563781552d52714e8400005b/app-root/runtime/repo/shop/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1446149814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13775888905683f5c557e435-86262383',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c30f3bca2b88_96011336',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c30f3bca2b88_96011336')) {function content_56c30f3bca2b88_96011336($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//www.kevinliangccm.com/shop/zh/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="搜索" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>搜索</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
