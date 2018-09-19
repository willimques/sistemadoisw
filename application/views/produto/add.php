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
        <!--<div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="row">
                        <div class="col-md-12">
                           <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="">Dados Gerais</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('Estoque')?>">Estoque</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('Fornecedor')?>">Fornecedor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Arquivo</a>
                            </li>
                            </ul>
                        </div>               
                    </div> 
                </div>
            </div>  
            <div class="">	
                <div class="container-fluid">
                    <div class="card-body"> 
                      <?php echo form_open('produto/add',array("class"=>"form-horizontal")); ?>
                        <div class="">
                            <div class="row">                      												
                                <div class="form-group col-md-3">
                                    <label for="nome" class="col-md-12 control-label">Código (SKU)</label>
                                    <div class="">
                                        <input type="text" name="nome" value="<?php echo $this->input->post('nome'); ?>" class="form-control" id="nome" />
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="IDGrupo" class="col-md-12 control-label">Grupo</label>
                                    <div class="">
                                        <select name="IDGrupo" class="form-control">
                                            <option value="">Selecione Grupo</option>
                                            <?php 
                                            foreach($all_grupos as $grupo)
                                            {
                                                $selected = ($grupo['IDGrupo'] == $this->input->post('IDGrupo')) ? ' selected="selected"' : "";

                                                echo '<option value="'.$grupo['IDGrupo'].'" '.$selected.'>'.$grupo['descricao'].'</option>';
                                            } 
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="IDCategoria" class="col-md-12 control-label">Categoria</label>
                                    <div class="">
                                        <select name="IDCategoria" class="form-control">
                                            <option value="">Selecione Categoria</option>
                                            <?php 
                                            foreach($all_categorias as $categoria)
                                            {
                                                $selected = ($categoria['IDCategoria'] == $this->input->post('IDCategoria')) ? ' selected="selected"' : "";

                                                echo '<option value="'.$categoria['IDCategoria'].'" '.$selected.'>'.$categoria['descricao'].'</option>';
                                            } 
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="IDMarcas" class="col-md-12 control-label">Marca</label>
                                    <div class="">
                                        <select name="IDMarcas" class="form-control">
                                            <option value="">Selecione Marca</option>
                                            <?php 
                                            foreach($all_marcas as $marca)
                                            {
                                                $selected = ($marca['IDMarcas'] == $this->input->post('IDMarcas')) ? ' selected="selected"' : "";

                                                echo '<option value="'.$marca['IDMarcas'].'" '.$selected.'>'.$marca['Descricao'].'</option>';
                                            } 
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="IDUnidade" class="col-md-12 control-label">Unidade</label>
                                    <div class="">
                                        <select name="IDUnidade" class="form-control">
                                            <option value="">Selecione Unidade</option>
                                            <?php 
                                            foreach($all_unidades as $unidade)
                                            {
                                                $selected = ($unidade['IDUnidades'] == $this->input->post('IDUnidade')) ? ' selected="selected"' : "";

                                                echo '<option value="'.$unidade['IDUnidades'].'" '.$selected.'>'.$unidade['descricao'].'</option>';
                                            } 
                                            ?>
                                        </select>
                                    </div>
                                </div>						
                                <div class="form-group col-md-3">
                                    <label for="codigo" class="col-md-12 control-label">Formato</label>
                                    <div class="">
                                        <input type="text" name="codigo" value="<?php echo $this->input->post(''); ?>" class="form-control" id="codigo" />
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="codigo" class="col-md-12 control-label">Unidade</label>
                                    <div class="">
                                        <input type="text" name="codigo" value="<?php echo $this->input->post(''); ?>" class="form-control" id="codigo" />
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="precoCusto" class="col-md-12 control-label">Preço Custo</label>
                                    <div class="">
                                        <input type="text" name="precoCusto" value="<?php echo $this->input->post('precoCusto'); ?>" class="form-control" id="precoCusto" />
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="precoVenda" class="col-md-12 control-label">Preço Venda</label>
                                    <div class="">
                                        <input type="text" name="precoVenda" value="<?php echo $this->input->post('precoVenda'); ?>" class="form-control" id="precoVenda" />
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="situacao" class="col-md-12 control-label">Situação</label>
                                    <div class="">
                                        <input type="text" name="situacao" value="<?php echo $this->input->post('situacao'); ?>" class="form-control" id="situacao" />
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="descricao" class="col-md-12 control-label">Descrição</label>
                                    <div class="">
                                        <input type="text" name="descricao" value="<?php echo $this->input->post('descricao'); ?>" class="form-control" id="descricao" />
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="codBarras" class="col-md-12 control-label">Cod. Barras</label>
                                    <div class="">
                                        <input type="text" name="codBarras" value="<?php echo $this->input->post('codBarras'); ?>" class="form-control" id="codBarras" />
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="dataCadastro" class="col-md-12 control-label">Data Cadastro</label>
                                    <div class="">
                                        <input type="date" name="dataCadastro" value="<?php echo $this->input->post('dataCadastro'); ?>" class="form-control" id="dataCadastro" />
                                    </div>
                                </div>												
                            </div>	
                        </div>
                        <div class="form-group col-md-5">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn btn-success">Salvar</button>
                            </div>
                        </div>
                      <?php echo form_close(); ?>
                    </div>			 
                </div>
            </div>	
        </div> -->
        <div class="col-9">

                                <ul class="nav nav-tabs" id="myTab" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link" id="dados-tab" data-toggle="tab" href="#dados" role="tab" aria-controls="dados" aria-selected="false">Dados Gerais</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pedidos-tab" data-toggle="tab" href="#pedidos" role="tab" aria-controls="estoque" aria-selected="false">Estoque</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="produtos-tab" data-toggle="tab" href="#produtos" role="tab" aria-controls="fornecedor" aria-selected="false">Fornecedor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="resumo-tab" data-toggle="tab" href="#resumo" role="tab" aria-controls="tributacao" aria-selected="false">Tributação</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="resumo-tab" data-toggle="tab" href="#resumo" role="tab" aria-controls="arqImg" aria-selected="false">Arquivos e imagens</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="resumo-tab" data-toggle="tab" href="#resumo" role="tab" aria-controls="info" aria-selected="false">Informações adicionais</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">                                                     
                                    <div class="tab-pane fade show" id="dados" role="tabpanel" aria-labelledby="dados-tab">
                                        <form class="form" action="##" method="post" id="registrationForm">
                                            <div class="row mt-3">
                                                <div class="form-group col-6">
                                                    <div class="form-label-group">
                                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." readonly>  
                                                        <label for="first_name">Código (SKU)</label> 
                                                    </div>
                                                </div>
                                                <div class="form-group col-6">
                                                    <div class="form-label-group">
                                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." readonly>  
                                                        <label for="first_name">Categoria</label> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="form-group col-3">
                                                    <div class="form-label-group">
                                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." readonly>  
                                                        <label for="first_name">Marca</label> 
                                                    </div>
                                                </div>
                                                <div class="form-group col-6">
                                                    <div class="form-label-group">
                                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." readonly>  
                                                        <label for="first_name">Unidade</label> 
                                                    </div>
                                                </div>
                                                <div class="form-group col-3">
                                                    <div class="form-label-group">
                                                        <input type="email" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." readonly>  
                                                        <label for="first_name">Formato</label> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="form-group col-4">
                                                    <div class="form-label-group">
                                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." readonly>  
                                                        <label for="first_name" >Preço Custo</label> 
                                                    </div>
                                                </div>
                                                <div class="form-group col-4">
                                                    <div class="form-label-group">
                                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." readonly>  
                                                        <label for="first_name" >Preço Venda</label> 
                                                    </div>
                                                </div>
                                                <div class="form-group col-4">
                                                    <div class="form-label-group">
                                                        <input type="email" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." readonly>  
                                                        <label for="first_name" >Situação</label> 
                                                    </div>
                                                </div>
                                            </div>                                    
                                            <div class="row mt-3">
                                                <div class="form-group col-3">
                                                    <div class="form-label-group">
                                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." readonly>  
                                                        <label for="first_name" >Descrição</label> 
                                                    </div>
                                                </div>
                                                <div class="form-group col-4">
                                                    <div class="form-label-group">
                                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." readonly>  
                                                        <label for="first_name" >Cod. Barras</label> 
                                                    </div>
                                                </div>
                                                <div class="form-group col-5">
                                                    <div class="form-label-group">
                                                        <input type="email" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." readonly>  
                                                        <label for="first_name">Data Cadastro</label> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <br>
                                                    <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i>Salvar</button>
                                                    <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>Limpar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="pedidos" role="tabpanel" aria-labelledby="pedidos-tab"> 
                                                         <div class="container-fluid">
                <div class="card-body"> 

                    <?php echo form_open('estoque/add',array("class"=>"form-horizontal")); ?>

                    <div class="form-group">
                        <label for="IDProduto" class="col-md-4 control-label"><span class="text-danger">*</span>Produto</label>
                        <div class="col-md-8">
                            <select name="IDProduto" class="form-control">
                                <option value="">Selecione Produto</option>
                                <?php 
                                foreach($all_produtos as $produto)
                                {
                                    $selected = ($produto['IDProduto'] == $this->input->post('IDProduto')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$produto['IDProduto'].'" '.$selected.'>'.$produto['descricao'].'</option>';
                                } 
                                ?>
                            </select>
                            <span class="text-danger"><?php echo form_error('IDProduto');?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="IDFilial" class="col-md-4 control-label"><span class="text-danger">*</span>Filial</label>
                        <div class="col-md-8">
                            <select name="IDFilial" class="form-control">
                                <option value="">Selecione Filial</option>
                                <?php 
                                foreach($all_filiais as $filial)
                                {
                                    $selected = ($filial['IDFilial'] == $this->input->post('IDFilial')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$filial['IDFilial'].'" '.$selected.'>'.$filial['IDFilial'].'</option>';
                                } 
                                ?>
                            </select>
                            <span class="text-danger"><?php echo form_error('IDFilial');?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="quantidade" class="col-md-4 control-label">Quantidade</label>
                        <div class="col-md-8">
                            <input type="text" name="quantidade" value="<?php echo $this->input->post('quantidade'); ?>" class="form-control" id="quantidade" />
                            <span class="text-danger"><?php echo form_error('quantidade');?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="movimento" class="col-md-4 control-label">Movimento</label>
                        <div class="col-md-8">
                            <input type="text" name="movimento" value="<?php echo $this->input->post('movimento'); ?>" class="form-control" id="movimento" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="estMinimo" class="col-md-4 control-label">Estoque Mínimo</label>
                        <div class="col-md-8">
                            <input type="text" name="estMinimo" value="<?php echo $this->input->post('estMinimo'); ?>" class="form-control" id="estMinimo" />
                            <span class="text-danger"><?php echo form_error('estMinimo');?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="estMaximo" class="col-md-4 control-label">Estoque Máximo</label>
                        <div class="col-md-8">
                            <input type="text" name="estMaximo" value="<?php echo $this->input->post('estMaximo'); ?>" class="form-control" id="estMaximo" />
                            <span class="text-danger"><?php echo form_error('estMaximo');?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
                                    </div>
                                    <div class="tab-pane fade" id="produtos" role="tabpanel" aria-labelledby="produtos-tab"> 
                                    <table class="data table table-striped no-margin">
                                        <?php echo form_open('fornecedor/add',array("class"=>"form-horizontal")); ?>

                      <div class="form-group">
                       <div class="col-md-8">
                            <select name="IDFornecedor" class="form-control">
                                <option value="">Selecione o Cadastro</option>
                                <?php 
                                foreach($all_pessoas as $pessoa)
                                {
                                    $selected = ($pessoa['IDPessoa'] == $this->input->post('IDFornecedor')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$pessoa['IDPessoa'].'" '.$selected.'>'.$pessoa['nome'].'</option>';
                                } 
                                ?>
                            </select>
                        </div>
                            <span class="text-danger"><?php echo form_error('IDFornecedor');?></span>
                        </div>           


                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                    </div>

                    <?php echo form_close(); ?>
                                        </table>
                                    </div>
                                       <div class="tab-pane fade" id="resumo" role="tabpanel" aria-labelledby="resumo-tab">
                                         <div class="container">
                                            <div class="row">
                                                <div class="card-body  col-md-6" align="center">
                                                    <h6>Boletos</h6>
                                                    <table class="data table table-responsive">
                                                        <thead>
                                                            <tr>
                                                                <th>Numero</th>
                                                                <th>Data Vencimento</th>
                                                                <th>Valor</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>22/05/2018  </td>
                                                                <td>R$ 500,00</td>                                                        
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>22/05/2018  </td>
                                                                <td>R$ 500,00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>22/05/2018  </td>
                                                                <td>R$ 500,00</td>                                                       
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>22/05/2018  </td>
                                                                <td>R$ 500,00</td>                                                        
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="card-body col-md-6" align="center" >
                                                    <h6>Cheque</h6>
                                                    <table class="data table table-responsive">
                                                        <thead>
                                                            <tr>
                                                                 <th>Numero</th>
                                                                <th>Data Vencimento</th>
                                                                <th>Valor</th>                                                       
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>22/05/2018</td>
                                                                <td>R$ 800,00</td>                                                       
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>22/05/2018</td>
                                                                <td>R$ 800,00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>22/05/2018</td>
                                                                <td>R$ 800,00</td>                                                        
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>22/05/2018</td>
                                                                <td>R$ 800,00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
        </div> 
