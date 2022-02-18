<?php
    if(isset($_POST['id'])){
        $existVol= new VolsController();
        $existVol->deleteVol();
    }

?>