<?php
    $data['title'] = "Alta de Clientes";
    $data['sidebar'] =  'clientes';
    $this->load->view('layout/header', $data);
    $this->load->view('layout/header_menu');
?>
       

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Management <small>Manejo de Clientes</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-edit"></i> Management
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
                            		$attributes = array('class' => 'email', 'id' => 'myform');
									echo form_open('management/save_contact', $attributes);
                            	?>
                                    <div class="row">
                                		<div class="form-group col-md-8">
                                			<label for="fullname">Nombre completo</label>
                                			<input type="text" name="fullname" class="form-control " value="<?php echo set_value('fullname'); ?>"/>
                                		</div>
                                        <div class="form-group col-md-4">
                                            <label for="phone">Telefono</label>
                                            <input type="text" name="phone" class="form-control" value="<?php echo set_value('phone'); ?>"/>
                                        </div>
                                    </div>
                            		<div class="form-group">
                            			<label for="address2">Colonia</label>
                            			<input type="text" name="address2" class="form-control" value="<?php echo set_value('address2'); ?>"/>
                            		</div>
                            		<div class="form-group">
                            			<label for="address">Direccion</label>
                            			<input type="text" name="address" class="form-control" value="<?php echo set_value('address'); ?>"/>
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