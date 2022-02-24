<?php
    if(isset($_POST['id'])){
        $existVol= new VolsController();
        $vol= $existVol->getOneVol();
    }else{
        Redirect::to('homeAdmin');
    }
    if(isset($_POST['submit'])){
        $existVol= new VolsController();
        $existVol->updateVol();
    }
?>

<div class ="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Modifier un vol</div>
                <div class="card-body bg-light table-responsive">
                <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
                <i class="fas fa-home"></i>
                </a>
                <form method="post">
                    <div class="form-group">
                        <label for="origin">Origin*</label>
                        <input type="text" name="origin" class="form-control" placeholder="origin" value="<?php echo $vol->origin; ?>">
                    </div>
                    <div class="form-group">
                        <label for="destination">Destination*</label>
                        <input type="text" name="destination" class="form-control" placeholder="destination" value="<?php echo $vol->destination; ?>">
                        <input type="hidden" name="id" value="<?php echo $vol->id;?>">                  
                    </div>
                    <div class="form-group">
                        <label for="dep_time">Dep_time*</label>
                        <input type="datetime-local" name="dep_time" class="form-control" value="<?php echo $vol->dep_time; ?>">
                    </div>
                    <div class="form-group">
                        <label for="return_time">Return_time*</label>
                        <input type="datetime-local" name="return_time" class="form-control" value="<?php echo $vol->return_time; ?>">
                    </div>
                    <div class="form-group">
                        <label for="seats">Seats*</label>
                        <input type="text" name="seats" class="form-control" placeholder="seats" value="<?php echo $vol->seats; ?>">
                    </div>
                    <div class="form-group">
                        <select name="flighttype" class="form-control">
                            <option value="1" <?php echo $vol->flighttype ? 'selected' : ''; ?>>One Way</option>
                            <option value="0" <?php echo !$vol->flighttype ? 'selected' : ''; ?>>Round Trip</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="submit">Valider</button>
                    </div>
                </form>  
                </div>
            </div>
        </div>
    </div>
</div>