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
                <div class="col-md-8">
                    <h3>Pedido</h3>
                </div>

                <div class="col-md-4">

                </div>
            </div> 

        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body"> 

            <?php echo form_open('pedido/add',array("class"=>"form-horizontal")); ?>

            <div class="form-group">
                <label for="IDPessoa" class="col-md-4 control-label">Pessoa</label>
                <div class="col-md-8">
                    <select name="IDPessoa" class="form-control">
                        <option value="">select pessoa</option>
                        <?php 
                        foreach($all_pessoas as $pessoa)
                        {
                            $selected = ($pessoa['IDPessoa'] == $this->input->post('IDPessoa')) ? ' selected="selected"' : "";

                            echo '<option value="'.$pessoa['IDPessoa'].'" '.$selected.'>'.$pessoa['nome'].'</option>';
                        } 
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="tipoPedido" class="col-md-4 control-label">Tipopedido</label>
                <div class="col-md-8">
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
            <div class="form-group">
                <label for="tipoPagamento" class="col-md-4 control-label">Tipopagamento</label>
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
                <label for="situacaoPedido" class="col-md-4 control-label">Situacaopedido</label>
                <div class="col-md-8">
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
                <label for="data" class="col-md-4 control-label">Data</label>
                <div class="col-md-8">
                    <input type="text" name="data" value="<?php echo $this->input->post('data'); ?>" class="form-control" id="data" />
                </div>
            </div>
            <div class="form-group">
                <label for="comissao" class="col-md-4 control-label">Comissao</label>
                <div class="col-md-8">
                    <input type="text" name="comissao" value="<?php echo $this->input->post('comissao'); ?>" class="form-control" id="comissao" />
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