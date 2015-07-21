<?php
    $data['title'] = "Administracion de inventario";
    $data['sidebar'] =  'inventario';
    $this->load->view('layout/header', $data);
    $this->load->view('layout/header_menu',$data);
?>
       

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Inventario <small>Listado</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-edit"></i> Inventario
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">                  
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Listado de inventario </h3>
                    </div>
                    <div class="panel-body">
                        <?php //echo validation_errors(); ?>
                        <?php
                            $attributes = array('class' => 'email', 'id' => 'myform', 'role'=>'form');
                            echo form_open('inventory/update_item', $attributes);
                        ?>  
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="code">Codigo</label>
                                    <input type="text" name="code" class="form-control " value="<?php echo $code; ?>"/>
                                </div>
                                <div class="form-group  col-md-4 ">
                                    <label for="type">Tipo</label>
                                    <select name="type" class="form-control">
                                        <?php echo $inventory_type; ?>
                                    </select>
                                </div>                    
                            </div> 
                            <div class="row">
                            <div class="form-group col-md-3 ">
                                <label for="type">Costo</label>

                                <label class="sr-only" for="exampleInputAmount">Cantidad (en pesos)</label>
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
                                    <input type="text" name="cost" class="form-control" id="exampleInputAmount" placeholder="Cantidad" value="<?php echo $cost; ?>"> 
                                    <div class="input-group-addon">.00</div>
                                
                                </div>
                            </div>                      
                            </div>                      

                            <div class="form-group">
                                <label for="description">Descripcion</label>
                                <textarea rows="5" cols="10" name="description" class="form-control"><?php echo $description; ?></textarea>
                            </div>
                                
                            <div class="form-group">
                                <button class="btn btn-info pull-right" >Guardar </button>
                                <a href="/inventory/delete_item/<?php echo $id; ?>" class="btn btn-info pull-right" style="margin-right:10px;">Eliminar </a>                    
                                <a href="/inventory/inventory_list" class="btn btn-info pull-right" style="margin-right:10px;">Cancelar </a>                    
                            </div>
                        <?php echo form_close(); ?>
                                                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    $this->load->view('layout/footer');
?>