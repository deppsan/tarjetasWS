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
                <link rel="stylesheet" type="text/css" href="theme/css/ion/ion.rangeSlider.css"/>
        <link rel="stylesheet" type="text/css" href="theme/css/ion/ion.rangeSlider.skinFlat.css"/>

        <link rel="stylesheet/less" type="text/css" href="theme/css/styles.less"/>
        <script type="text/javascript" src="theme/js/plugins/lesscss/less.min.js"></script>  
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>         
        <!-- EOF LESSCSS INCLUDE -->

<script>


$(document).ready(function(){



$('#selecard').change(function(){



var parametros = { "id_s" : $(this).val()};
        $.ajax({
                data:  parametros,
                url:   'include/crediline.php',
                type:  'post',
                beforeSend: function () {
                        $("#crediline").html("<img src='include/5.gif'>");
                },
                success:  function (response) {

                        $("#crediline").html(response);
                }
        });



alert(thisval);



})


$('#subcard').click(function(){

var one = $('#ise_default').val();
var two = $('#id_saldo').val();

alert(one + ' ' +  ' ' + two);

var parametros = { 

    "cline"         : one,
    "id_subcard"    : two




};
        $.ajax({
                data:  parametros,
                url:   'include/add_sub_card.php',
                type:  'post',
                success:  function (response) {

                        $("#crediline").html(response);
                }
        });



alert(thisval);



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
                            <li><a href="pages-lock-screen.html"><span class="fa fa-lock"></span>Lock Screen</a></li>
                            <li><a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sign Out</a></li>
                        </ul>                        
                    </li> 
                    <!-- END POWER OFF -->
     
                  
           
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                   
                    
                <div id="resultado"></div>
                <!-- END BREADCRUMB -->
                      <address>
         <strong><?= $user->show_data_user($userk,NOMBRE);?> <?= $user->show_data_user($userk,AMATERNO);?> <?= $user->show_data_user($userk,APATERNO);?></strong><br /> <?= $user->show_data_user($userk,app_username);?><br /> <br /> <abbr title="Phone"></abbr> 
      </address>
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>movimientos</strong> Transacciones</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                    
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                    
                                    
   <!-- fdattables -->
            <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tarjeta</th>
                            <th>Card</th>
                            <th>Linea de credito</th>
                            <th>Saldo al corte</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?=$user->tarjetas($userk);?> 
                     
                    </tbody>
                </table>
            <!-- end data tavbles-->
            
            
            
            

                                   
<div class="col-xs-6 col-md-4">
    <h4>Agregar Tarjeta Adicional</h4> 
<div class="panel panel-info" id="grid_block_2">

<div >
 <form role="form" id="form" action="#">

<select id="selecard" class="form-control">

<?=$user->tarjetas_user_select($userk);?>
                                            </select>
               
<div id="crediline"></div>

    
    <h4 id="resultado"></h4>       

        <a href="#" id="subcard" class="btn btn-default">
          Agregar
        </a>

       
      </form>

</div>
</div>



   </div>
                 

                                            
                                       

                                            
                                        </div>
                                        <div class="col-md-6">
                                            
                                            
                                            
                                          
                                            
                                           
                                            
                                           
                                            
                                        </div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                         
                            
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
        
        <!-- START THIS PAGE PLUGINS-->
        <script type='text/javascript' src='theme/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="theme/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="theme/js/plugins/rangeslider/jQAllRangeSliders-min.js"></script>       
        <script type="text/javascript" src="theme/js/plugins/knob/jquery.knob.min.js"></script>
        
        <script type="text/javascript" src="theme/js/plugins/ion/ion.rangeSlider.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->      
        
        <!-- START TEMPLATE -->
        

        <!-- END TEMPLATE -->
        
        <script type="text/javascript" src="theme/js/demo_sliders.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
 
    <!-- END SCRIPTS -->                   
    </body>
</html>






