<div class="pull-right">
	<a href="<?php echo site_url('unidade/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IDUnidades</th>
		<th>Descricao</th>
		<th>Actions</th>
    </tr>
	<?php foreach($unidades as $U){ ?>
    <tr>
		<td><?php echo $U['IDUnidades']; ?></td>
		<td><?php echo $U['descricao']; ?></td>
		<td>
            <a href="<?php echo site_url('unidade/edit/'.$U['IDUnidades']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('unidade/remove/'.$U['IDUnidades']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
