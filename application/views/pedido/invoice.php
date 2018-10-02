<div  class="container">

    <!-- this row will not appear when printing -->

    <div id="invoice" class="row">
        <div class="col-12">
            <div class="card">

                <div class="row p-4">
                    <div class="col-md-8">
                        <img src="http://via.placeholder.com/400x90?text=logo">
                    </div>

                    <div class="row col-md-4 no-print" >
                        <div class=" mt-2">
                            <button id="btnprint" class="btn btn-default"><i class="fa fa-print"></i>Imprimir</button>
                            <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Gerar PDF</button>
                        </div>
                    </div>
                    <div class="card-body mt-2">
                        <div class="row">
                            <div class="col-md-12">  
                                <div class="row">
                                    <p class="h3 font-weight-bold mb-1 col-md-8">Pedido Nº<?php echo $pedido['IDPedido']?></p>
                                    <div col-md-4>
                                        <p class="h6 font-weight-bold mb-1  text-center">Data Emissão</p>
                                        <p class="h6 text-muted text-center"><?php echo date('d/m/Y', strtotime($pedido['data']))?></p>
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <hr class="my-5">
                        <div class="row p-2">
                            <div class="col-md-6">
                                <p class="font-weight-bold mb-4"><?php echo $pedido['nome']?></p>
                                <p class="mb-1"><?php echo $endereco['endereco'],$endereco['numero'] ?></p>
                                <p><?php echo $endereco['bairro']?></p> 
                                <p class="mb-1"><?php echo $endereco['cidade']?></p>
                                <p class="mb-1"><?php echo $endereco['cep']?></p>
                            </div>

                            <div class="col-md-6">
                                <p class="font-weight-bold mb-4">Forma de Pagamento</p>
                                <p class="mb-1"><span class="text-muted"><?php echo $pedido['tipoPagamento']?></span></p>

                            </div>
                        </div>

                        <div class="row p-5">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Produto</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Quantidade</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Preço Unitario</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Desconto</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Valor Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($itenspedido as $I){ ?>
                                        <tr>
                                            <td><?php echo $I['IDPedidoItens']; ?></td>
                                            <td><?php echo $I['IDProduto']; ?></td>                   
                                            <td><?php echo $I['quantidade']; ?></td>
                                            <td><?php echo $I['precoUnitario']; ?></td>
                                            <td><?php echo $I['descontoUnitario']; ?></td>                                           
                                            <td><?php echo $I['precoTotal']; ?></td>  
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="d-flex flex-row-reverse bg-dark text-white p-4">

                            <div class="py-3 px-5 text-right">
                                <div class="mb-2">SubTotal</div>
                                <div class="h2 font-weight-light">R$<?php echo ($I['quantidade']*$I['precoUnitario']); ?></div>
                            </div>

                            <div class="py-3 px-5 text-right">
                                <div class="mb-2">Desconto</div>
                                <div class="h2 font-weight-light"><?php echo  ($I['precoTotal'])-($I['quantidade']*$I['precoUnitario']); ?>%</div>
                            </div>

                            <div class="py-3 px-5 text-right">
                                <div class="mb-2">Total</div>
                                <div class="h2 font-weight-light">R$<?php echo ($I['precoTotal']); ?></div>
                            </div>


                        </div>

                        <div class="card-footer">

                            <div class="h3 font-weight-light ml-4 mb-5">Informações</div>
                            <div class="container">

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec lacus condimentum, viverra urna sed, faucibus velit. Aliquam a purus ut ex interdum eleifend eu et felis. Curabitur semper non leo eu molestie. Aliquam a libero turpis. Nullam commodo congue malesuada. Pellentesque imperdiet magna id finibus hendrerit. Proin imperdiet ullamcorper neque ac vehicula. In hac habitasse platea dictumst.

                                Etiam varius viverra lectus vitae pulvinar. Aliquam diam dolor, commodo mollis justo vel, porttitor faucibus purus. Integer lacinia nisi in magna tincidunt, id tempor odio pulvinar. Pellentesque interdum elit id lorem gravida, et ornare leo blandit. Sed nec arcu eget quam iaculis tempor semper at ipsum. Etiam at nisi aliquet, maximus ipsum in, maximus lacus. Nunc non magna dictum, tristique nisl et, convallis felis. Nam eget rutrum risus. Pellentesque id purus elit. Ut ac aliquet mauris. Etiam vel tristique diam. Suspendisse ut augue laoreet, vehicula libero nec, maximus nulla. Suspendisse scelerisque, nulla quis imperdiet accumsan, leo nibh mattis dolor, nec ornare ante erat vitae nisi. Nulla in lobortis nisi. Proin tincidunt rhoncus odio ut auctor.


                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>


        $("#btnprint").click(function(){

            $("#invoice").print( {
                
                //Custom stylesheet
                stylesheet : "<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>",

            }   /*options*/);

        });

    </script>