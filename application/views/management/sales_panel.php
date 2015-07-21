<?php
    $data['title'] = "Management";
    $data['sidebar'] = 'management';
    $this->load->view('layout/header', $data);
    $this->load->view('layout/header_menu');
?>
       

<div id="page-wrapper">

    <div class="container-fluid">
         <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Management <small>Ventas</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Panel de Ventas
                    </li>
                </ol>
            </div>
        </div>
        <?php
            $attributes = array('id' => 'myform', 'role'=>'form');
            echo form_open('rent/new_rent', $attributes);
        ?>  
        <div class="row">
            <div class="col-md-12">
                <div class="form-group ">                               

                    <label for="client">Cliente</label>
                    <select name="clients" class="form-control" id="clients_select">
                        <?php foreach ($select_clients as $key => $value) {
                           echo  "<option value='$value->id'>";
                           echo  $value->fullname;
                           echo  "</option>";
                        }  ?>
                    </select>                                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">                                    
                <div class="form-group ">
                    <label for="address">Direcci&oacute;n</label>                                    
                    <input type="text" name="address" id="address" class="form-control " readonly="readonly" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group ">
                    <label for="address2">Colonia</label>                                    
                    <input type="text" name="address2" id="address2" class="form-control " readonly="readonly"/>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
        $(document).ready(function(){
            $(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);
            $('#clients_select').on('change', function(){
                $.post('/management/get_client_info' , {id:$(this).val()},function(data){      
                   
                }).done(function(data){
                    data = $.parseJSON(data);                    
                    $('#address').val(data.address);
                    $('#address2').val(data.address2);
                });
             
            });
        });
    </script>
<?php
    
    $this->load->view('layout/footer');
?>
