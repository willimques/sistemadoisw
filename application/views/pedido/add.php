<!-- Breadcrumbs--> <!---->
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
<<<<<<< HEAD
                        <span>Selecione o Produto</span>
=======
                        <span>Selecione o Produto</span>                   
>>>>>>> bc0792a870e5cd18d4f456aae697454972fefbdd
                    </label>
                    <select action="" class="form-control " method="post" enctype="multipart/form-data" id="resultado_busca">

                    </select>
                </div>
            </div>

            <div>
                <form id="listprod" class="row">
                    <input  hidden type="text" name="codigo" value="" class="form-control" id="IDProduto" readonly />
                    <div class="row ml-3">
                        <div class="form-group col-md-1 p-1">
<<<<<<< HEAD
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
=======
                            <label for="codigo" class=" control-label">Código</label>
                            <div class="">                    
                                <input type="text" name="codigo" value="" class="form-control" id="codigo" readonly />
                            </div>
                        </div>
                        <div class="form-group col-md-3 p-1">
                            <label for="descricao" class=" control-label">Descrição</label>
                            <div class="">                    
                                <input type="text" name="descricao" value="" class="form-control" id="descricao" readonly />
                            </div>
                        </div>
                        <div class="form-group col-md-1 p-1">
                            <label for="un" class=" control-label">Unidade</label>
                            <div class="">                    
                                <input type="text" name="un" value="" class="form-control" id="un" readonly />
                            </div>
                        </div>
                        <div class="form-group col-md-1 p-1">
                            <label for="qtd" class=" control-label">Quantidade</label>
                            <div class="">                    
                                <input type="number" name="qtd" value="" class="form-control" id="qtd" />
                            </div>
                        </div>
                        <div class="form-group col-md-1 p-1">
                            <label for="precotab" class=" control-label">Preço Tab</label>
                            <div class="">                    
                                <input type="number" name="precotab" value="" class="form-control" id="precotab" readonly />
                            </div>
                        </div>
                        <div class="form-group col-md-1 p-1">
                            <label for="desc" class=" control-label">Desc %</label>
                            <div class="">                    
                                <input type="number" name="desc" value="" class="form-control" id="desc" />
                            </div>
                        </div>
                        <div class="form-group col-md-1 p-1">
                            <label for="precun" class=" control-label">Preço Un</label>
                            <div class="">                    
                                <input type="number" name="precun" value="" class="form-control" id="precun" />
                            </div>
                        </div>
                        <div class="form-group col-md-2 p-1">
                            <label for="precototal" class=" control-label">Preço total</label>
                            <div class="">                    
                                <input type="number" name="precototal" value="" class="form-control" id="precototal" readonly />
>>>>>>> bc0792a870e5cd18d4f456aae697454972fefbdd
                            </div>
                        </div>
                        <div class="form-group col-md-1 p-2 mt-1">
<<<<<<< HEAD
                            <label for="data" class=" control-label"></label>
                            <div class="">
                                <a name="data" class="btn btn-success active" onclick="AddTableRow()" id="data">Incluir</a>
=======
                            <label for="incl" class=" control-label"></label>
                            <div class="">                    
                                <a  name="incl" class="btn btn-success active" id="incl">Incluir</a>
>>>>>>> bc0792a870e5cd18d4f456aae697454972fefbdd
                            </div>
                        </div>
                    </div>
                </form>
                <div>
                    <div class="table-responsive col-md-12">
                        <table id="itensPedido" class="table table-striped" cellspacing="0" cellpadding="0">
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
    function AddTableRow() {

<<<<<<< HEAD
        $.get('<?php echo base_url('Produto / get_produto / 1 ')?>',
            function(data) {

                dados = JSON.parse(data);

                $('#itens').append('<tr><td>' + dados.IDProduto + '</td>' +
                    '<td>' + dados.nome + '</td>' +
                    '<td>' + dados.IDUnidade + '</td>' +
                    '<td>' + '</td>' +
                    '<td>' + dados.precoVenda + '</td>' +
                    '<td>' + '</td>' +
                    '<td>' + '</td>' +
                    '<td>' + '</td>' +
                    '<td class="actions">' +
                    '<a href="#" data-toggle="modal" data-target="#delete-modal" onclick="RemoveTableRow(this)" ><i class="fas fa-trash-alt"></i></a>' +
                    '</td></tr>');

            });

    }
=======

>>>>>>> bc0792a870e5cd18d4f456aae697454972fefbdd

    function RemoveTableRow($hander) {

        var tr = $hander.closest('tr');

        tr.remove();
    }

</script>

