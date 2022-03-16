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
                <i class="fa fa-power-off">  <?php echo $_SESSION['username'];?></i>
                </a><hr>
                
                            <div class="form-group">
                                <label class="text-white" for="fname">Please enter your passenger's Full name and his/her birthday</label>
                                <form method="post">
                                    <input type="text" hidden name="user_id">
                                    <input type="text" hidden  name="reservation_id">
                                    <!-- <label for="fullname">Fullname</label> -->
                                    <input type="text"  name="fullname" placeholder="fullname">
                                    <!-- <label for="birthday">Birthday</label> -->
                                    <input type="date" name="birthday" >
                                    <button type="submit" class="btn btn-primary mt-3" name="addpass">Add passenger to flight</button>
                                </form>

                            </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

