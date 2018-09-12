<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('revendedor')?>">Revendedor</a>
    </li>
    <li class="breadcrumb-item active">Editar</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Editar</h3>
                </div>

                <div class="col-md-4">

                </div>
            </div> 

        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body">
            <?php echo form_open('revendedor/edit/'.$revendedor['IDRevendedor'],array("class"=>"form-horizontal")); ?>

            <div class="form-group">
                <label for="tabelaPreco" class="col-md-4 control-label">Preco</label>
                <div class="col-md-8">
                    <select name="tabelaPreco" class="form-control">
                        <option value="">select preco</option>
                        <?php 
                        foreach($all_precos as $preco)
                        {
                            $selected = ($preco['IDPreco'] == $revendedor['tabelaPreco']) ? ' selected="selected"' : "";

                            echo '<option value="'.$preco['IDPreco'].'" '.$selected.'>'.$preco['IDPreco'].'</option>';
                        } 
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="IDEmpresaria" class="col-md-4 control-label">Empresaria</label>
                <div class="col-md-8">
                    <select name="IDEmpresaria" class="form-control">
                        <option value="">select empresaria</option>
                        <?php 
                        foreach($all_empresarias as $empresaria)
                        {
                            $selected = ($empresaria['IDEmpresaria'] == $revendedor['IDEmpresaria']) ? ' selected="selected"' : "";

                            echo '<option value="'.$empresaria['IDEmpresaria'].'" '.$selected.'>'.$empresaria['IDEmpresaria'].'</option>';
                        } 
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="IDExecutiva" class="col-md-4 control-label">Executiva</label>
                <div class="col-md-8">
                    <select name="IDExecutiva" class="form-control">
                        <option value="">select executiva</option>
                        <?php 
                        foreach($all_executivas as $executiva)
                        {
                            $selected = ($executiva['IDExecutiva'] == $revendedor['IDExecutiva']) ? ' selected="selected"' : "";

                            echo '<option value="'.$executiva['IDExecutiva'].'" '.$selected.'>'.$executiva['IDExecutiva'].'</option>';
                        } 
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="limite" class="col-md-4 control-label">Limite</label>
                <div class="col-md-8">
                    <input type="text" name="limite" value="<?php echo ($this->input->post('limite') ? $this->input->post('limite') : $revendedor['limite']); ?>" class="form-control" id="limite" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-success float-right">Salvar</button>
                </div>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
