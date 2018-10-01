<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
             
                <div class="">
                    <h3>Fechamento Estoque</h3>

                </div>
                <div class="">

                </div>
            </div> 
        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body"> 
            

            <?php echo form_open('estoqueconsignado/fecha',array("class"=>"form-horizontal")); ?>
         <div class="shadow p-3 mb-5 bg-white rounded ">Produtos
             <div class="row mt-3">
              <p class="col-md-1"> Marcar</p>              
              <p class="col-md-1"> ID</p>
              <p class="col-md-2"> Codigo</p>
              <p class="col-md-1"> Pedido</p>
              <p class="col-md-2"> Valor Unitario</p>
              <p class="col-md-2"> Quantidade</p>
              <p class="col-md-2"> Valor Total</p>             
             </div>
        
        <?php foreach($estoqueconsignado as $E){ ?> 
             <div class="row"> 
                    <div class="form-group p-1 col-md-1">                       
                        <div class="form-control">
                            <input type="checkbox" value="<?php echo $E['IDEstoqueConsignado']?>" name="sel" id="sel" />              
                        </div> 
                    </div>
                 <div class="form-group p-1 col-md-1">                       
                        <div class="">
                            <input type="text" readonly name="IDProduto" value="<?php echo ($this->input->post('IDProduto') ? $this->input->post('IDProduto') : $E['IDProduto']); ?>" class="form-control" id="IDProduto" />
                        </div>
                    </div>
                  <div class="form-group p-1 col-md-1">                      
                        <div class="">
                            <input type="text" readonly name="codigo" value="<?php echo ($this->input->post('codigo') ? $this->input->post('codigo') : $E['codigo']); ?>" class="form-control" id="codigo" />
                        </div>
                    </div>
                  <div class="form-group p-1 col-md-2">                   
                        <div class="">
                            <input type="text" readonly name="pedido" value="<?php echo ($this->input->post('pedido') ? $this->input->post('pedido') : $E['IDPedido']); ?>" class="form-control" id="pedido" />
                        </div>
                    </div> 
                 <div class="form-group p-1 col-md-2">
                        <div class="">
                            <input type="text" readonly name="vlrun" value="<?php echo ($this->input->post('vlrun') ? $this->input->post('vlrun') : $E['valor_unitario']); ?>" class="form-control" id="vlrun" />
                        </div>
                    </div>                    
                    <div class="form-group p-1 col-md-2">               
                        <div class="">
                            <input type="number" readonly name="qtde" value="<?php echo ($this->input->post('qtde') ? $this->input->post('qtde') : $E['qtde']); ?>" class="form-control" id="qtde" />
                        </div>
                    </div>
                  <div class="form-group p-1 col-md-2">               
                        <div class="">
                            <input type="text" readonly name="vltotal" value="<?php echo ($this->input->post('vltotal') ? $this->input->post('vltotal') : ($E['valor_unitario']*$E['qtde'])); ?>" class="form-control" id="vltotal" />
                        </div>
                    </div>
                    
                </div>
              <?php } ?>
            </div>

        <div class="shadow p-3 mb-5 bg-white rounded ">Financeiro

                <div class="row ml-2"> 
                    <div class="form-group col-md-3 p-2">
                        <label for="tipoPagamento" class=" control-label">Pagamento</label>
                        <div class="">
                            <select name="tipoPagamento" id="tipoPagamento" class="form-control">
                                <option value="">Selecione Pagamento</option>
                                <?php 
                                foreach($all_tipopagamentos as $tipopagamento)
                                {
                                    $selected = ($tipopagamento['IDTipoPagamento'] == $this->input->post('tipoPagamento')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$tipopagamento['IDTipoPagamento'].'" '.$selected.'>'.$tipopagamento['descricao'].'</option>';
                                } 
                                ?>
                            </select>
                        </div>
                        <span class="text-danger"><?php echo form_error('tipoPagamento');?></span>
                    </div>
                    <div class="form-group col-md-3 p-2">
                        <label for="prazopag" class=" control-label">Condição Pagamento</label>
                        <div class="">
                            <select name="prazopagamento" id="prazopagamento" class="form-control">
                                <option value="">Selecione o Prazo</option>
                                <?php 
                                foreach($all_prazopagamentos as $prazopagamento)
                                {
                                    $selected = ($prazopagamento['IDPrazoPag'] == $this->input->post('prazopagamento')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$prazopagamento['IDPrazoPag'].'" '.$selected.'>'.$prazopagamento['descricao'].'</option>';
                                } 
                                ?>
                            </select>                            
                        </div>
                        <span class="text-danger"><?php echo form_error('IDPrazoPag');?></span>

                    </div>
                  
                    <div class="form-group col-md-3 p-2 ">
                        <label for="data" class=" control-label">Data do Fechamento</label>
                        <div class="">                           
                            <input type="date" name="datafecha" value="<?php echo ($this->input->post('datafecha') ? $this->input->post('datafecha') : $date ); ?>" class="form-control" id="datafecha" />
                        </div>
                    </div>               

                    <input hidden type="text" name="produto" value="" class="form-control" id="produto" />
                    <span class="text-danger"><?php echo form_error('datafecha');?></span>

                    <div class="form-group col-md-2 p-2">
                        <label for="vlrtotal" class=" control-label">Valor Total</label>
                        <div class="">
                            <input type="text" readonly name="vlrtotal" value="<?php echo ($this->input->post('vlrtotal') ? $this->input->post('vlrtotal') :($E['valor_unitario']*$E['qtde'])); ?>" class="form-control" id="vlrtotal" />
                        </div>
                    </div>
                      <div class="form-group col-md-1 p-2 mt-2">
                        <label for="gerarparcela" class=" control-label"></label>
                        <div class="">
                            <button role="button" id="btngeraparc" class="btn btn-success">Gerar </button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="table-responsive col-md-12">
                    <table id="parcela"class="table table-striped" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th>Dias</th>
                                <th>Parcela</th>
                                <th>Data</th>
                                <th>Valor</th>                               
                                <th class="actions">Ações</th>
                            </tr>
                        </thead>
                        <tbody id="parcelaitens">

                        </tbody>
                    </table>

                </div>

            </div>

            <div class="form-group float-right">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" id="fechaestoque" class="btn btn-success">Fechar Pedido</button>
                </div>
            </div>

            <?php echo form_close(); ?>
        </div>

    </div>
</div>


<script>
    
    
    $(document).ready(function(){ 

        listprod = []

        var qtd = $('.tdqtd').text();

        quant = $('.qtd').text();
        precotab = $('#precotab').val();
        preco =  $('#precun').val();          
        precototal = quant*preco; 
        desc =  Math.ceil((1-(preco/precotab))*100);
        $('#precototal').val(precototal);
        $('#desc').val(desc);
        
        
    $(document).on( "click","#sel",function(){ 

        mar = $(this).is( ":checked" );

        if(mar){

            r =  prompt("Insira a quantidade");  

            if(r==null || r==""){

                mar = false;
                $( this ).prop("checked",false);
                alert("Você precisa inserir um valor valido!!");

            }else{

                qtde = $(this).closest('.row').children().eq(5).find('#qtde').val();
                qtdsel =  parseInt(r);
                
                if( r==0 || r<0){                  
                    mar = false;
                    $( this ).prop("checked",false);
                    alert("Você precisa inserir um valor valido!!");

                }else if(qtdsel>qtde){
                    
                    mar = false;
                    $( this ).prop("checked",false);
                    alert("Você precisa inserir um valor menor ou igual a "+qtde+"!!");

                }                
                else{

                    var row = $(this).val();

                    qtdesel = r;

                    item = $(this).val();
                    IDProd = $(this).closest('.row').children().eq(1).find('#IDProduto').val();
                    vlrun = $(this).closest('.row').children().eq(4).find('#vlrun').val();
                    vlrt = parseInt(vlrun*qtdesel); 

                    produto ={item:item,IDProduto:IDProd,qtd:qtdesel};                   
                   
                    listprod.push(produto);                    
                

                    alert("produto inserido com sucesso");


                }

            }
        }
        else{

            item = $(this).val();               

            for (i=0;i<listprod.length;i++){

                if(item==listprod[i].item){

                    ind = listprod.indexOf(listprod[i]);
                    listprod.splice(ind,1);
                }

            }

        }


    });

     $('#fechaestoque').click(function(e){

            if(listprod.length == 0){

                alert("Insira os produtos para continuar!!");
                
            }else{
                prod =  JSON.stringify(listprod);

                $("#produto").val(prod);

            }
        });




    });




</script>