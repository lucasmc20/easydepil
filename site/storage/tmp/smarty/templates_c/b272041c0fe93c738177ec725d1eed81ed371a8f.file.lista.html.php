<?php /* Smarty version Smarty-3.1.18, created on 2016-05-29 17:24:29
         compiled from "/var/www/html/easydepil.com.br/public/views/templates/profissional/lista.html" */ ?>
<?php /*%%SmartyHeaderCode:248606879574b4ffdca91b8-17771292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b272041c0fe93c738177ec725d1eed81ed371a8f' => 
    array (
      0 => '/var/www/html/easydepil.com.br/public/views/templates/profissional/lista.html',
      1 => 1464359535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248606879574b4ffdca91b8-17771292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'buscadescricao' => 0,
    'profissional_lista' => 0,
    'linha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_574b4ffdd0afe0_27175314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574b4ffdd0afe0_27175314')) {function content_574b4ffdd0afe0_27175314($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("comuns/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="wrapper">
    <!--Sidebar -->
    <?php echo $_smarty_tpl->getSubTemplate ("comuns/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
    
    <div id="page-wrapper">
        <!--Altere daqui pra baixo-->
        <br>
        <h1>Lista de Profissionales</h1>
        <br>
        <div class="panel panel-default">            
            <div class="panel-footer">
                <form name="frm-busca-profissional" action="/profissional/busca_profissional" method="POST" enctype="multipart/form-data">
                    Descrição:
                    <div class="input-group">
                        <input type="text" class="form-control" id="buscadescricao" name="buscadescricao" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['buscadescricao']->value)===null||$tmp==='' ? '' : $tmp);?>
" >
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">Buscar</button>
                            <br>
                            <br>
                        </span>          
                    </div>
                </form>
            </div>
        </div>
        <br>
        <a class="btn btn-primary" href="/profissional/novo_profissional"> Novo Profissional</a>
        <br>       
        <br>
        <br>
        <table class="table table-striped" border="1">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do Profissional</th>
                    <th>Celular</th>
                    <th>E-Mail</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars["linha"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["linha"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profissional_lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["linha"]->key => $_smarty_tpl->tpl_vars["linha"]->value) {
$_smarty_tpl->tpl_vars["linha"]->_loop = true;
?>  
                <tr>
                    <td><a href="/profissional/novo_profissional/idProfissional/<?php echo $_smarty_tpl->tpl_vars['linha']->value['idProfissional'];?>
"><?php echo $_smarty_tpl->tpl_vars['linha']->value['idProfissional'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['dsProfissional'];?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['dsCelular'];?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['dsEmail'];?>
</td> 
                    <td><a class="glyphicon glyphicon-pencil" href="/profissional/novo_profissional/idProfissional/<?php echo $_smarty_tpl->tpl_vars['linha']->value['idProfissional'];?>
">  Editar</a> |  
                        <a class="glyphicon glyphicon-trash" href="/profissional/delprofissional/idProfissional/<?php echo $_smarty_tpl->tpl_vars['linha']->value['idProfissional'];?>
">  Excluir</a></td>
                </tr>
                <?php } ?>        
            </tbody>
        </table>
        <!--Altere daqui pra cima-->
    </div>
</div>
<!-- JavaScript -->
<script src="/files/js/jquery-1.10.2.js"></script>
<script src="/files/js/bootstrap.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("comuns/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
