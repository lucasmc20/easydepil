<?php /* Smarty version Smarty-3.1.18, created on 2016-05-22 20:21:23
         compiled from "/var/www/html/easydepil.com.br/public/views/templates/comuns/sidebar_dinamico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45865742757423ef32da173-25681268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfe46abfccd0c1643ce490241c53ba1824997b33' => 
    array (
      0 => '/var/www/html/easydepil.com.br/public/views/templates/comuns/sidebar_dinamico.tpl',
      1 => 1452515365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45865742757423ef32da173-25681268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dados_menu' => 0,
    'menu_principal' => 0,
    'itens_menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57423ef3321f44_57440119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57423ef3321f44_57440119')) {function content_57423ef3321f44_57440119($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["menu_principal"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["menu_principal"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dados_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["menu_principal"]->key => $_smarty_tpl->tpl_vars["menu_principal"]->value) {
$_smarty_tpl->tpl_vars["menu_principal"]->_loop = true;
?>
    <?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['menu_principal']->value['filhos']);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==0) {?>    
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['menu_principal']->value['link'];?>
"><i class="fa fa-bar-chart-o"></i> <?php echo $_smarty_tpl->tpl_vars['menu_principal']->value['descricao'];?>
</a></li>
    <?php } else { ?>
        <li class="dropdown">        
            <a href="<?php echo $_smarty_tpl->tpl_vars['menu_principal']->value['link'];?>
" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> <?php echo $_smarty_tpl->tpl_vars['menu_principal']->value['descricao'];?>
<b class="caret"></b></a>        
            <?php  $_smarty_tpl->tpl_vars["itens_menu"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["itens_menu"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_principal']->value['filhos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["itens_menu"]->key => $_smarty_tpl->tpl_vars["itens_menu"]->value) {
$_smarty_tpl->tpl_vars["itens_menu"]->_loop = true;
?>            
                <ul class="dropdown-menu">
                    <li>                       
                        <a href="<?php echo $_smarty_tpl->tpl_vars['itens_menu']->value['link'];?>
"><i class="fa fa-bar-chart-o"></i> <?php echo $_smarty_tpl->tpl_vars['itens_menu']->value['descricao'];?>
</a>
                    </li>             
                </ul>            
            <?php } ?>  
        </li>                    
    <?php }?> 
<?php } ?><?php }} ?>
