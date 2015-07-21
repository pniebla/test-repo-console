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
                    Inventario <small>Tipo de inventario</small>
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
                        <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Listado de tipo de inventario </h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php echo $table; ?>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    $this->load->view('layout/footer');
?>