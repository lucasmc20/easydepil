<?php /* Smarty version Smarty-3.1.18, created on 2016-04-29 12:36:28
         compiled from "/var/www/html/easydepil.com.br/public/views/templates/osaprovar/lista.html" */ ?>
<?php /*%%SmartyHeaderCode:104495068157237f7c197574-99662794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e968732dc667617542a4954f3724549976649f4' => 
    array (
      0 => '/var/www/html/easydepil.com.br/public/views/templates/osaprovar/lista.html',
      1 => 1457792469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104495068157237f7c197574-99662794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'buscadescricao' => 0,
    'os' => 0,
    'linha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57237f7c1e1d23_12974850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57237f7c1e1d23_12974850')) {function content_57237f7c1e1d23_12974850($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/easydepil.com.br/git/site/system/libs/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("comuns/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="wrapper">
    <!--Sidebar -->
    <?php echo $_smarty_tpl->getSubTemplate ("comuns/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
    
    <div id="page-wrapper">
        <!--Altere daqui pra baixo-->
        <br>
        <h3>Lista de Ordem de Serviço - Aprovar</h3>
        <br>
        <div class="panel panel-default">            
            <div class="panel-footer">
                <form name="frm-busca-os" action="/osaprovar/busca_os" method="POST" enctype="multipart/form-data">
                    Descrição:
                    <div class="input-group">
                        <input type="text" class="form-control" id="buscadescricao" name="buscadescricao" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['buscadescricao']->value)===null||$tmp==='' ? '' : $tmp);?>
" >
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">Buscar</button>
                            <br>
                        </span>          
                    </div>
                </form>
            </div>
        </div>
        <br>       
        <br>
        <table class="table table-striped" border="1">
            <thead>
                <tr>
                    <th>Sequencia</th>
                    <th>O.S.</th>
                    <th>Data</th>
                    <th>Solicitante</th>
                    <th>Setor</th>
                    <th>Tipo de Manutenção</th>
                    <th>Status</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars["linha"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["linha"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['os']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["linha"]->key => $_smarty_tpl->tpl_vars["linha"]->value) {
$_smarty_tpl->tpl_vars["linha"]->_loop = true;
?>  
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['idOS'];?>
</td>
                    <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['linha']->value['nrOS'])===null||$tmp==='' ? '' : $tmp);?>
</td>
                    <td><?php echo (($tmp = @smarty_modifier_date_format($_smarty_tpl->tpl_vars['linha']->value['dtOS'],'%d/%m/%Y'))===null||$tmp==='' ? Date("d/m/Y") : $tmp);?>
</td> 
                    <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['linha']->value['dsSolicitante'])===null||$tmp==='' ? '' : $tmp);?>
</td> 
                    <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['linha']->value['dsSetor'])===null||$tmp==='' ? '' : $tmp);?>
</td> 
                    <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['linha']->value['dsTipoManutencao'])===null||$tmp==='' ? '' : $tmp);?>
</td> 
                    <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['linha']->value['dsStatusOS'])===null||$tmp==='' ? '' : $tmp);?>
</td> 
                    <td>
                        <a class="glyphicon glyphicon-pencil" title="Informar os dados da aprovação" href="/osaprovar/novo_osaprovar/idOS/<?php echo $_smarty_tpl->tpl_vars['linha']->value['idOS'];?>
"> Aprovar</a>
                    </td>
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