<script>
    $('#busca').keyup(function(e) {

        $('#resultado_busca').html('');

        var buscaTexto = $(this).val();

<<<<<<< HEAD
        if (buscaTexto.length >= 1) {
=======
        if(buscaTexto.length >= 3){
>>>>>>> bc0792a870e5cd18d4f456aae697454972fefbdd

            $.ajax({
                type: 'post',

<<<<<<< HEAD
                url: '<?php echo base_url('
                Produto / get_produto ')?>/' + buscaTexto, //Definindo o arquivo onde serão buscados os dados
                success: function(data) {
=======
                url: '<?php echo base_url('Produto/get_like_produto')?>/'+buscaTexto,//Definindo o arquivo onde serão buscados os dados
                success: function(data){
>>>>>>> bc0792a870e5cd18d4f456aae697454972fefbdd

                    dados = JSON.parse(data);


                    quant = dados.qtd;

                    if (!dados) {

                        $('#resultado_busca').html('<option value =' + null + ' >Produto Não Encontrado</option>');

                    } else {

<<<<<<< HEAD
                        for (i = 0; i < quant; i++) {
                            $('#resultado_busca').append('<option id="optselec" value =' + dados[i].IDProduto + ' ><a href="#" class="badge"> Codigo ' + dados[i].IDProduto + ' Nome ' + dados[i].nome + '</a></br></option>');


=======
                        for(i=0;i< quant; i++){
                            $('#resultado_busca').append('<option value ='+dados[i].IDProduto+' ><a href="#" class="badge"> Codigo '+dados[i].IDProduto+' Nome '+dados[i].nome+'</a></br></option>');
>>>>>>> bc0792a870e5cd18d4f456aae697454972fefbdd

                        }


                    }
                }
<<<<<<< HEAD
            });
=======
            }); 
>>>>>>> bc0792a870e5cd18d4f456aae697454972fefbdd

        }
    });

    $(document).ready(function() {

        $('#selPessoa').selectpicker();
<<<<<<< HEAD

        //        $('#optselec').click(function(){
        //            
        //             console.log("teste");
        //            
        //        });

=======
>>>>>>> bc0792a870e5cd18d4f456aae697454972fefbdd

        $('body #busca').blur(function(){

            IDProd =  $('body #resultado_busca').val();

            busca(IDProd);

        });

        $('body #resultado_busca').change(function(){

            IDProd =  $('body #resultado_busca').val();     

            busca(IDProd);

        });

        function busca(produto){

            $.ajax({
                type:'post',
                url: '<?php echo base_url('Pedido/get_produto')?>/'+produto,//Definindo o arquivo onde serão buscados os dados            
                success: function(data){

                    dados = JSON.parse(data);
                    
                    $('#IDProduto').val(dados.IDProduto);
                    $('#codigo').val(dados.codigo);
                    $('#descricao').val(dados.nome);
                    $('#un').val(dados.IDUnidade);
                    $('#precotab').val(dados.precoVenda);                  

                }
            }); 

        }

        $('#qtd').blur(function(){            
            quant = $('#qtd').val();
            preco = $('#precotab').val();
            precototal = quant*preco;
            $('#precototal').val(precototal);
        });

        $('#desc').blur(function(){            
            desc = $('#desc').val(); 
            precotab = $('#precotab').val();
            precoun =  precotab-(precotab * (desc/100));         
            $('#precun').val(precoun);

        });

        $('#precun').blur(function(){            
            quant = $('#qtd').val();
            precotab = $('#precotab').val();
            preco =  $('#precun').val();          
            precototal = quant*preco; 
            desc =  Math.ceil((1-(preco/precotab))*100);
            $('#precototal').val(precototal);
            $('#desc').val(desc);
        });

        $("#incl").click(function(e){              

            idpro =  $("#IDProduto").val();
            codigo =  $("#codigo").val();
            descricao =  $("#descricao").val();
            un =  $("#un").val();
            qtd =  $("#qtd").val();
            precotab =  $("#precotab").val();
            desc =  $("#desc").val();
            precoun =  $("#precun").val();
            precototal =  $("#precototal").val();

            prod = new Array(idpro,codigo,descricao,un,qtd,precotab,desc,precoun,precototal);

            AddTableRow(prod);             

        });

    });
<<<<<<< HEAD

</script>
=======
    
    //adiciona produto na tabela
    
    function AddTableRow(data){
        
      
        $('#itens').append(

            ' <tr>'+           
            '<td>'+data[1]+'</td>'+
            '<td>'+data[2]+'</td>'+
            '<td>'+data[3]+'</td>'+
            '<td>'+data[4]+'</td>'+
            '<td>'+data[5]+'</td>'+
            '<td>'+data[6]+'</td>'+
            '<td>'+data[7]+'</td>'+
            '<td>'+data[7]+'</td>'+
            '<td>'+data[8]+'</td>'+
            '<td class="actions">'+
            '<a href="#" data-toggle="modal" data-target="#delete-modal" onclick="RemoveTableRow(this)" ><i class="fas fa-trash-alt"></i></a>'+ 
            '</td>'+                 
            ' </tr>' 

        );

        //        limpa os campos do input

        $("#codigo").val('');
        $("#descricao").val('');
        $("#un").val('');
        $("#qtd").val('');
        $("#precotab").val('');
        $("#desc").val('');
        $("#precun").val('');
        $("#precototal").val('');
        $("#busca").val('');
        $("#resultado_busca").val('');

      

    }
</script>
>>>>>>> bc0792a870e5cd18d4f456aae697454972fefbdd
