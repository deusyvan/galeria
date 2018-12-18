<?php 
class Fotos extends model {
    
    public function saveFotos(){
        
        print_r($_FILES);
        
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