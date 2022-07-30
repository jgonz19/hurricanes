<?php
/* Smarty version 3.1.43, created on 2022-07-23 13:43:25
  from '/Users/jeysongonzalez/Documents/GitHub/prestashop_1.7.8.6/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62dbdedd610506_38684966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c404c4719efbda9ef8fa2ca0313b2aa34a4950d' => 
    array (
      0 => '/Users/jeysongonzalez/Documents/GitHub/prestashop_1.7.8.6/themes/classic/templates/_partials/helpers.tpl',
      1 => 1658575415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dbdedd610506_38684966 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/Users/jeysongonzalez/Documents/GitHub/prestashop_1.7.8.6/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/2c/40/4c/2c404c4719efbda9ef8fa2ca0313b2aa34a4950d_2.file.helpers.tpl.php',
    'uid' => '2c404c4719efbda9ef8fa2ca0313b2aa34a4950d',
    'call_name' => 'smarty_template_function_renderLogo_15299581162dbdedd60e451_90303901',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_15299581162dbdedd60e451_90303901 */
if (!function_exists('smarty_template_function_renderLogo_15299581162dbdedd60e451_90303901')) {
function smarty_template_function_renderLogo_15299581162dbdedd60e451_90303901(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_15299581162dbdedd60e451_90303901 */
}
