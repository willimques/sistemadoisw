<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="">
                    <h3>Cliente</h3>
                    
                    <?php var_dump($listclientes)?>
                </div>
                <div class="">

                </div>
            </div> 

        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body"> 
            <?php echo form_open('pedido/add',array("class"=>"form-horizontal")); ?>

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
                        <?php foreach($estoqueconsignado as $E){ ?>
                        <tr>
                            <td><?php echo $E['IDPedido']; ?></td>
                            <td><?php echo $E['codigo']; ?></td>
                            <td><?php echo $E['IDProduto']; ?></td>                  
                            <td><?php echo $E['qtde']; ?></td>                   
                            <td><?php echo $E['valor_unitario']; ?></td>                   
                            <td class=".sum"><?php echo ($E['valor_unitario']*$E['qtde']);?></td>                  

                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div> <!-- /#list -->
    </div>
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
