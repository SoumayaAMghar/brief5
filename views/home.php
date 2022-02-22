<?php
if (isset($_POST['find'])){
    $data = new VolsController();
    $vols = $data->findols();
}else{
    $data = new VolsController();
    $vols = $data->getAllVols();
}
    // print_r($vols);
?>

<div class ="container">
    <div class="row my-5">
        <div class="col-md-15 mx-auto">
            <?php include('./views/includes/alerts.php');?>
            <!-- <div class="card "> -->
                <div class="card-body bg-dark ">
                <a href="<?php echo BASE_URL;?>add" class="btn btn-sm btn-primary mr-2 mb-2">
                <i class="fas fa-plus"></i>
                </a>
                <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
                <i class="fas fa-home"></i>
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($vols as $vol):?>
                                <tr>
                                    <th scope="row"><?php echo $vol['origin']; ?></th>
                                    <td><?php echo $vol['destination']; ?></td>
                                    <td><?php echo $vol['dep_time']; ?></td>
                                    <td><?php echo $vol['return_time']; ?></td>
                                    <td><?php echo $vol['seats']; ?></td>
                                    <td><?php echo $vol['flighttype']
                                        ?
                                        '<span class="badge badge-success">One way</span>'
                                        :
                                        '<span class="badge badge-info">Round trip</span>';
                                    ; ?></td>
                                    <td class="d-flex flex-row">
                                        <form method="post" class="mr-1" action="update">
                                            <input type="hidden" name="id" value="<?php echo $vol['id'];?>">
                                            <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                        </form>
                                        <form method="post" class="mr-1" action="delete">
                                            <input type="hidden" name="id" value="<?php echo $vol['id'];?>">
                                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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