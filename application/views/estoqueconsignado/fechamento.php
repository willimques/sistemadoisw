<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="">
                    <h3>Cliente</h3>

                    <?php var_dump($estoqueconsignado)?>
                </div>
                <div class="">

                </div>
            </div> 

        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body"> 


            <?php echo form_open('pedido/add',array("class"=>"form-horizontal")); ?>
            <?php foreach($estoqueconsignado as $E){ ?>           

            <div class="row"> 
                <div class="form-group">
                    <label for="data" class=" control-label">Marcar</label>
                    <div class="form-control">
                        <input type="checkbox" value="<?php echo $E['IDEstoqueConsignado']?>" name="sel" id="sel" />              
                    </div> 
                </div>
                <div class="form-group">
                    <label for="IDProduto" class=" control-label ml-3">#</label>
                    <div class="">
                        <input type="text" readonly name="IDProduto" value="<?php echo ($this->input->post('IDProduto') ? $this->input->post('IDProduto') : $E['IDProduto']); ?>" class="form-control" id="IDProduto" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="pedido" class=" control-label ml-3">Pedido</label>
                    <div class="">
                        <input type="text" readonly name="pedido" value="<?php echo ($this->input->post('pedido') ? $this->input->post('pedido') : $E['IDPedido']); ?>" class="form-control" id="pedido" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="codigo" class=" control-label">Codigo</label>
                    <div class="">
                        <input type="text" readonly name="codigo" value="<?php echo ($this->input->post('codigo') ? $this->input->post('codigo') : $E['codigo']); ?>" class="form-control" id="codigo" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="qtde" class=" control-label">Quantidade</label>
                    <div class="">
                        <input type="text" readonly name="qtde" value="<?php echo ($this->input->post('qtde') ? $this->input->post('qtde') : $E['qtde']); ?>" class="form-control" id="qtde" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="vlrun" class=" control-label">Valor Unitario</label>
                    <div class="">
                        <input type="text" readonly name="vlrun" value="<?php echo ($this->input->post('vlrun') ? $this->input->post('vlrun') : $E['valor_unitario']); ?>" class="form-control" id="vlrun" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="vlrtotal" class=" control-label">Valor Total</label>
                    <div class="">
                        <input type="text" readonly name="vlrtotal" value="<?php echo ($this->input->post('vlrtotal') ? $this->input->post('vlrtotal') :($E['valor_unitario']*$E['qtde'])); ?>" class="form-control" id="vlrtotal" />
                    </div>
                </div>

            </div>


            <?php } ?>

            <div class="shadow p-3 mb-5 bg-white rounded ">Totais
                <div class="row border-top">

                    <div class="form-group col-md-2 mt-2">
                        <label for="nitens" class=" control-label">Nº Itens</label>
                        <div class="">                    
                            <input type="number" name="nitens" value="<?php echo $this->input->post('nitens'); ?>" class="form-control" id="nitens" readonly />
                        </div>
                    </div> 
                    <div class="form-group col-md-2 mt-2">
                        <label for="sqtd" class=" control-label">Soma qtdes</label>
                        <div class="">                    
                            <input type="number" name="sqtd" value="<?php echo $this->input->post('sqtd'); ?>" class="form-control" id="sqtd" readonly />
                        </div>
                    </div>
                    <div class="form-group col-md-2 mt-2">
                        <label for="subt" class=" control-label">Sub Total</label>
                        <div class="">                    
                            <input type="text" name="subt" value="<?php echo $this->input->post('subt'); ?>" class="form-control" id="subt" readonly />
                        </div>
                    </div>
                    <div class="form-group col-md-3 mt-2">
                        <label for="tdesc" class=" control-label">Total Desconto </label>
                        <div class="">                    
                            <input type="text" name="tdesc" value="<?php echo $this->input->post('tdesc'); ?>" class="form-control" id="tdesc" readonly />
                        </div>
                    </div> 
                    <div class="form-group col-md-3 mt-2">
                        <label for="total" class=" control-label">Total</label>
                        <div class="">                    
                            <input type="text" name="total" value="<?php echo $this->input->post('total'); ?>" class="form-control" id="total" readonly />
                        </div>
                    </div> 
                </div>
            </div>

            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="row ml-4"> 
                    <div class="form-group col-md-4">
                        <label for="tipoPagamento" class=" control-label">Tipo De Pagamento</label>
                        <div class="">
                            <select name="tipoPagamento" id="tipoPagamento" class="form-control">
                                <option value="">Selecione Tipo Pagamento</option>
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
                    <div class="form-group col-md-3">
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

                    <div class="form-group  mt-2">
                        <label for="gerarparcela" class=" control-label"></label>
                        <div class="">
                            <button role="button" id="btngeraparc" class="btn btn-success">Gerar Parcela</button>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="data" class=" control-label">Data do Fechamento</label>
                        <div class="">                           
                            <input type="date" name="datafecha" value="<?php echo ($this->input->post('datafecha') ? $this->input->post('datafecha') : $date ); ?>" class="form-control" id="datafecha" />
                        </div>
                    </div>               

                    <input hidden type="text" name="produto" value="" class="form-control" id="produto" />
                    <span class="text-danger"><?php echo form_error('datafecha');?></span>



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
                    <button type="submit" id="fechapedido" class="btn btn-success">Fechar Pedido</button>
                </div>
            </div>

            <?php echo form_close(); ?>
        </div>


        <script>


            $(document).on( "click","#sel",function(){ 

                r =  prompt("Insira a quantidade");

                var mar = false;

                if(r==null){

                   mar = false;
                    $( this ).prop("checked",false);
                    
                }else {

                   mar = true;
                    $( this ).prop( "checked" );

                }
              
                if (mar){                   

                    var row = $(this).val();

                    item = $(this).val();
                    IDProd = $(this).closest('.row').children().eq(1).find('#IDProduto').val();
                    vlrun = $(this).closest('.row').children().eq(5).find('#vlrun').val();
                    qtde = $(this).closest('.row').children().eq(4).find('#qtde').val();
                    vlrt = parseInt(vlrun*qtde); 



                    console.log(r);



                    produto ={item:item,IDProduto:IDProd,qtd:qtde};                

                    listprod.push(produto);



                }else{

                    item = $(this).val();               

                    for (i=0;i<listprod.length;i++){

                        if(item==listprod[i].item){

                            ind = listprod.indexOf(listprod[i])
                            listprod.splice(ind,1);
                        }

                    }

                }

                           });

            $(document).ready(function(){ 

                listprod = []
                //                                
                //               var marcar =  $( "#sel" ).prop( "checked" );
                //               var val =  $( "#sel" ).val();
                //
                //                var qtdtd = $("#itens tr").length;  
                //
                //                var teste =   $("#itens tr").index();
                //
                //                console.log(marcar);
                //                console.log(val);
                //
                //                qtd = [];
                //
                //                for(i=0;i<qtdtd; i++){
                //
                //                    // var trind =   $("#itens tr").index();
                //                    var vltd =    $("#itens tr .tdqtd").index().text();
                //
                //                    qtd.push(teste);         
                //
                //                    console.log(qtd);
                //
                //
                //                }


                var qtd = $('.tdqtd').text();

                quant = $('.qtd').text();
                precotab = $('#precotab').val();
                preco =  $('#precun').val();          
                precototal = quant*preco; 
                desc =  Math.ceil((1-(preco/precotab))*100);
                $('#precototal').val(precototal);
                $('#desc').val(desc);


                //console.log(qtdtd)



            });




        </script>