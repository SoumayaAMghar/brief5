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
    public function findVols(){
        if(isset($_POST['search'])){
            $data = array('search' => $_POST['search']);
            
        }
        $vols = Vol::searchVol($data);
        return $vols;
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
                Session::set('success','Vol Ajouté');
                Redirect::to('home');
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
                Session::set('success','Vol Modifié');
                Redirect::to('home');
            }else{
                echo $result;
            }
        }
    }
    public function deleteVol(){
        if(isset($_POST['id'])){
            $data['id'] = $_POST['id'];
            $result = Vol::delete($data);
            if($result === 'ok'){
                Session::set('success','Vol Supprimé');
                Redirect::to('home');
            }else{
                echo $result;
            }
        }
    }
}
