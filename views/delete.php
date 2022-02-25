<?php
    if (!$_SESSION['role'] == 1) 
    Redirect::to('homeuser');
    
    if(isset($_POST['id'])){
        $existVol= new VolsController();
        $existVol->deleteVol();
    }

?>