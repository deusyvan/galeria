<?php 
class Fotos extends model {
    
    public function saveFotos(){
      //  print_r($_FILES);
        if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])){
            $permitidos = array('image/jpeg','image/jpg','image/png');
            
            if(in_array($_FILES['arquivo']['type'], $permitidos)){
               $nome = md5(time().rand(0,999).'.jpg'); 
               
            }
        }
        
    }
    
    public function getFotos(){
        $array = array();
        
        $sql = "SELECT * FROM fotos ORDER BY id DESC";
        
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
}