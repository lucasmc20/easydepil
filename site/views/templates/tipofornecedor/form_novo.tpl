{include file="comuns/head.tpl"}
<div id="wrapper">
    <!-- Sidebar -->
    {include file="comuns/sidebar.tpl"}    
    <div id="page-wrapper">
        <!--Altere daqui pra baixo-->
        <div class="panel-body">
            <div class="alert alert-info" >
                <tt><h1>{if {$registro.idTipoFornecedor}>0} {$registro.dsTipoFornecedor|default:''} {else} Inclus&atilde;o de Tipos de Fornecedores {/if}</h1></tt>
            </div>          
            <a href="/tipofornecedor" class="btn btn-primary"> Voltar</a><br>

            <form name="frm-tipofornecedor" 
                  action="/tipofornecedor/gravar_tipofornecedor" 
                  method="POST" 
                  enctype="multipart/form-data"
                  onsubmit="return validaFormulario()">
                <br>
                <div class="input-group col-lg-8">                    
                    {if {$registro.idTipoFornecedor}>0}
                        <span class="input-group-addon btn-outline btn-primary">Código</span>
                            <input type="text" class="form-control" name="idTipoFornecedor" id="idTipoFornecedor" value="{$registro.idTipoFornecedor}" READONLY>           
                    {else}
                        <span class="input-group-addon btn-outline btn-primary">Código</span>
                              <input type="text" class="form-control" name="idTipoFornecedor" value="" READONLY>           
                    {/if}                     
                    <span class="input-group-addon btn-outline btn-primary">Descri&ccedil;&atilde;o</span>
                        <input type="text" class="form-control" name="descricao" id="descricao" value="{$registro.dsTipoFornecedor|default:''}" >           
                </div> 
                <br>            
                    <input type="submit" value="Gravar" name="btnGravar" class="btn btn-primary" />         
                <br>
                <br>
            </form>
            
        <!--Altere daqui pra cima-->
    </div>
</div>

<!-- JavaScript -->
<script src="/files/js/jquery-1.10.2.js"></script>
<script src="/files/js/bootstrap.js"></script>
<!-- Toast Message -->
<script src="/files/js/toastmessage/javascript/jquery.toastmessage.js"></script>
<!-- Utils -->
<script src="/files/js/util.js"></script>
<script src="/files/js/tipofornecedor/tipofornecedor_novo.js"></script>



{include file="comuns/footer.tpl"}

