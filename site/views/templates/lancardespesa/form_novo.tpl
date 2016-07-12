{include file="comuns/head.tpl"}
<div id="wrapper">
    <!-- Sidebar -->
    {include file="comuns/sidebar.tpl"}    
    <div id="page-wrapper">
        <!--Altere daqui pra baixo-->
        <div class="panel-body">
            <br>
            <div class="alert alert-info" >
                <tt><h1>Lancamento de Despesas</h1></tt>
            </div> 
            <div class="row">                
                <div class="col-xs-2">
                    <a class="btn btn-primary" id="btn-gravarcabecalho" title="Clique aqui para gravar os dados da despesa"onclick="lancardespesa.gravardespesa();" >Gravar Despesa</a> 
                </div> 
                <div class="col-xs-2">
                    <a  class="btn btn-primary" id="btn-sairtela" title="Clique aqui para sair desta tela e voltar ao menu principal" href="/dashboard" > Sair da Tela </a><br>                
                </div>
            </div>    
            <br>
            <div class="row">
                <div class="col-xs-1">
                    <div class="form-group">
                        <label for="movimento">Código</label>
                        <input type="text" class="form-control" name="idFinanceiro" id="idFinanceiro" value="{$registro.idFinanceiro|default:''}" READONLY>           
                    </div>
                </div>                
                <div class="col-xs-1">
                    <label for="form-control">Data</label>
                    <input type="text" class="form-control obg standard-mask-date standard-form-date standard-form-require" name="dtFinanceiro" id="dtFinanceiro" value="{$registro.dtFinanceiro|date_format:'%d/%m/%Y'|default:Date("d/m/Y")}" >           
                </div>                         
                <div class="col-xs-2">
                    <div class="form-group">
                        <label for="despesa">Despesa</label>
                        <select class="form-control" name="idDespesa" id="idDespesa">
                            {html_options options=$lista_despesa selected=$registro.idDespesa}
                        </select>                      
                    </div>
                </div>                     
                <div class="col-xs-2">
                    <div class="form-group">
                        <label for="fornecedor">Fornecedor</label>
                        <select class="form-control" name="idFornecedor" id="idFornecedor">
                            {html_options options=$lista_fornecedor selected=$registro.idFornecedor}
                        </select>                      
                    </div>
                </div>                     
                <div class="col-xs-2">
                    <label for="form-control">Observacao</label>
                    <input type="text" class="form-control" name="dsObservacao" id="dsObservacao" value="{$registro.dsObservacao|default:''}" >           
                </div> 
                <div class="col-xs-2">
                    <label for="form-control">Valor Despesa</label>
                    <input type="text" class="form-control obg valor" name="vlFinanceiro" id="vlFinanceiro" value=""> 
                </div> 
                <div class="col-xs-2">
                    <div class="form-group">
                        <label for="formapagamento">Forma Pagamento</label>
                        <select class="form-control" name="idFormaPagamento" id="idFormaPagamento">
                            {html_options options=$lista_formapagamento selected=$registro.idFormaPagamento}
                        </select>                      
                    </div>
                </div>                     
            </div> 
        </div>
        {include file="lancardespesa/lista.html"}
            
        <!--Altere daqui pra cima-->
    </div>
</div>

<!-- JavaScript -->
<script src="/files/js/jquery.price_format.1.3"></script>
<script src="/files/js/jquery-1.10.2.js"></script>
<script src="/files/js/bootstrap.js"></script>
<!-- Toast Message -->
<script src="/files/js/toastmessage/javascript/jquery.toastmessage.js"></script>
<!-- Utils -->
<script src="/files/js/util.js"></script>
<script src="/files/js/lancardespesa/lancardespesa.js"></script>



{include file="comuns/footer.tpl"}

