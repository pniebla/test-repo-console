<?php
    $data['title'] = "Tipo Inventario";
    $data['sidebar'] =  'inventario';    
    $this->load->view('layout/header', $data);
    $this->load->view('layout/header_menu', $data);
?>
       

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Inventario <small> Alta de Tipo de Inventario</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-edit"></i> Listado de Tipo de Inventario
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row 

        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                </div>
            </div>
        </div>
        <!-- /.row -->

   
        <!-- .row -->
        <div class="row">                  
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Formulario </h3>
                    </div>
                    <div class="panel-body">
                    	<?php echo validation_errors(); ?>
                    	<?php
                    		$attributes = array('class' => 'email', 'id' => 'myform', 'role'=>'form');
							echo form_open('inventory/inventory_type_save', $attributes);
                    	?>  
                            <div class="row">                                
                                <div class="form-group col-md-7">
                                    <label for="type_name">Nombre</label>
                                    <input type="text" name="name" class="form-control " value="<?php echo set_value('type_name'); ?>"/>
                                </div>
                            </div> 
                            <div class="form-group">
                    			<label for="description">Descripcion</label>
                    			<textarea rows="5" cols="10" name="description" class="form-control"><?php echo set_value('description'); ?></textarea>
                    		</div>
                        		
                    		<div class="form-group">                            			
                    			<button class="btn btn-info pull-right" >Guardar </button>
                    		</div>
                    	<?php echo form_close(); ?>
                                                       
                    </div>
                </div>
            </div>
          
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php
    
    $this->load->view('layout/footer');
?>