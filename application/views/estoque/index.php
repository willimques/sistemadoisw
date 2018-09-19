<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item active">Estoque</li>
</ol>
<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Adicionar</h3>
                </div>
                <div class="col-md-4">
                    <div class="pull-right">
                        <a href="<?php echo site_url('estoque/add'); ?>" class="btn btn-success float-right mr-3">Adicionar</a> 
                    </div>
                </div>
            </div> 
        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body"> 
            <table id="dataTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>IDEstoque</th>
                        <th>IDProduto</th>
                        <th>IDFilial</th>
                        <th>Quantidade</th>
                        <th>Movimento</th>
                        <th>EstMinimo</th>
                        <th>EstMaximo</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <?php foreach($estoques as $E){ ?>
                <tr>
                    <td><?php echo $E['IDEstoque']; ?></td>
                    <td><?php echo $E['IDProduto']; ?></td>
                    <td><?php echo $E['IDFilial']; ?></td>
                    <td><?php echo $E['quantidade']; ?></td>
                    <td><?php echo $E['movimento']; ?></td>
                    <td><?php echo $E['estMinimo']; ?></td>
                    <td><?php echo $E['estMaximo']; ?></td>
                    <td>
                        <a href="<?php echo site_url('estoque/edit/'.$E['IDEstoque']); ?>" class="btn btn-info btn-xs">Edit</a> 
                        <a href="<?php echo site_url('estoque/remove/'.$E['IDEstoque']); ?>" class="btn btn-danger btn-xs">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
