
<?php echo form_open('precoproduto/add',array("class"=>"form-horizontal")); ?>

<div class="form-group">
    <label for="valor" class="col-md-4 control-label">Valor</label>
    <div class="col-md-8">
        <input type="text" name="valor" value="<?php echo $this->input->post('valor'); ?>" class="form-control" id="valor" />
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success">Save</button>
    </div>
</div>

<?php echo form_close(); ?>