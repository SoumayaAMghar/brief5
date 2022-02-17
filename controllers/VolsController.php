<?php

class VolsController{
    public function getAllVols(){
        $vols = Vol::getAll();
        return $vols;
    }
}


?>