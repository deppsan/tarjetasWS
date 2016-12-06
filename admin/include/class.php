<?

global $dbhandle;
global $selected;


class usuarios {
	
	
private $numero;
	
	
		public function nombre(){
		
		$result = mysql_query("SELECT * FROM app_users 
								LEFT JOIN app_home_options 
								ON app_users.id_group = app_home_options.id_g ");
		$i=0;
while($row = mysql_fetch_array($result)){

$i++;



$options .= ' <tr id="trow_'.$i.'">
                                                    <td class="text-center">1</td>
                                                    <td><strong>'.$row{'app_username'}.'</h4> '.$row{'app_nombre'}.' '.$row{'app_apellidop'}.' '.$row{'app_apellidom'}.'</strong></td>
                                                    <td>

                                                    <div class="btn-group pull-right">  			
  		<button type="button" class="btn btn-default dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    	Action <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
  		</button>
  		<ul class="dropdown-menu">
    	<li><a href="edit_user.php?id='.$row{'id_user'}.'">Editar Usuario</a></li>
    	<li><a href="data.php?id='.$row{'id_user'}.'">Data</a></li>
    	<li><a href="#">Something else here</a></li>
    	<li role="separator" class="divider"></li>
    	<li><a href="#">Permisos</a></li>
  		</ul>
		</div>



		<div class="btn-group pull-right" style="    margin-right: 6px;">  			
  		<button type="button" class="btn btn-default dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    	'.( $row{"id_group"}>0 ?  $row["grupo"]  :  "GRUPO" ).' <span class="fa fa-users" aria-hidden="true"></span>
  		</button>
  		<ul class="dropdown-menu">';


$idgroup = $row{'id_group'};




		$resultw = mysql_query("SELECT * FROM app_home_options ");
		$e = 0;
		while($rowa = mysql_fetch_array($resultw)){
		$e++;
                       
$idge = $rowa['id_g'];
        if($idgroup==$idge){

        	$subiocon = '<i class="fa fa-check" style="#00a735"></i>';
        }else{

        	$subiocon = "";
        }

                       $options .= '<li><a href="include/home_group.php?group='.$rowa['id_g'].'&user='.$row{'id_user'}.'"> '.$subiocon.'  '.$rowa['grupo'].'</a></li>';

}

    	



    	$options .=  '<li role="separator" class="divider"></li>
  						</ul>
						</div>


						</td>

                         </tr>';


			}

			echo $options;
		
		}
		
public function show_data_user($userid, $data){
		
		$result = mysql_query("SELECT $data FROM app_users WHERE id_user = '$userid' ");
		$row = mysql_fetch_array($result);

   		
   		return $row{0};

 
			
		
		}
		


public function edit_user($id_user,$data,$field){
		
		$result = mysql_query("UPDATE app_users SET '$data'='$field' WHERE id_user = '$id_user' ");
			
		}

		
public function tarjetas($id_user){
		
		//			  

		$result = mysql_query("SELECT * FROM rel_card_user 
			INNER JOIN app_cards 
			ON rel_card_user.id_card = app_cards.id_card
			INNER JOIN app_saldos 
			ON rel_card_user.id_saldo = app_saldos.id_s			
			WHERE id_user = '$id_user' ");
		$i=0;
		while($row = mysql_fetch_array($result)){
$i++;
                   $part .=   	'<tr >
                            	<td>'.$i.'</td>
                            	<td>'.utf8_encode ($row['n_card']).'</td>
                            	<td><img src="'.$row['img_tarjeta'].'" width="50px;"></td>
                            	<td>'.$row['credit_line'].'</td>
                            	<td>'.$row['saldoalcorte'].'</td>
                            	<td>
                            		<div class="btn-group pull-right">  			
  									<button type="button" class="btn btn-default dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    								Action <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
  									</button>
  									<ul class="dropdown-menu">
    								<li><a href="app_movimientos.php?id='.$row['id_saldo'].'">Agregar movimientos</a></li>
    								<li><a href="add_card.php?id='.$id_user.'">Agregar Adicional</a></li>
    								<li role="separator" class="divider"></li>
    								<li><a href="#">Otro</a></li>
  									</ul>
									</div>
                            	</td>';
$subcard = $row['id_s'];

		$resultw = mysql_query("SELECT * FROM app_saldos WHERE id_subcard = '$subcard' ");
		$e = 0;
		while($rowa = mysql_fetch_array($resultw)){
		$e++;

                       $part .= '<tr class="success">
                            	<td>'.$e.'</td>
                            	<td>Adicional '.$e.'</td>
                            	<td></td>
                            	<td>'.$rowa['credit_line'].'</td>
                            	<td></td>
                            	<td>
                            		
                            	</td>';




$part .=                		'</tr>';


}

		};

echo $part;
			
		}

public function movimientos($transactionid){
		
		//			  

		$result = mysql_query("SELECT * FROM app_transactions WHERE id_s = '$transactionid' ");
		$i=0;
		while($row = mysql_fetch_array($result)){
$i++;


echo ' <tr id="trow_'.$i.'">
                                                    <td class="text-center">1</td>
                                                    <td><strong>'.utf8_encode ($row['transaction']).'</strong></td>
                                                    <td><span class="label label-success">'.$row['points'].'</span></td>
                                                    <td>$'.$row['cost'].'</td>
                                                    <td>'.$row['date_t'].' '.$row['horas_t'].'</td>
                                                    <td>
                                                        <button class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></button>
                                                    <button class="btn btn-danger btn-rounded btn-condensed btn-sm" onClick="delete_row(\'trow_1\');"><span class="fa fa-times"></span></button>
                                                    </td>
                                                </tr>';

/*
                   echo     	'<tr>
                            	<td>'.$i.'</td>
                            	<td>'.utf8_encode ($row['transaction']).'</td>
                            	<td>'.$row['date_t'].'</td>
                            	<td>'.$row['horas_t'].'</td>
                            	<td>'.$row['points'].'</td>
                            	<td>'.$row['cost'].'
                            	</td>
                        		</tr>';

*/
		};


			
		}



public function muestra_grupos(){			  

		$result = mysql_query("SELECT * FROM app_home_options ");
		$i=0;
		while($row = mysql_fetch_array($result)){
$i++;

   //echo utf8_encode ($row['transaction']);

   $groups .= '<div class="col-md-4">
   			<div class="widget widget-primary" style="height: 210px;">
                                <div class="widget-title">'.$row['grupo'].'</div>
                                <div class="widget-subtitle" style="text-align: left;"> </div>';



$adopts = $row['opciones'];

$arrs = explode(',',$adopts);

for ($e = 0; $e < count($arrs); $e++) {
   

		$ide = $arrs[$e];                                
       	$resulte = mysql_query("SELECT * FROM app_home WHERE id_o = '$ide'  ");
		$rowe = mysql_fetch_array($resulte); 

			$groups .= '<div class="widget-subtitle" style="text-align: left;">'.$rowe['webicon'].' - '.$rowe['Opcion'].'</div>';

		

}        
 	



 	$groups .=  '<div class="widget-controls">
                                    <a href="#" class="widget-control-left"><span class="fa fa-upload"></span></a>
                                    <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                                </div>
                            </div></div>';

       		};

echo $groups;
			
		}


public function opciones(){
		
				  

		$result = mysql_query("SELECT * FROM app_home order by id_o ");
	
		while($row = mysql_fetch_array($result)){


echo '<li class="ui-state-default"><div class="dd-handle">'.$row['webicon'].' - '.utf8_encode ($row['Opcion']).'<input type="hidden" name="option[]" value="'.$row['id_o'].'"></div></li>';

			
		}
	}


public function tabs(){
		
				  

		$result = mysql_query("SELECT * FROM app_tabs order by id_t ");
	
		while($row = mysql_fetch_array($result)){

echo 	'<div class="checkbox-material">
 		<input type="checkbox" id="anId2" name="tabs[]"  value="'.$row['id_t'].'">
 		<label for="anId2"><span class="chk-span checked" tabindex="37"></span>'.utf8_encode ($row['tab_name']).'</label>
 		</div>';

//echo '<li class="ui-state-default"><div class="dd-handle">'.utf8_encode ($row['tab_name']).'<input type="hidden" name="option[]" value="'.$row['id_t'].'"></div></li>';

			
		}
	}


public function save_user($nombre,$app,$apm,$user,$pass){

		$passnew = md5($pass);
		
		$result = mysql_query("INSERT INTO app_users (app_username, app_password, app_nombre,app_apellidop, app_apellidom) VALUES('$user','$passnew','$nombre','$app','$apm') ");
			
		return 'done';
		}		

	public function save_transaction($transaction, $date_t, $horas_t, $points, $cost, $id_s, $tipo_gasto){


		
		$result = mysql_query("INSERT INTO app_transactions (transaction, date_t, horas_t, points, cost, id_s, tipo_gasto) VALUES('$transaction','$date_t','$horas_t','$points','$cost', '$id_s', '$tipo_gasto') ");
			
		return 'done';

		}		


public function tarjetas_user_select($id_user){
		
		//			  

		$result = mysql_query("SELECT * FROM rel_card_user 
			INNER JOIN app_cards 
			ON rel_card_user.id_card = app_cards.id_card
			INNER JOIN app_saldos 
			ON rel_card_user.id_saldo = app_saldos.id_s			
			WHERE id_user = '$id_user' ");
		$i=0;
		while($row = mysql_fetch_array($result)){
$i++;
             



echo '<option value="'.$row['id_saldo'].'" >'.utf8_encode ($row['n_card']).' - '.$row['credit_line'].'</option>';                        		


		};


			
		}


public function card_user_select(){
		
		//			  

		$result = mysql_query("SELECT * FROM  app_cards ");
		$i=0;
		while($row = mysql_fetch_array($result)){
$i++;
             



echo '<option value="'.$row['id_card'].'" >'.utf8_encode ($row['n_card']).'</option>';                        		


		};


			
		}

public function saldo_tarjeta($id_saldo){
		
		//			  

		$result = mysql_query("SELECT * FROM  app_saldos WHERE id_s = '$id_saldo' ");
		$i=0;
		while($row = mysql_fetch_array($result)){
$i++;
             



echo $row['credit_line'];                        		


		};


			
		}




public function add_sub_card($credit_line,$id_subcard){

		$result = mysql_query("INSERT INTO app_saldos (credit_line,	id_subcard) VALUES(	'$credit_line',	'$id_subcard') ");
			

}
public function add_group($opts, $listname, $tabs){

		$result = mysql_query("INSERT INTO app_home_options (grupo, opciones, opt_tabs) VALUES('$listname','$opts', '$tabs') ");

}

public function set_homegroup($user,$group){

		$result = mysql_query("UPDATE app_users SET id_group = '$group' WHERE id_user = '$user' ");

}

public function add_card($id_user, $id_card, $id_subcard,$id_saldo){


		$result = mysql_query("INSERT INTO app_saldos (credit_line, id_card) VALUES ('$id_saldo', '$id_card') ");
		
		$id_saldo = mysql_insert_id();

		$resulta = mysql_query("INSERT INTO rel_card_user (id_user, id_card, id_subcard, id_saldo) VALUES ('$id_user', '$id_card', '$id_subcard', '$id_saldo') ");
			
		
}	


public function add_list($class,$id_user,$color){

		$result = mysql_query("INSERT INTO app_clasificaciones (clasificacion, user_id, color) VALUES ('$class', '$id_user' , '$color') ");
			
		
}	

public function classify($class,$trax){


		$results = mysql_query("SELECT * FROM  app_clasificaciones WHERE id_c = '$class' ");
		$row = mysql_fetch_array($results);
		$color = $row['color'];

		$result = mysql_query("UPDATE app_transactions SET clasificacion = '$class', flagged = '$color' WHERE id_t = '$trax' ");
			
		
}	

 }

?>