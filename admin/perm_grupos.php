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
	
	
$(function() {
    $( "#sortable1, #sortable2" ).sortable({
      connectWith: ".connectedSortable"
    }).disableSelection();
  });


$('#create').click(function(){


$.ajax({
    type: 'POST', 
    url: "include/addoptions.php",
    data: $("#forma").serialize(), 
    success: function(data) {


$('#resultado').html(data);

       // $('#results').hide();
       // $('#results').html(data);
      //  $("#results").fadeIn('slow').animate({opacity: 1.0}, 1500).effect("slide", { times: 1 }, 800).fadeOut('slow');
      //  window.location.href = "listas.php";

  }
});

});

});


</script>
<style>
#sortable1, #sortable2 {
border: 1px solid #c7c7c7;
    width: 100%;
    min-height: 20px;
    list-style-type: none;
    margin: 0;
    padding: 5px 15px 1px 7px;
    float: left;
    margin-right: 10px;
    border-radius: 9px;
    background: white;
  }
  #sortable1 li, #sortable2 li {
    margin: 0 5px 5px 5px;
    padding: 0px;
    font-size: 1.2em;
    width: 100%;
  }
  </style>
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
                            
                         
                         <br><br>                         
                         
<div class="row">
  <div class="col-md-6">

  <div class="panel panel-success panel-hidden-controls">
<div class="panel-heading">
<h3 class="panel-title">Opciones Disponibles</h3>
    <ul id="sortable1" class="connectedSortable">

<?=$user->opciones();?>
    
    </ul>
</div>
</div>

</div>





  <div class="col-md-6">



        <div class="panel panel-warning panel-hidden-controls">
            <div class="panel-heading">
                <h3 class="panel-title">Grupo nuevo</h3>
                <form role="form" id="forma" action="#">
    
                <input type="text" name="name" class="form-control" value="<? echo 'Lista_'.rand(0,100000); ?>">
                <br>
                <ul id="sortable2" class="connectedSortable">

                <!-- <li class="ui-state-highlight"><div class="dd-handle">Item 6</div></li> -->

                </ul>

                <div class="panel-footer">                                
                <a href="#" id="create" class="btn btn-primary pull-right">Crear Grupo</a>

                </div> 


<?=$user->tabs();?>



                </form>
            </div>
        </div>
</div>


<div class="col-md-9">
<?=$user->muestra_grupos();?>   
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
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='theme/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="theme/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="theme/js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="theme/js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="theme/js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="theme/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>              
        <!-- END PLUGINS -->
        <!-- THIS PAGE PLUGINS -->
        <script type="text/javascript" src="theme/js/settings.js"></script>
        <script type="text/javascript" src="theme/js/plugins.js"></script>        
        <script type="text/javascript" src="theme/js/actions.js"></script>          
        
        <script type="text/javascript" src="theme/js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="theme/js/plugins/bootstrap/bootstrap-select.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
 
    <!-- END SCRIPTS -->                   
    </body>
</html>






