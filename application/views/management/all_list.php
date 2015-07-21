<?php
    $data['title'] = "Management";
    $data['sidebar'] =  'managment';
    $this->load->view('layout/header', $data);
    $this->load->view('layout/header_menu',$data);
?>
       

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Management <small>Contactos</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-edit"></i> Management
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">                  
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Lista de contactos </h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Direccion</th>
                                        <th>Colonia</th>
                                        <th>Telefono</th>
                                        <th>Fecha dado de alta</th>
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