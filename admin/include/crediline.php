<?
include('config.php');
include('class.php');
$sal=$_REQUEST['id_s'];
$user = new usuarios();
 ?>
    <div class="form-group">


    <label class="control-label col-md-2">Linea de credito</label>
    <div class="col-md-10">
    <p>Agregue la línea de credito</p>
    <input type="text" id="ise_default" name="ise_default" value="" data-max="<?=$user->saldo_tarjeta($sal);?>"/>
    <input type="hidden" id="id_saldo" name="id_saldo" value="<?=$sal;?>">
   

    </div>
    </div>


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