<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('Pedido')?>">Pedido</a>
    </li>
    <li class="breadcrumb-item active">Adicionar</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="">
                    <h3>Pedido</h3>
                </div>

                <div class="">

                </div>
            </div> 

        </div>
    </div>       
    <div class="container-fluid">


        <div class="card-body"> 


            <?php echo form_open('pedido/add',array("class"=>"form-horizontal")); ?>

            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="row"> 
                    <div class="form-group col-md-3">
                        <label> Tipo de pedido</label>
                        <div class="">
                            <select name="tipoPedido" class="form-control">
                                <option value="">Selecione o Tipo Pedido</option>
                                <?php 
                                foreach($all_tipopedidos as $tipopedido)
                                {
                                    $selected = ($tipopedido['IDTipoPedido'] == $this->input->post('tipoPedido')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$tipopedido['IDTipoPedido'].'" '.$selected.'>'.$tipopedido['Descricao'].'</option>';
                                } 
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="IDPessoa" class="col-md-12 control-label">Selecione o Cliente</label>                        
                        <select id="selPessoa" data-live-search="true" name="IDPessoa" class="form-control">
                            <option value="">Selecione um cliente </option>
                            <?php 
                            foreach($all_pessoas as $pessoa)
                            {
                                $selected = ($pessoa['IDPessoa'] == $this->input->post('IDPessoa')) ? ' selected="selected"' : "";

                                echo '<option value="'.$pessoa['IDPessoa'].'" '.$selected.'>'.$pessoa['nome'].'</option>';
                            } 
                            ?>
                        </select>

                    </div>
                    <div class="form-group col-md-2">
                        <label for="data" class=" control-label">Numero Pedido</label>
                        <div class="">                    
                            <input type="number" name="data" value="<?php echo $this->input->post('data'); ?>" class="form-control" id="data" />
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="data" class=" control-label">Data</label>
                        <div class="">                    
                            <input type="date" name="data" value="<?php echo $this->input->post('data'); ?>" class="form-control" id="data" />
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label class="control-label">
                        <span>Buscar Produto</span>                   
                    </label>
                    <div>
                        <input class="form-control" type="text" name="buscar" id="busca" />
                    </div>
                </div>              



                <div class="form-group col-md-6">
                     <label class="control-label">
                        <span>Selecione o Produto</span>                   
                    </label>
                    <select action="" class="form-control " method="post" enctype="multipart/form-data" id="resultado_busca">

                    </select>
                </div>
            </div>

            <div>
                <div id="list" class="row">

                    <div class="row ml-3">
                        <div class="form-group col-md-1 p-1">
                            <label for="data" class=" control-label">Código</label>
                            <div class="">                    
                                <input type="text" name="data" value="<?php echo $this->input->post('data'); ?>" class="form-control" id="produto" />
                            </div>
                        </div>
                        <div class="form-group col-md-3 p-1">
                            <label for="data" class=" control-label">Descrição</label>
                            <div class="">                    
                                <input type="text" name="data" value="<?php echo $this->input->post('data'); ?>" class="form-control" id="data" />
                            </div>
                        </div>
                        <div class="form-group col-md-1 p-1">
                            <label for="data" class=" control-label">Unidade</label>
                            <div class="">                    
                                <input type="text" name="data" value="<?php echo $this->input->post('data'); ?>" class="form-control" id="data" />
                            </div>
                        </div>
                        <div class="form-group col-md-1 p-1">
                            <label for="data" class=" control-label">Quantidade</label>
                            <div class="">                    
                                <input type="text" name="data" value="<?php echo $this->input->post('data'); ?>" class="form-control" id="data" />
                            </div>
                        </div>
                        <div class="form-group col-md-1 p-1">
                            <label for="data" class=" control-label">Preço Tab</label>
                            <div class="">                    
                                <input type="text" name="data" value="<?php echo $this->input->post('data'); ?>" class="form-control" id="data" />
                            </div>
                        </div>
                        <div class="form-group col-md-1 p-1">
                            <label for="data" class=" control-label">Desc %</label>
                            <div class="">                    
                                <input type="text" name="data" value="<?php echo $this->input->post('data'); ?>" class="form-control" id="data" />
                            </div>
                        </div>
                        <div class="form-group col-md-1 p-1">
                            <label for="data" class=" control-label">Preço Un</label>
                            <div class="">                    
                                <input type="text" name="data" value="<?php echo $this->input->post('data'); ?>" class="form-control" id="data" />
                            </div>
                        </div>
                        <div class="form-group col-md-2 p-1">
                            <label for="data" class=" control-label">Preço total</label>
                            <div class="">                    
                                <input type="text" name="data" value="<?php echo $this->input->post('data'); ?>" class="form-control" id="data" />
                            </div>
                        </div> 
                        <div class="form-group col-md-1 p-2 mt-1">
                            <label for="data" class=" control-label"></label>
                            <div class="">                    
                                <a  name="data" class="btn btn-success active" onclick="AddTableRow()" id="data">Incluir</a>
                            </div>
                        </div>                    
                    </div>

                    <div class="table-responsive col-md-12">
                        <table id="itensPedido"class="table table-striped" cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Descrição</th>
                                    <th>Unidade</th>
                                    <th>Quantidade</th>
                                    <th>Preço</th>
                                    <th>Desc %</th>
                                    <th>Preço Un</th>
                                    <th>Preço Total</th>                                            
                                    <th class="actions">Ações</th>
                                </tr>
                            </thead>
                            <tbody id="itens">

                            </tbody>
                        </table>

                    </div>
                </div> <!-- /#list -->
            </div>

            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="row"> 
                    <div class="form-group">
                        <label for="tipoPagamento" class=" control-label">Tipo De Pagamento</label>
                        <div class="col-md-8">
                            <select name="tipoPagamento" class="form-control">
                                <option value="">select tipopagamento</option>
                                <?php 
                                foreach($all_tipopagamentos as $tipopagamento)
                                {
                                    $selected = ($tipopagamento['IDTipoPagamento'] == $this->input->post('tipoPagamento')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$tipopagamento['IDTipoPagamento'].'" '.$selected.'>'.$tipopagamento['IDTipoPagamento'].'</option>';
                                } 
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="situacaoPedido" class=" control-label">Situacaopedido</label>
                        <div class="">
                            <select name="situacaoPedido" class="form-control">
                                <option value="">select situacaopedido</option>
                                <?php 
                                foreach($all_situacaopedidos as $situacaopedido)
                                {
                                    $selected = ($situacaopedido['IDSituacao'] == $this->input->post('situacaoPedido')) ? ' selected="selected"' : "";
                                    echo '<option value="'.$situacaopedido['IDSituacao'].'" '.$selected.'>'.$situacaopedido['IDSituacao'].'</option>';
                                } 
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="comissao" class=" control-label">Comissao</label>
                        <div class="">
                            <input type="text" name="comissao" value="<?php echo $this->input->post('comissao'); ?>" class="form-control" id="comissao" />
                        </div>
                    </div>  

                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<script>

    function AddTableRow(){

        $.get('<?php echo base_url('Produto/get_produto/1')?>', function (data) {

            dados = JSON.parse(data);

            $('#itens').append('<tr><td>'+dados.IDProduto+'</td>'+
                               '<td>'+dados.nome+'</td>'+
                               '<td>'+dados.IDUnidade+'</td>'+
                               '<td>'+'</td>'+
                               '<td>'+dados.precoVenda+'</td>'+
                               '<td>'+'</td>'+
                               '<td>'+'</td>'+
                               '<td>'+'</td>'+                                     
                               '<td class="actions">'+
                               '<a href="#" data-toggle="modal" data-target="#delete-modal" onclick="RemoveTableRow(this)" ><i class="fas fa-trash-alt"></i></a>'+ 
                               '</td></tr>');

        });

    }

    function RemoveTableRow ($hander){

        var tr =$hander.closest('tr');

        tr.remove();
    }

</script>

<script>

    $('#busca').keyup(function(e){

        $('#resultado_busca').html('');

        var buscaTexto = $(this).val();

        if(buscaTexto.length >= 1){

            $.ajax({
                type:'post',               

                url: '<?php echo base_url('Produto/get_produto')?>/'+buscaTexto,//Definindo o arquivo onde serão buscados os dados
                success: function(data){

                    dados = JSON.parse(data);


                    quant = dados.qtd;

                    if(!dados){

                        $('#resultado_busca').html('<option value ='+null+' >Produto Não Encontrado</option>');

                    }else{

                        for(i=0;i< quant; i++){
                            $('#resultado_busca').append('<option id="optselec" value ='+dados[i].IDProduto+' ><a href="#" class="badge"> Codigo '+dados[i].IDProduto+' Nome '+dados[i].nome+'</a></br></option>');



                        }


                    }
                }
            }); 
          
        }
    });

    $(document).ready(function(){   

        $('#selPessoa').selectpicker();
        
//        $('#optselec').click(function(){
//            
//             console.log("teste");
//            
//        });
       





    });
</script>