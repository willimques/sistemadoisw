<div class="pull-right">
	<a href="<?php echo site_url('grupo/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IDGrupo</th>
		<th>Descricao</th>
		<th>Actions</th>
    </tr>
	<?php foreach($grupos as $G){ ?>
    <tr>
		<td><?php echo $G['IDGrupo']; ?></td>
		<td><?php echo $G['descricao']; ?></td>
		<td>
            <a href="<?php echo site_url('grupo/edit/'.$G['IDGrupo']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('grupo/remove/'.$G['IDGrupo']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
