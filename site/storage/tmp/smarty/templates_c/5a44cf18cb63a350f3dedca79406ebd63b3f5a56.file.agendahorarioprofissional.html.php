<?php /* Smarty version Smarty-3.1.18, created on 2016-06-01 15:09:24
         compiled from "/var/www/html/easydepil.com.br/public/views/templates/agendahorario/agendahorarioprofissional.html" */ ?>
<?php /*%%SmartyHeaderCode:1034748766574f24d4642de9-38742108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a44cf18cb63a350f3dedca79406ebd63b3f5a56' => 
    array (
      0 => '/var/www/html/easydepil.com.br/public/views/templates/agendahorario/agendahorarioprofissional.html',
      1 => 1464439727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1034748766574f24d4642de9-38742108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lista_agendaprofissional' => 0,
    'linha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_574f24d465f2c5_23506772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f24d465f2c5_23506772')) {function content_574f24d465f2c5_23506772($_smarty_tpl) {?>                    <table class="table">
                    <thead>
                        <tr>
                            <th>Profissional</th>
                            <th>Cargo</th>
                            <th>Celular</th>
                            <th>E-Mail</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars["linha"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["linha"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_agendaprofissional']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["linha"]->key => $_smarty_tpl->tpl_vars["linha"]->value) {
$_smarty_tpl->tpl_vars["linha"]->_loop = true;
?>  
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['dsProfissional'];?>
</td> 
                                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['dsCargo'];?>
</td> 
                                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['dsCelular'];?>
</td> 
                                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['dsEmail'];?>
</td> 
                                <td> 
                                    <a class="glyphicon glyphicon-trash" title ="Excluir" onclick="delcolaborador(<?php echo $_smarty_tpl->tpl_vars['linha']->value['idProfissional'];?>
);" > Excluir </a>
                                </td>
                            </tr>
                        <?php } ?>        
                    </tbody>
                </table>

<?php }} ?>
