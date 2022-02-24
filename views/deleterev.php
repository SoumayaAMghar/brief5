<?php 
	if(isset($_POST['id'])){
		$deleteRev = new VolsController();
		$deleteRev->deleteRev();
        Redirect::to("showvols");
	}


?>