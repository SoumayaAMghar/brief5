<?php

class User{
    static public function createUser($data){
        $stmt = DB::connect()->prepare('INSERT INTO vols (fullname,username,password) VALUES (:fullname,:username,:password)');
        $stmt->bindParam(':fullname',$data['fullname']);
        $stmt->bindParam(':username',$data['username']);
        $stmt->bindParam(':password',$data['password']);


        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }
}

?>