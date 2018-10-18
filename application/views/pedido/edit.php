<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('pessoa')?>">Pedido</a>
    </li>
    <li class="breadcrumb-item active">Editar</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Editar</h3>

                </div>

                <div class="col-md-4">
                </div>
            </div> 

        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body">            


            <div class="row p-5">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                <th class="border-0 text-uppercase small font-weight-bold">Produto</th>
                                <th class="border-0 text-uppercase small font-weight-bold">Quantidade</th>
                                <th class="border-0 text-uppercase small font-weight-bold">Preço Tabela</th>
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
                                <td><?php echo $I['preco_tab']; ?></td>
                                <td><?php echo $I['precoUnitario']; ?></td>
                                <td><?php echo $I['descontoUnitario']; ?></td>                                           
                                <td><?php echo $I['precoTotal']; ?></td>  
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>


            <?php echo form_open('pedido/edit/'.$pedido['IDPedido'],array("class"=>"form-horizontal")); ?>

            <div class="form-group">
                <label for="IDPessoa" class="col-md-4 control-label">Pessoa</label>
                <div class="col-md-8">
                    <select name="IDPessoa" class="form-control">
                        <option value="">select pessoa</option>
                        <?php 
                        foreach($all_pessoas as $pessoa)
                        {
                            $selected = ($pessoa['IDPessoa'] == $pedido['IDPessoa']) ? ' selected="selected"' : "";

                            echo '<option value="'.$pessoa['IDPessoa'].'" '.$selected.'>'.$pessoa['IDPessoa'].'</option>';
                        } 
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="tipoPedido" class="col-md-4 control-label">Tipopedido</label>
                <div class="col-md-8">
                    <select name="tipoPedido" class="form-control">
                        <option value="">select tipopedido</option>
                        <?php 
                        foreach($all_tipopedidos as $tipopedido)
                        {
                            $selected = ($tipopedido['IDTipoPedido'] == $pedido['tipoPedido']) ? ' selected="selected"' : "";

                            echo '<option value="'.$tipopedido['IDTipoPedido'].'" '.$selected.'>'.$tipopedido['IDTipoPedido'].'</option>';
                        } 
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="tipoPagamento" class="col-md-4 control-label">Tipopagamento</label>
                <div class="col-md-8">
                    <select name="tipoPagamento" class="form-control">
                        <option value="">select tipopagamento</option>
                        <?php 
                        foreach($all_tipopagamentos as $tipopagamento)
                        {
                            $selected = ($tipopagamento['IDTipoPagamento'] == $pedido['tipoPagamento']) ? ' selected="selected"' : "";

                            echo '<option value="'.$tipopagamento['IDTipoPagamento'].'" '.$selected.'>'.$tipopagamento['IDTipoPagamento'].'</option>';
                        } 
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="situacaoPedido" class="col-md-4 control-label">Situacaopedido</label>
                <div class="col-md-8">
                    <select name="situacaoPedido" class="form-control">
                        <option value="">select situacaopedido</option>
                        <?php 
                        foreach($all_situacaopedidos as $situacaopedido)
                        {
                            $selected = ($situacaopedido['IDSituacao'] == $pedido['situacaoPedido']) ? ' selected="selected"' : "";

                            echo '<option value="'.$situacaopedido['IDSituacao'].'" '.$selected.'>'.$situacaopedido['IDSituacao'].'</option>';
                        } 
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="data" class="col-md-4 control-label">Data</label>
                <div class="col-md-8">
                    <input type="text" name="data" value="<?php echo ($this->input->post('data') ? $this->input->post('data') : $pedido['data']); ?>" class="form-control" id="data" />
                </div>
            </div>
            <div class="form-group">
                <label for="comissao" class="col-md-4 control-label">Comissao</label>
                <div class="col-md-8">
                    <input type="text" name="comissao" value="<?php echo ($this->input->post('comissao') ? $this->input->post('comissao') : $pedido['comissao']); ?>" class="form-control" id="comissao" />
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
