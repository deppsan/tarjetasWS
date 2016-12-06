<?
include('include/config.php');
include('include/class.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DWH experts app controllers</title>
<!-- Latest compiled and minified CSS -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<style>
.navbar .pull-right .dropdown-menu, .navbar .dropdown-menu.pull-right {
    right: 0;
    left: auto;
}
.pull-right > .dropdown-menu {
    right: 0;
    left: auto;
}
.pull-right { float: right;     top: -11px;}
</style>

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

<div class="container-fluid">
  <div class="row">

  	<div class="col-xs-9">



    <h1>Usuarios</h1>
<?
$user = new usuarios();
?>



<div class="row">


 <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a>
  <!------

<div class="collapse" id="collapseExample">
  <div class="card card-block">
  -->
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
  <div class="col-xs-12 col-md-8">



  	<ul class="list-group">
    <?=$users = $user->nombre();?>  
	</ul>

  </div>
 
</div>
</div>

  </div>
</div>

</body>
</html>