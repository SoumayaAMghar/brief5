
<?php
if (isset($_POST['find'])){
    $data = new VolsController();
    $vols = $data->findVols();
}else{
    $data = new VolsController();
    $vols = $data->getAllVols();
}
    if(isset($_POST['reserve'])){
        $data = new VolsController();
        $flights = $data->reserveFlight();
    } 
    $data = new VolsController();
    $flights = $data->getAllVols();
    
?>


<div class ="container">
    <div class="row my-5">
        <div class="col-md-6 mx-auto">
            <h1 class="display-3 text-center font-weight-bold text-danger">Booking flights</h1>
        </div>
        <div class="col-md-15 mt-5 mx-auto ">
            <?php include('./views/includes/alerts.php');?>
            <!-- <div class="card "> -->
                <div class="card-body bg-dark ">
                <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
                <i class="fas fa-home"></i>
                </a>
                <a href="<?php echo BASE_URL;?>logout" title= "Déconnexion" class="btn btn-sm btn-secondary bg-info mr-2 mb-2">
                <i class="fas fa-user mr-2">  <?php echo $_SESSION['username'];?></i>
                </a>
                <a href="<?php echo BASE_URL?>showvols" class="btn btn-warning btn-sm mb-2 mr-2 "> <!--url de base plus la page add -->
                <i class="fas fa-business-time"></i>
                </a>
                <form method="post" class="float-right mb-2 d-flex flex-row">
                    <input class="form-control" type="text" name="search" placeholder="Recherche">
                    <button class="btn btn-info btn-sm" name="find" type="submit"><i class="fa fa-search"></i></button>
                </form>
                <table class="table table-striped table-dark table-responsive">
                        <thead>
                            <tr>
                            <th scope="col">Origin</th>
                            <th scope="col">Destination</th>
                            <th scope="col">Dep_time</th>
                            <th scope="col">Return_time</th>
                            <th scope="col">Seats</th>
                            <th scope="col">Flighttype</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($vols as $vol):?>
                                <tr>
                                    <th scope="row" hidden><?php echo $vol['id']; ?></th>
                                    <th scope="row"><?php echo $vol['origin']; ?></th>
                                    <td><?php echo $vol['destination']; ?></td>
                                    <td><?php echo $vol['dep_time']; ?></td>
                                    <td><?php echo $vol['return_time']; ?></td>
                                    <td><?php echo $vol['seats']; ?></td>
                                    <td><?php echo $vol['flighttype'] 
                                        ?
                                        '<span class="badge badge-warning">One way</span>'
                                        :
                                        '<span class="badge badge-info">Round trip</span>';
                                    ; ?></td>
                                    <td class="d-flex flex-row">
                                    <form method="POST"  action="" class="mr-3">
                                        <input type="text" hidden name="id" value="<?php echo $vol['id']; ?>">
                                        <input type="text" hidden name="origin" value="<?php echo $vol['origin']; ?>">
                                        <input type="text" hidden name="destination" value="<?php echo $vol['destination']; ?>">
                                        <input type="text" hidden name="dep_time" value="<?php echo $vol['dep_time']; ?>">
                                        <input type="text" hidden name="return_time" value="<?php echo $vol['return_time']; ?>">
                                        <input type="text" hidden name="flighttype" value="<?php echo $vol['flighttype']; ?>">
                                        <button class="btn btn-sm btn-success " type="submit" name="reserve" >Book</button>
                                    </form>

                                                                                
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>   
                </div>
            </div>
        </div>
    </div>
</div>