<?php /* Smarty version Smarty-3.1.18, created on 2016-01-15 20:25:15
         compiled from "/var/www/html/trocainteligente.com.br/public/views/templates/tiCadastroPlano/novo_plano.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2116454661569971cb2082b9-31887030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7962fded109228886d849f2002075ba14a875b89' => 
    array (
      0 => '/var/www/html/trocainteligente.com.br/public/views/templates/tiCadastroPlano/novo_plano.tpl',
      1 => 1452700425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2116454661569971cb2082b9-31887030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tituloPagina' => 0,
    'aba' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_569971cb22c694_84061679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569971cb22c694_84061679')) {function content_569971cb22c694_84061679($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("comuns/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="wrapper">
    <!-- Sidebar -->
    <?php echo $_smarty_tpl->getSubTemplate ("comuns/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
    
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="col-xs-12 main">
                <div class="col-xs-12">
                    <form name="frm_plano" 
                          action="/tiCadastroPlano/gravar_plano" 
                          method="POST" 
                          enctype="multipart/form-data"
                          onsubmit="return validaFormGeral();">

                        <div class="row row-button-top">
                            <div class="col-xs-6">
                                <h1 class="page-header"><?php echo $_smarty_tpl->tpl_vars['tituloPagina']->value;?>
</h1>
                            </div>

                            <div class="col-xs-12 col-md-2 col-lg-2 button-m-top pull-right">
                                <a href="/tiCadastroPlano" class="btn btn-default btn-retornar form-control">RETORNAR</a>
                            </div>

                            <div class="col-xs-12 col-md-2 col-lg-2 button-m-top pull-right">
                                <input type="button" id="salvar" class="btn btn-default btn-salvar form-control" value="SALVAR" onClick="enviarDados();"/>
                            </div>
                        </div>

                        <ul class="nav nav-tabs">                        
                            <li><a href="/tiCadastroPlano">BUSCAR</a></li>
                            <li id="li_novo_plano" class="active"><a href="#novo_plano" data-toggle="tab">DADOS BASICOS</a></li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['aba']->value<2) {?>active in<?php }?>" id="novo_plano">
                                <?php echo $_smarty_tpl->getSubTemplate ("tiCadastroPlano/novo_plano_geral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            </div>                            
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>                            
<script type="text/javascript" src="/files/js/jquery.price/jquery.price_format.1.3.js"></script>
<script type="text/javascript" src="/files/js/tiCadastroPlano/plano_novo.js"></script>
<script src="/files/js/jquery-1.10.2.js"></script>
<script src="/files/js/util.js" type="text/javascript"></script>
<script src="/files/js/toastmessage/javascript/jquery.toastmessage.js" type="text/javascript"></script>
<script type="text/javascript" src="/files/js/jquery_ui/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/files/js/bootstrap.js"></script>
<script type="text/javascript" src="/files/js/jquery.mask.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("comuns/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
