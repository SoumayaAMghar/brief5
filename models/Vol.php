<?php
// error_reporting(0);
class Vol{
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM vols');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    static public function getVol($data){
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM vols WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            $vol = $stmt->fetch(PDO::FETCH_OBJ);
            return $vol;
        }catch(PDOException $ex){
            echo 'error'.$ex->getMessage();
        }
    }

    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO vols (origin,destination,dep_time,return_time,seats,flighttype) VALUES (:origin,:destination,:dep_time,:return_time,:seats,:flighttype)');
        $stmt->bindParam(':origin',$data['origin']);
        $stmt->bindParam(':destination',$data['destination']);
        $stmt->bindParam(':dep_time',$data['dep_time']);
        $stmt->bindParam(':return_time',$data['return_time']);
        $stmt->bindParam(':seats',$data['seats']);
        $stmt->bindParam(':flighttype',$data['flighttype']);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }
    static public function update($data){
        $stmt = DB::connect()->prepare('UPDATE vols SET origin =:origin,destination =:destination,dep_time = :dep_time,return_time =:return_time,seats = :seats,flighttype = :flighttype WHERE id =:id');
        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':origin',$data['origin']);
        $stmt->bindParam(':destination',$data['destination']);
        $stmt->bindParam(':dep_time',$data['dep_time']);
        $stmt->bindParam(':return_time',$data['return_time']);
        $stmt->bindParam(':seats',$data['seats']);
        $stmt->bindParam(':flighttype',$data['flighttype']);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }
}




// static public function add($data){
//     $stmt = DB::connect()->prepare('INSERT INTO vols (origin,destination,dep_time,return_time,seats,flighttype) VALUES (:origin,:destination,:dep_time,:return_time,:seats,:flighttype)');
//     $stmt->bindParam(':origin',$data['origin']);
//     $stmt->bindParam(':destination',$data['destination']);
//     $stmt->bindParam(':dep_time',$data['dep_time']);
//     $stmt->bindParam(':return_time',$data['return_time']);
//     $stmt->bindParam(':seats',$data['seats']);
//     $stmt->bindParam(':flighttype',$data['flighttype']);
    
//     if($stmt->execute()){
//         return 'ok';
//     }else{
//         return 'error';
//     }
//     $stmt->close();
//     $stmt = null;