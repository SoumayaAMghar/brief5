<?php
require_once './autoload.php';
require_once './views/includes/header.php';
// require_once './views/includes/footer.php';
require_once './views/includes/alerts.php';





$homeuser = new HomeController();

$pages = ['homeadmin','homeuser','add','update','delete','login','register','logout','showvols','deleterev','allres','addpassenger'];
// print_r($_SESSION);
if(isset($_SESSION['login']) && $_SESSION['login'] === true)
{
    if(isset($_GET['page'])){
        //in_array — Indique si une valeur appartient à un tableau
        if(in_array($_GET['page'],$pages)){
            $page = $_GET['page'];
            $homeuser->index($page);
        }else{
            include('views/includes/404.php');
        }
    }else{
        $homeuser->index('homeuser');
    }

    // require_once './views/includes/footer.php';
    
}
else if(isset($_GET['page']) && $_GET['page'] === 'register'){
    $homeuser->index('register');
}else{
    $homeuser->index('login');
}
        
    