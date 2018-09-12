<div class="pull-right">
	<a href="<?php echo site_url('precoproduto/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IDPreco</th>
		<th>IDProduto</th>
		<th>Valor</th>
		<th>Actions</th>
    </tr>
	<?php foreach($precoprodutos as $P){ ?>
    <tr>
		<td><?php echo $P['IDPreco']; ?></td>
		<td><?php echo $P['IDProduto']; ?></td>
		<td><?php echo $P['valor']; ?></td>
		<td>
            <a href="<?php echo site_url('precoproduto/edit/'.$P['IDPreco']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('precoproduto/remove/'.$P['IDPreco']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
