<?php
        
        if (isset($_POST['addpass'])) {
            $addPassenger = new VolsController();
            $addPassenger->addPassenger();
        }
    
?>


<div class ="container">
    <div class="row my-5">
        <div class="col-md-10 mx-auto">
            <h1 class="display-3 text-center font-weight-bold text-danger">Your Reservations</h1>
        </div>
        <div class="col-md-15 mt-15 mx-auto w-50">
            <?php include('./views/includes/alerts.php');?>
            <!-- <div class="card "> -->
                <div class="card-body bg-dark ">
                <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
                <i class="fas fa-home"></i>
                </a>
                <a href="<?php echo BASE_URL;?>logout" title= "Déconnexion" class="btn btn-sm btn-secondary bg-info mr-2 mb-2 float-right mb-2 d-flex flex-row">
                <i class="fas fa-user mr-2">  <?php echo $_SESSION['username'];?></i>
                </a><hr>
                
                            <div class="form-group">
                                <label class="text-white" for="fname">Please enter your passenger's Full name</label>
                                <form method="post" id="pass_form">
                                    <input type="text" hidden value="<?php echo $_SESSION['id'] ?>" name="user_id">
                                    <input type="text" hidden value="<?php echo $_POST['id'] ?>" name="res_id">
                                </form>
                            </div>
                        <div class="form-group">
                           <button form="pass_form" type="submit" class="btn btn-primary mt-3" name="addpass">Add passenger to flight</button>
                          <button type="submit" class="btn btn-primary mt-3" id="pluspass" name="add1pass"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

