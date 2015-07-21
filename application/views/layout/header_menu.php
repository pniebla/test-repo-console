 <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Consola de Administracion</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong> <?php echo $this->session->userdata('name'); ?> </strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong> <?php echo $this->session->userdata('name'); ?> </strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong> <?php echo $this->session->userdata('name'); ?> </strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php echo $this->session->userdata('name'); ?>  <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="login/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="<?php  echo ($sidebar == 'dashboard')? 'active' : ''; ?>" >
                        <a href="/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="<?php  echo ($sidebar == 'management')? 'active' : ''; ?>">
                        <a href="/management"><i class="fa fa-fw fa-edit"></i> Management</a>

                        <!--<a href="javascript:;" data-toggle="collapse" data-target="#management"><i class="fa fa-edit"></i> Management <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="management" class="collapse">
                            <li class="<?php echo  ($sidebar =='management')? 'active' : ''; ?>"> 
                                <a href="/management">Alta de clientes</a>
                            </li>
                            <li class="<?php echo ($sidebar =='list')? 'active' : ''; ?>">
                                <a href="/management/all_list">Listado de clientes</a>
                            </li>
                        </ul>-->
                    </li>
                    <li class="<?php echo  ($sidebar =='clientes')? 'active' : ''; ?>" >
                        <a href="javascript:;" data-toggle="collapse" data-target="#clients"><i class="fa fa-edit"></i> Clientes <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="clients" class="<?php echo  ($sidebar =='clientes')? 'collapse in' : 'collapse'; ?>">
                            <li > 
                                <a href="/clients">Alta de Clientes</a>
                            </li>
                            <li >
                                <a href="/clients/all_list">Listado de Clientes</a>
                            </li>
                        </ul>
                    </li>
                    <li  class="<?php echo  ($sidebar =='inventario')? 'active' : ''; ?>">
                        <a href="javascript:;" data-toggle="collapse" data-target="#inventory"><i class="fa fa-edit"></i> Inventario <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="inventory"  class="<?php echo  ($sidebar =='inventario')? 'collapse in' : 'collapse'; ?>">
                            <li class="<?php echo  ($sidebar =='inventory_type')? 'active' : ''; ?>"> 
                                <a href="/inventory/inventory_type_list">Tipo de Inventario</a>
                            </li>
                            <li class="<?php echo  ($sidebar =='inventory_type')? 'active' : ''; ?>"> 
                                <a href="/inventory/inventory_type">Alta Tipo de Inventario</a>
                            </li>
                            <li class="<?php echo ($sidebar =='inventory')? 'active' : ''; ?>">
                                <a href="/inventory">Alta de Inventario</a>
                            </li>
                            <li class="<?php echo ($sidebar =='inventory')? 'active' : ''; ?>">
                                <a href="/inventory/inventory_list">Listado de Inventario</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>