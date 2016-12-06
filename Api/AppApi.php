<?php
/** 
 * @web http://www.DWH/
 * @author Adrian Delgado
 */

class dwhexp {
    
    protected $mysqli;
    const LOCALHOST = 'localhost';
    const USER = 'exacomco_usar';
    const PASSWORD = 'L?Ws3=lA9v0c';
    const DATABASE = 'exacomco_app';
    

    public function __construct() {           
        try{
            $this->mysqli = new mysqli(self::LOCALHOST, self::USER, self::PASSWORD, self::DATABASE);
        }catch (mysqli_sql_exception $e){
            http_response_code(500);
            exit;
        }     
    } 
    
    function response($code=200, $status="", $message="") {
    http_response_code($code);
    if( !empty($status) && !empty($message) ){
        $response = array("status" => $status ,"message"=>$message);  
        echo json_encode($response,JSON_PRETTY_PRINT);    
    }            
 }   


    /**
     * @param int $id identificador unico de registro
     * @return Array array con los registros obtenidos de la base de datos
     */
    public function cards($id=0){      
        $stmt = $this->mysqli->prepare("SELECT * FROM app_cards WHERE id_card=? ; ");
        $stmt->bind_param('s', $id);
        $stmt->execute();
        $result = $stmt->get_result();        
        $cards = $result->fetch_all(MYSQLI_ASSOC); 
        $stmt->close();
        return $cards;              
    }
    

    public function allcards(){        
        $result = $this->mysqli->query('SELECT * FROM app_cards');          
        $tarjetas = $result->fetch_all(MYSQLI_ASSOC);          
        $result->close();
        return $tarjetas; 
    }
    

    public function insert($name=''){
        $stmt = $this->mysqli->prepare("INSERT INTO app_cards(name) VALUES (?); ");
        $stmt->bind_param('s', $name);
        $r = $stmt->execute(); 
        $stmt->close();
        return $r;        
    }
    

    public function delete($id=0) {
        $stmt = $this->mysqli->prepare("DELETE FROM people WHERE id = ? ; ");
        $stmt->bind_param('s', $id);
        $r = $stmt->execute(); 
        $stmt->close();
        return $r;
    }
    

    public function update($id, $newName) {
        if($this->checkID($id)){
            $stmt = $this->mysqli->prepare("UPDATE people SET name=? WHERE id = ? ; ");
            $stmt->bind_param('ss', $newName,$id);
            $r = $stmt->execute(); 
            $stmt->close();
            return $r;    
        }
        return false;
    }
    

    public function checkID($id){
        $stmt = $this->mysqli->prepare("SELECT * FROM people WHERE ID=?");
        $stmt->bind_param("s", $id);
        if($stmt->execute()){
            $stmt->store_result();    
            if ($stmt->num_rows == 1){                
                return true;
            }
        }        
        return false;
    }
    

   

}