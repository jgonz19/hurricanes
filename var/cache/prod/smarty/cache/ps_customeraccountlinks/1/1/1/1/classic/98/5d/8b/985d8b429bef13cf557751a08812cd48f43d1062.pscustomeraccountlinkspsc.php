<?php
/* Smarty version 3.1.43, created on 2022-07-23 13:43:25
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62dbdedd6b3787_77424060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1658575415,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_62dbdedd6b3787_77424060 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/Users/jeysongonzalez/Documents/GitHub/prestashop_1.7.8.6/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/2c/40/4c/2c404c4719efbda9ef8fa2ca0313b2aa34a4950d_2.file.helpers.tpl.php',
    'uid' => '2c404c4719efbda9ef8fa2ca0313b2aa34a4950d',
    'call_name' => 'smarty_template_function_renderLogo_15299581162dbdedd60e451_90303901',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost:8000/index.php?controller=my-account" rel="nofollow">
      Your account
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Your account</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://localhost:8000/index.php?controller=identity" title="Personal info" rel="nofollow">
            Personal info
          </a>
        </li>
            <li>
          <a href="http://localhost:8000/index.php?controller=history" title="Orders" rel="nofollow">
            Orders
          </a>
        </li>
            <li>
          <a href="http://localhost:8000/index.php?controller=order-slip" title="Credit slips" rel="nofollow">
            Credit slips
          </a>
        </li>
            <li>
          <a href="http://localhost:8000/index.php?controller=addresses" title="Addresses" rel="nofollow">
            Addresses
          </a>
        </li>
        
	</ul>
</div>
<?php }
}
