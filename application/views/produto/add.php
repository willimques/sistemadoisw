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
<div class="col-12">
    <!--Estrutura do menu -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="dados-tab" data-toggle="tab" href="#dados" role="tab" aria-controls="dados" aria-selected="false">Dados Gerais</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="estoque-tab" data-toggle="tab" href="#estoque" role="tab" aria-controls="estoque" aria-selected="false">Estoque</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="fornecedor-tab" data-toggle="tab" href="#fornecedor" role="tab" aria-controls="fornecedor" aria-selected="false">Fornecedor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tributacao-tab" data-toggle="tab" href="#tributacao" role="tab" aria-controls="tributacao" aria-selected="false">Tributação</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="arqImg-tab" data-toggle="tab" href="#arqImg" role="tab" aria-controls="arqImg" aria-selected="false">Arquivos e imagens</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Informações adicionais</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        
        <!--Menu Dados Gerais -->
        <div class="tab-pane fade show active" id="dados" role="tabpanel" aria-labelledby="dados-tab">
            <?php echo form_open('produto/add',array("class"=>"form-horizontal")); ?>			
                <div class="row mt-3">
                    <div class="form-group col-3">
                        <div class="form-label-group">
                            <input type="number" class="form-control" value="<?php echo $this->input->post('codigo'); ?>" name="codigo" id="codigo" placeholder="Código" title="enter your first name if any.">
                            <label for="codigo">Código (SKU)</label>
                        </div>
                    </div>
                    <div class="form-group col-3">                       
                        <div class="form-group">
                            <select name="IDCategoria" id="Categoria" class="form-control">
                                <option value="">* Selecione a categoria</option>
                                <?php 
                                    foreach($all_categorias as $C)
                                    {
                                        $selected = ($C['IDCategoria'] == $this->input->post('IDCategoria')) ? ' selected="selected"' : "";
                                        echo '<option value="'.$C['IDCategoria'].'" '.$selected.'>'.$C['descricao'].'</option>';
                                    } 
                                    ?>
                            </select>
                            <span class="text-danger">
                                <?php echo form_error('IDCategoria');?></span>
                        </div>                      
                    </div>
                    <div class="form-group col-3">
                        <div class="form-group">
                            <select name="IDMarcas" id="Marcas" class="form-control">
                                <option value="">* Selecione a marca</option>
                                <?php 
                                    foreach($all_marcas as $M)
                                    {
                                        $selected = ($M['IDMarcas'] == $this->input->post('IDMarcas')) ? ' selected="selected"' : "";
                                        echo '<option value="'.$M['IDMarcas'].'" '.$selected.'>'.$M['Descricao'].'</option>';
                                    } 
                                    ?>
                            </select>
                            <span class="text-danger">
                                <?php echo form_error('IDMarcas');?></span>
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <div class="form-group">
                            <select name="IDUnidade" id="Unidade" class="form-control">
                                <option value="">* Selecione a unidade</option>
                                <?php 
                                    foreach($all_unidades as $U)
                                    {
                                        $selected = ($U['IDUnidade'] == $this->input->post('IDUnidade')) ? ' selected="selected"' : "";
                                        echo '<option value="'.$U['IDUnidade'].'" '.$selected.'>'.$U['descricao'].'</option>';
                                    } 
                                    ?>
                            </select>
                            <span class="text-danger">
                                <?php echo form_error('IDUnidade');?></span>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="form-group col-3">
                        <div class="form-label-group">
                            <input type="text" class="form-control" value="<?php echo $this->input->post('formato'); ?>" name="formato" id="formato" placeholder="Formato" title="enter your first name if any.">
                            <label for="formato">Formato</label>
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <div class="form-label-group">
                            <input type="number" class="form-control" value="<?php echo $this->input->post('precoVenda'); ?>" name="precoVenda" id="precoVenda" placeholder="Preço Venda" title="enter your first name if any.">
                            <label for="precoVenda">Preço Venda</label>
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <div class="form-label-group">
                            <input type="text" class="form-control" value="<?php echo $this->input->post('situacao'); ?>" name="situacao" id="situacao" placeholder="Situação" title="enter your first name if any.">
                            <label for="situacao">Situação</label>
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <div class="form-label-group">
                            <input type="text" class="form-control" value="<?php echo $this->input->post('codBarras'); ?>" name="codBarras" id="codBarras" placeholder="Cod. Barras" title="enter your first name if any.">
                            <label for="codBarras">Cod. Barras</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="form-group col-9">
                        <div class="form-label-group">
                            <input type="text" class="form-control" value="<?php echo $this->input->post('descricao'); ?>" name="descricao" id="descricao" placeholder="Descrição" title="enter your first name if any.">
                            <label for="descricao">Descrição</label>
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <div class="form-label-group">
                            <input type="date" class="form-control" value="<?php echo $this->input->post('dataCadastro'); ?>" name="dataCadastro" id="dataCadastro" placeholder="Data Cadastro" title="enter your first name if any.">
                            <label for="dataCadastro">Data Cadastro</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <br>                       
                        <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>Limpar</button>
                        <button class="btn btn-lg" type="cancel"><i class="glyphicon glyphicon-repeat"></i>Cancelar</button>
                    </div>
                </div>			            
        </div>

        <!--Menu Estoque-->
        <div class="tab-pane fade show" id="estoque" role="tabpanel" aria-labelledby="estoque-tab">      
                <div class="row mt-3">
                    <div class="form-group col-5">
                        <span class="text-danger"></span>
                        <div class="form-group">
                            <label for="">Selecione a Filial </label>
                            <select name="IDFilial" class="form-control">
                                <option value="">* Selecione Filial</option>
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
                    <div class="form-group col-7 mt-4">
                        <div class="form-label-group">
                            <input type="text" class="form-control" value="<?php echo $this->input->post('nome'); ?>" name="nome" id="nome" placeholder="Nome do produto" title="enter your first name if any.">
                            <label for="nome">Nome do produto </label>                         
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="form-group col-3">
                        <div class="form-label-group">
                            <input type="number" class="form-control" value="<?php echo $this->input->post('quantidade'); ?>" name="quantidade" id="quantidade" placeholder="Quantidade" title="enter your first name if any.">
                            <label for="quantidade">Quantidade </label>                          
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <div class="form-label-group">
                            <input type="text" class="form-control" value="<?php echo $this->input->post('movimento'); ?>" name="movimento" id="movimento" placeholder="movimento" title="enter your first name if any.">
                            <label for="movimento">Movimento</label>
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <div class="form-label-group">
                            <input type="number"  class="form-control" value="<?php echo $this->input->post('estoque_min'); ?>" name="estoque_min" id="estoque_min" placeholder="Estoque Minimo" title="enter your first name if any.">
                            <label for="estoque_min">Estoque Minimo</label>                           
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <div class="form-label-group">
                            <input type="number" class="form-control" value="<?php echo $this->input->post('estoqeu_max'); ?>" name="estoqeu_max" id="estoqeu_max" placeholder="Estoque Maximo" title="enter your first name if any.">
                            <label for="estoqeu_max">Estoque Maximo</label>                         
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <br>                      
                        <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>Limpar</button>
                        <button class="btn btn-lg" type="cancel"><i class="glyphicon glyphicon-repeat"></i>Cancelar</button>
                    </div>
                </div>         
        </div>

        <!--Menu Fornecedor-->
        <div class="tab-pane fade show" id="Fornecedor" role="tabpanel" aria-labelledby="fornecedor-tab">          
                <div class="row mt-3">
                    <div class="form-group col-6">
                        <div class="form-label-group">
                            <select name="IDFornecedor" id="Fornecedor" class="form-control">
                                <option value="">Selecione o Fornecedor</option>
                                <?php 
                                 foreach($all_fornecedores as $F)
                                    {
                                        $selected = ($F['IDFornecedor'] == $this->input->post('IDfornecedor')) ? ' selected="selected"' : "";
                                        echo '<option value="'.$F['IDFornecedor'].'" '.$selected.'>'.$F['nome'].'</option>';
                                    } 
                                 ?>
                            </select>
                            <span class="text-danger">
                                <?php echo form_error('IDFornecedor');?></span>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <div class="form-label-group">
                            <input type="text" class="form-control" value="<?php echo $this->input->post('fabricante'); ?>" name="fabricante" id="fabricante" placeholder="Fabricante" title="enter your first name if any.">
                            <label for="fabricante">Fabricante</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="form-group col-3">
                        <div class="form-label-group">
                            <input type="text" class="form-control" value="<?php echo $this->input->post('codFabricante'); ?>" name="codFabricante" id="codFabricante" placeholder="Cod. no fabricante" title="enter your first name if any.">
                            <label for="codFabricante">Cod. no fabricante</label>
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <div class="form-label-group">
                            <input type="number" class="form-control" value="<?php echo $this->input->post('precoCusto'); ?>" name="precoCusto" id="precoCusto" placeholder="Preço Custo" title="enter your first name if any.">
                            <label for="precoCusto">Preço Custo</label>
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <div class="form-label-group">
                            <input type="text" class="form-control" value="<?php echo $this->input->post('garantia'); ?>" name="garantia" id="garantia" placeholder="Garantia" title="enter your first name if any.">
                            <label for="garantia">Garantia</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <br>                     
                        <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>Limpar</button>
                        <button class="btn btn-lg" type="cancel"><i class="glyphicon glyphicon-repeat"></i>Cancelar</button>
                    </div>
                </div>           
        </div>

        <!--Menu Tributação-->
        <div class="tab-pane fade show" id="tributacao" role="tabpanel" aria-labelledby="tributacao-tab">                  
                <div class="row mt-3">
                    <div class="form-group col-3">
                        <div class="form-label-group">
                            <input type="text" class="form-control" value="<?php echo $this->input->post('origem'); ?>" name="origem" id="origem" placeholder="origem" title="enter your first name if any.">
                            <label for="origem">Origem </label>
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <div class="form-label-group">
                            <input type="text" class="form-control" value="<?php echo $this->input->post('tipoItem'); ?>" name="tipoItem" id="tipoItem" placeholder="Tipo de item" title="enter your first name if any.">
                            <label for="tipoItem">Tipo de item</label>
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <div class="form-label-group">
                            <input type="number" class="form-control" value="<?php echo $this->input->post('tributo'); ?>" name="tributo" id="tributo" placeholder="% Tributo" title="enter your first name if any.">
                            <label for="tributo">% Tributo</label>
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <div class="form-group">
                            <select name="IDGrupo" id="Grupo" class="form-control">
                                <option value="">* Selecione o Grupo</option>
                                <?php 
                                    foreach($all_grupos as $G)
                                    {
                                        $selected = ($G['IDGrupo'] == $this->input->post('IDGrupo')) ? ' selected="selected"' : "";
                                        echo '<option value="'.$G['IDGrupo'].'" '.$selected.'>'.$G['descricao'].'</option>';
                                    } 
                                    ?>
                            </select>
                            <span class="text-danger">
                                <?php echo form_error('IDGrupo');?></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <br>
                        <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i>Salvar</button>
                        <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>Limpar</button>
                        <button class="btn btn-lg" type="cancel"><i class="glyphicon glyphicon-repeat"></i>Cancelar</button>
                    </div>
                </div>          
            <?php echo form_close(); ?>
        </div>
        <script>
            $(document).ready(
                function(
                ) {
                    $('#Grupo').change(function() {
                        t = $('#Grupo').val()
                        console.log(t)
                    })
                }
            )
        </script>
    </div>
</div>