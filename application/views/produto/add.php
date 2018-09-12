<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('Produto')?>">Produto</a>
    </li>
    <li class="breadcrumb-item active">Adicionar</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Produto</h3>
                </div>

                <div class="col-md-4">

                </div>
            </div> 

        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body"> 

            <?php echo form_open('produto/add',array("class"=>"form-horizontal")); ?>

            <div class="form-group">
                <label for="IDGrupo" class="col-md-4 control-label">Grupo</label>
                <div class="col-md-8">
                    <select name="IDGrupo" class="form-control">
                        <option value="">select grupo</option>
                        <?php 
                        foreach($all_grupos as $grupo)
                        {
                            $selected = ($grupo['IDGrupo'] == $this->input->post('IDGrupo')) ? ' selected="selected"' : "";

                            echo '<option value="'.$grupo['IDGrupo'].'" '.$selected.'>'.$grupo['IDGrupo'].'</option>';
                        } 
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="IDCategoria" class="col-md-4 control-label">Categoria</label>
                <div class="col-md-8">
                    <select name="IDCategoria" class="form-control">
                        <option value="">select categoria</option>
                        <?php 
                        foreach($all_categorias as $categoria)
                        {
                            $selected = ($categoria['IDCategoria'] == $this->input->post('IDCategoria')) ? ' selected="selected"' : "";

                            echo '<option value="'.$categoria['IDCategoria'].'" '.$selected.'>'.$categoria['IDCategoria'].'</option>';
                        } 
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="IDMarcas" class="col-md-4 control-label">Marca</label>
                <div class="col-md-8">
                    <select name="IDMarcas" class="form-control">
                        <option value="">select marca</option>
                        <?php 
                        foreach($all_marcas as $marca)
                        {
                            $selected = ($marca['IDMarcas'] == $this->input->post('IDMarcas')) ? ' selected="selected"' : "";

                            echo '<option value="'.$marca['IDMarcas'].'" '.$selected.'>'.$marca['IDMarcas'].'</option>';
                        } 
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="IDfornecedor" class="col-md-4 control-label">Fornecedor</label>
                <div class="col-md-8">
                    <select name="IDfornecedor" class="form-control">
                        <option value="">select fornecedor</option>
                        <?php 
                        foreach($all_fornecedores as $fornecedor)
                        {
                            $selected = ($fornecedor['IDFornecedor'] == $this->input->post('IDfornecedor')) ? ' selected="selected"' : "";

                            echo '<option value="'.$fornecedor['IDFornecedor'].'" '.$selected.'>'.$fornecedor['IDFornecedor'].'</option>';
                        } 
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="IDUnidade" class="col-md-4 control-label">Unidade</label>
                <div class="col-md-8">
                    <select name="IDUnidade" class="form-control">
                        <option value="">select unidade</option>
                        <?php 
                        foreach($all_unidades as $unidade)
                        {
                            $selected = ($unidade['IDUnidades'] == $this->input->post('IDUnidade')) ? ' selected="selected"' : "";

                            echo '<option value="'.$unidade['IDUnidades'].'" '.$selected.'>'.$unidade['IDUnidades'].'</option>';
                        } 
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="nome" class="col-md-4 control-label">Nome</label>
                <div class="col-md-8">
                    <input type="text" name="nome" value="<?php echo $this->input->post('nome'); ?>" class="form-control" id="nome" />
                </div>
            </div>
            <div class="form-group">
                <label for="codigo" class="col-md-4 control-label">Codigo</label>
                <div class="col-md-8">
                    <input type="text" name="codigo" value="<?php echo $this->input->post('codigo'); ?>" class="form-control" id="codigo" />
                </div>
            </div>
            <div class="form-group">
                <label for="precoCusto" class="col-md-4 control-label">PrecoCusto</label>
                <div class="col-md-8">
                    <input type="text" name="precoCusto" value="<?php echo $this->input->post('precoCusto'); ?>" class="form-control" id="precoCusto" />
                </div>
            </div>
            <div class="form-group">
                <label for="precoVenda" class="col-md-4 control-label">PrecoVenda</label>
                <div class="col-md-8">
                    <input type="text" name="precoVenda" value="<?php echo $this->input->post('precoVenda'); ?>" class="form-control" id="precoVenda" />
                </div>
            </div>
            <div class="form-group">
                <label for="situacao" class="col-md-4 control-label">Situacao</label>
                <div class="col-md-8">
                    <input type="text" name="situacao" value="<?php echo $this->input->post('situacao'); ?>" class="form-control" id="situacao" />
                </div>
            </div>
            <div class="form-group">
                <label for="descricao" class="col-md-4 control-label">Descricao</label>
                <div class="col-md-8">
                    <input type="text" name="descricao" value="<?php echo $this->input->post('descricao'); ?>" class="form-control" id="descricao" />
                </div>
            </div>
            <div class="form-group">
                <label for="codBarras" class="col-md-4 control-label">CodBarras</label>
                <div class="col-md-8">
                    <input type="text" name="codBarras" value="<?php echo $this->input->post('codBarras'); ?>" class="form-control" id="codBarras" />
                </div>
            </div>
            <div class="form-group">
                <label for="foto" class="col-md-4 control-label">Foto</label>
                <div class="col-md-8">
                    <input type="text" name="foto" value="<?php echo $this->input->post('foto'); ?>" class="form-control" id="foto" />
                </div>
            </div>
            <div class="form-group">
                <label for="dataCadastro" class="col-md-4 control-label">DataCadastro</label>
                <div class="col-md-8">
                    <input type="text" name="dataCadastro" value="<?php echo $this->input->post('dataCadastro'); ?>" class="form-control" id="dataCadastro" />
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