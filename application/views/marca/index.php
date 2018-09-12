<div class="pull-right">
	<a href="<?php echo site_url('marca/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IDMarcas</th>
		<th>Descricao</th>
		<th>Actions</th>
    </tr>
	<?php foreach($marcas as $M){ ?>
    <tr>
		<td><?php echo $M['IDMarcas']; ?></td>
		<td><?php echo $M['Descricao']; ?></td>
		<td>
            <a href="<?php echo site_url('marca/edit/'.$M['IDMarcas']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('marca/remove/'.$M['IDMarcas']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
