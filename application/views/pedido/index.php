
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item active">Pedidos</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Pedidos</h3>
                </div>

                <div class="col-md-4">
                    <div class="pull-right">
                        <a href="<?php echo site_url('pedido/add'); ?>" class="btn btn-success float-right mr-3">Adicionar</a>
                    </div>

                </div>
            </div> 

        </div>
    </div>       
    <div class="container-fluid">
            
        <div class="card-body"> 

            <table id="dataTable"class="table table-striped table-bordered">
                <tr>
                    <th>Pedido</th>
                    <th>Clientes</th>               
                    <th>Tipo Pagamento</th>
                    <th>Situacao Pedido</th>
                    <th>Data</th>
                    <th>Comissao</th>
                    <th>Ações</th>
                </tr>
                <?php foreach($pedidos as $P){ ?>
                <tr>
                    <td><?php echo $P['IDPedido']; ?></td>
                    <td><?php echo $P['nome']; ?></td>                   
                    <td><?php echo $P['descricao']; ?></td>
                    <td><?php echo $P['situacaoPedido']; ?></td>
                    <td><?php echo date('d/m/Y', strtotime($P['data'])); ?></td>  
                    <td><?php echo $P['comissao']; ?></td>
                    <td>
<!--                    <a href="<?php echo site_url('pedido/edit/'.$P['IDPedido']); ?>" class="btn btn-info btn-xs">Editar</a> -->
                        <a href="<?php echo site_url('pedido/remove/'.$P['IDPedido']); ?>" class="btn btn-danger btn-xs">Deletar</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

