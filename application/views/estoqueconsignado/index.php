<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Estoque Consignado</a>
    </li>
    <li class="breadcrumb-item active">Estoque Consignado</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Estoque Consignado</h3>
                </div>
                <div class="col-md-4">
                    <a href="<?php echo site_url('estoqueconsignado/add'); ?>" class="btn btn-success float-right mr-3">Adicionar</a> 
                </div>
            </div> 

        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body">  
          <table id="dataTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>IDEstoqueConsignado</th>
                        <th>IDProduto</th>
                        <th>IDFilial</th>
                        <th>IDPessoa</th>
                        <th>Quantidade</th>
                        <th>Movimento</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <?php foreach($estoqueconsignado as $E){ ?>
                <tr>
                    <td><?php echo $E['IDEstoqueConsignado']; ?></td>
                    <td><?php echo $E['IDProduto']; ?></td>
                    <td><?php echo $E['IDFilial']; ?></td>
                    <td><?php echo $E['IDPessoa']; ?></td>
                    <td><?php echo $E['quantidade']; ?></td>
                    <td><?php echo $E['movimento']; ?></td>
                    <td>
                        <a href="<?php echo site_url('estoqueconsignado/edit/'.$E['IDEstoqueConsignado']); ?>" class="btn btn-info btn-xs">Edit</a> 
                        <a href="<?php echo site_url('estoqueconsignado/remove/'.$E['IDEstoqueConsignado']); ?>" class="btn btn-danger btn-xs">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
