<?php /* Smarty version Smarty-3.1.18, created on 2016-01-28 20:48:26
         compiled from "/var/www/html/easydepil.com.br/public/views/templates/fornecedor/lista.html" */ ?>
<?php /*%%SmartyHeaderCode:62036280056aa9aba6b70e6-92251650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bf748d6f0280b65f27c2496c3d792f2da618116' => 
    array (
      0 => '/var/www/html/easydepil.com.br/public/views/templates/fornecedor/lista.html',
      1 => 1453930624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62036280056aa9aba6b70e6-92251650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'buscadescricao' => 0,
    'fornecedor_lista' => 0,
    'linha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56aa9aba7042e9_74007258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aa9aba7042e9_74007258')) {function content_56aa9aba7042e9_74007258($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("comuns/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="wrapper">
    <!--Sidebar -->
    <?php echo $_smarty_tpl->getSubTemplate ("comuns/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
    
    <div id="page-wrapper">
        <!--Altere daqui pra baixo-->
        <h1>Lista de Fornecedores</h1>
        <div class="panel panel-default">            
            <div class="panel-footer">
                <form name="frm-busca-fornecedor" action="/fornecedor/busca_fornecedor" method="POST" enctype="multipart/form-data">
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
        <a class="btn btn-primary" href="/fornecedor/novo_fornecedor"> Novo Fornecedor</a>
        <br>       
        <br>
        <br>
        <table class="table table-striped" border="1">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do Fornecedor</th>
                    <th>Endereco</th>
                    <th>Cidade</th>
                    <th>Tipo</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars["linha"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["linha"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fornecedor_lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["linha"]->key => $_smarty_tpl->tpl_vars["linha"]->value) {
$_smarty_tpl->tpl_vars["linha"]->_loop = true;
?>  
                <tr>
                    <td><a href="/fornecedor/novo_fornecedor/idFornecedor/<?php echo $_smarty_tpl->tpl_vars['linha']->value['idFornecedor'];?>
"><?php echo $_smarty_tpl->tpl_vars['linha']->value['idFornecedor'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['dsFornecedor'];?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['dsEndereco'];?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['dsCidade'];?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['dsTipoFornecedor'];?>
</td> 
                    <td><a class="glyphicon glyphicon-pencil" href="/fornecedor/novo_fornecedor/idFornecedor/<?php echo $_smarty_tpl->tpl_vars['linha']->value['idFornecedor'];?>
">  Editar</a> |  
                        <a class="glyphicon glyphicon-trash" href="/fornecedor/delfornecedor/idFornecedor/<?php echo $_smarty_tpl->tpl_vars['linha']->value['idFornecedor'];?>
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
