<div class="pull-right">
	<a href="<?php echo site_url('pedido/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IDPedido</th>
		<th>IDPessoa</th>
		<th>TipoPedido</th>
		<th>TipoPagamento</th>
		<th>SituacaoPedido</th>
		<th>Data</th>
		<th>Comissao</th>
		<th>Actions</th>
    </tr>
	<?php foreach($pedidos as $P){ ?>
    <tr>
		<td><?php echo $P['IDPedido']; ?></td>
		<td><?php echo $P['IDPessoa']; ?></td>
		<td><?php echo $P['tipoPedido']; ?></td>
		<td><?php echo $P['tipoPagamento']; ?></td>
		<td><?php echo $P['situacaoPedido']; ?></td>
		<td><?php echo $P['data']; ?></td>
		<td><?php echo $P['comissao']; ?></td>
		<td>
            <a href="<?php echo site_url('pedido/edit/'.$P['IDPedido']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('pedido/remove/'.$P['IDPedido']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
