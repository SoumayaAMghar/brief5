<?php
class Vol{
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM vols');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
}

?>