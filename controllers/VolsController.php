<?php

class VolsController{
    public function getAllVols(){
        $vols = Vol::getAll();
        return $vols;
    }

    public function getOneVol(){
        if(isset($_POST['id'])){
            $data = array('id' => $_POST['id']);
            $vol = Vol::getVol($data);
            return $vol;
        }
    }
    public function addVol(){
        if(isset($_POST['submit'])){
            $data = array(
                'origin' => $_POST['origin'],
                'destination' => $_POST['destination'],
                'dep_time' => $_POST['dep_time'],
                'return_time' => $_POST['return_time'],
                'seats' => $_POST['seats'],
                'flighttype' => $_POST['flighttype'],
            );
            $result = Vol::add($data);
            if($result === 'ok'){
                header('location:'.BASE_URL);
            }else{
                echo $result;
            }
        }
    }
    public function updateVol(){
        if(isset($_POST['submit'])){
            $data = array(
                'id' => $_POST['id'],
                'origin' => $_POST['origin'],
                'destination' => $_POST['destination'],
                'dep_time' => $_POST['dep_time'],
                'return_time' => $_POST['return_time'],
                'seats' => $_POST['seats'],
                'flighttype' => $_POST['flighttype'],
            );
            $result = Vol::update($data);
            if($result === 'ok'){
                header('location:'.BASE_URL);
            }else{
                echo $result;
            }
        }
    }
}
