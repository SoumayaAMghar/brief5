<?php
if (isset($_POST['submit'])){
    $loginUser = new UsersController();
    $loginUser->auth();
} // print_r($vols);
?>

<div class ="container">
    <div class="row my-5">
        <div class="col-md-6 mx-auto">
            <?php include('./views/includes/alerts.php');?>
            <div class="card ">
                <div class="card-header">
                    <h3 class="text-center">Inscription</h3>
                </div>
                <div class="card-body bg-dark ">
                    <form method="post" class="mr-1">   
                        <div class="form-group">
                            <input type="text" name="username" placeholder="Pseudo" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Mot de passe" class="form-control">
                        </div>
                        <button name="submit" class="btn btn-sm btn-primary">Connexion</i></button>
                    </form>
                    <div class="card-footer">
                        <a href="<?php echo BASE_URL?>register" class="btn btn-link">Inscription</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>