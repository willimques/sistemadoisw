<div class="pull-right">
	<a href="<?php echo site_url('produto/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IDProduto</th>
		<th>IDGrupo</th>
		<th>IDCategoria</th>
		<th>IDMarcas</th>
		<th>IDfornecedor</th>
		<th>IDUnidade</th>
		<th>Nome</th>
		<th>Codigo</th>
		<th>PrecoCusto</th>
		<th>PrecoVenda</th>
		<th>Situacao</th>
		<th>Descricao</th>
		<th>CodBarras</th>
		<th>Foto</th>
		<th>DataCadastro</th>
		<th>Actions</th>
    </tr>
	<?php foreach($produtos as $P){ ?>
    <tr>
		<td><?php echo $P['IDProduto']; ?></td>
		<td><?php echo $P['IDGrupo']; ?></td>
		<td><?php echo $P['IDCategoria']; ?></td>
		<td><?php echo $P['IDMarcas']; ?></td>
		<td><?php echo $P['IDfornecedor']; ?></td>
		<td><?php echo $P['IDUnidade']; ?></td>
		<td><?php echo $P['nome']; ?></td>
		<td><?php echo $P['codigo']; ?></td>
		<td><?php echo $P['precoCusto']; ?></td>
		<td><?php echo $P['precoVenda']; ?></td>
		<td><?php echo $P['situacao']; ?></td>
		<td><?php echo $P['descricao']; ?></td>
		<td><?php echo $P['codBarras']; ?></td>
		<td><?php echo $P['foto']; ?></td>
		<td><?php echo $P['dataCadastro']; ?></td>
		<td>
            <a href="<?php echo site_url('produto/edit/'.$P['IDProduto']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('produto/remove/'.$P['IDProduto']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
