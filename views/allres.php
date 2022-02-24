<?php


if($_SESSION['role'] == 0){
    Redirect::to(BASE_URL); }
        
    if(isset($_POST['reserve'])){
        $data = new VolsController();
        $vols = $data->reserveFlight();
    }else{
        $data = new VolsController();
        $vols = $data->getAllreservations();
    }
?>


<div class ="container">
    <div class="row my-5">
        <div class="col-md-10 mx-auto">
            <h1 class="display-3 text-center font-weight-bold text-danger">All Reservations</h1>
        </div>
        <div class="col-md-15 mt-5 mx-auto ">
            <?php include('./views/includes/alerts.php');?>
            <!-- <div class="card "> -->
                <div class="card-body bg-dark ">
                <a href="<?php echo BASE_URL;?>homeadmin" class="btn btn-sm btn-secondary mr-2 mb-2">
                <i class="fas fa-home"></i>
                </a>
                <a href="<?php echo BASE_URL;?>logout" title= "Déconnexion" class="btn btn-sm btn-secondary bg-info mr-2 mb-2 float-right mb-2 d-flex flex-row">
                <i class="fas fa-user mr-2">  <?php echo $_SESSION['username'];?></i>
                </a>
                <table class="table table-striped table-hover table-dark table-responsive">
                        <thead>
                            <tr>
                            <th scope="col">Reservation ID</th>
                            <th scope="col">Origin</th>
                            <th scope="col">Destination</th>
                            <th scope="col">Dep_time</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Flight ID</th>
                            <th scope="col">Flighttype</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($vols as $vol):?>
                                    <td><?php echo $vol['id']; ?></td>
                                    <th><?php echo $vol['origin']; ?></th>
                                    <td><?php echo $vol['destination']; ?></td>
                                    <td><?php echo $vol['dep_time']; ?></td>
                                    <td><?php echo $vol['fullname']; ?></td>
                                    <td><?php echo $vol['id_vol']; ?></td>
                                    <td><?php echo $vol['flight_type']
                                        ?
                                        '<span class="badge badge-warning">One way</span>'
                                        :
                                        '<span class="badge badge-info">Round trip</span>';
                                    ; ?></td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>   
                </div>
            </div>
        </div>
    </div>
</div>

