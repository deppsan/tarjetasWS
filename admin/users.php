<?
include('include/config.php');
include('include/class.php');
$userk=$_REQUEST['id'];
$user = new usuarios();
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?=$panel_title; ?></title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
                        
        <!-- LESSCSS INCLUDE -->        
        <link rel="stylesheet/less" type="text/css" href="theme/css/styles.less"/>
        <script type="text/javascript" src="theme/js/plugins/lesscss/less.min.js"></script>  
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>         
        <!-- EOF LESSCSS INCLUDE -->

<script>
$(document).ready(function(){

$('#elsubmit').click(function(){


var idk     = $('#nombre').val();
var app     = $('#apaterno').val();
var apm     = $('#amaterno').val();
var users   = $('#usuario').val();
var pass    = $('#contra').val();


var parametros = {
                "iuser" : idk,
                "app" : app,
                "apm" : apm,
                "user" : users,
                "pass" : pass
        };
        $.ajax({
                data:  parametros,
                url:   'include/newuser.php',
                type:  'post',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) {

                        $("#resultado").html('<div class="alert alert-success" role="alert">El usuario ha sido agregado</div>');
                }
        });



location.reload();

})

});
</script>
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
<? include ('sidebar.php');?>
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                   
                    <!-- END SEARCH -->
                    <!-- POWER OFF -->
                    <li class="xn-icon-button pull-right last">
                        <a href="#"><span class="fa fa-power-off"></span></a>
                        <ul class="xn-drop-left animated zoomIn">
                            <li><a href="pages-lock-screen.html"><span class="fa fa-lock"></span> Lock Screen</a></li>
                            <li><a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sign Out</a></li>
                        </ul>                        
                    </li> 
                    <!-- END POWER OFF -->
     
                  
           
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                   
                    
                <div id="resultado"></div>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form id="form_add" action="#" class="form-horizontal" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Usuarios</strong></h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                    
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                    
                                    
   <!-- fdattables -->
             <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th width="50">id</th>
                                                    <th width="150">usuario</th>
                                                    <th width="100">Acciones</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                              
                                              <?=$users = $user->nombre();?>   
                                               
                                            </tbody>
                                        </table>
            <!-- end data tavbles-->
            
            
            
            <h1>Agregar Usuario</h1>     

                                   
                                         <div class="col-xs-6 col-md-4">


    <form role="form" id="form" action="#">
        <div class="form-group">
           
          <label for="exampleInputEmail1">
            nombre
          </label>
          <input type="text" class="form-control" id="nombre" />
        </div>
        <div class="form-group">
           
          <label for="exampleInputPassword1">
            Apellido Paterno
          </label>
          <input type="text" class="form-control" id="apaterno" />
        </div>
        <div class="form-group">
           
          <label for="exampleInputEmail1">
            Apellido Materno
          </label>
          <input type="text" class="form-control" id="amaterno" />
        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">
            Usuario
          </label>
          <input type="text" class="form-control" id="usuario" />
        </div>
        <div class="form-group">


          <label for="exampleInputEmail1">
            Password
          </label>
          <input type="password" class="form-control" id="contra" />
        </div>
        <div class="form-group">

                   <h4 id="resultado"></h4>       
        </div> 
        <button type="button" id="elsubmit" class="btn btn-default">
          Submit
        </button>

       
      </form></div>
                                        
                                            
                                       

                                            
                                        </div>
                                        <div class="col-md-6">
                                            
                                            
                                            
                                          
                                            
                                           
                                            
                                           
                                            
                                        </div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            </form>
                            
                        </div>
                    </div>                    
                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                    
              
                                        
            </div>            
            <!-- END PAGE CONTENT -->
          

            
        </div>
        <!-- END PAGE CONTAINER -->
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <!-- END PRELOADS -->             
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="theme/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="theme/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="theme/js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='theme/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="theme/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="theme/js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="theme/js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="theme/js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="theme/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>              
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type="text/javascript" src="theme/js/plugins.js"></script>        
        <script type="text/javascript" src="theme/js/actions.js"></script>          
        
        <script type="text/javascript" src="theme/js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="theme/js/plugins/bootstrap/bootstrap-select.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
 
    <!-- END SCRIPTS -->                   
    </body>
</html>






