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
                                    <h3 class="panel-title"><strong>Configuracion</strong></h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                    
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                    
                                    
   
            
            
            
        

<a class="gallery-item" href="assets/images/gallery/nature-1.jpg" title="Nature Image 1" data-gallery="">
                                <div class="image">                              
                                    <img src="assets/images/gallery/nature-1.jpg" alt="Nature Image 1">                                        
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><div class="icheckbox_minimal-grey" style="position: relative;"><input type="checkbox" class="icheckbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Nature image 1</strong>
                                    <span>Description</span>
                                </div>                                
                            </a>


                                        
                                            
                                       

                                            
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






