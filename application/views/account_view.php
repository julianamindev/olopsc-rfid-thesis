<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo $header; ?>

<?php include('about-us.php'); ?>
    <?php include('nav.php'); ?>
 
    <div class="dashboard-container mx-auto mb-5 mt-5">
        <div class="row-grid mx-0" style="margin-top: 200px;">
            <div class="">
                <div class="card-dashboard  px-2 text-center">
                    <img src="assets/img/pexels-photo-220453.png" alt="" class="mb-3 mt-3" style="height: 80px;">
                    <section>
                        <h5 class="text-primary mb-2 pb-0"><?php echo $firstname." ".$middlename." ".$lastname;?></h5>
                        <p class="m-0 p-0 text-secondary"><small><?php echo $ref_rfid;?></small></p>
                        <p class="m-0 p-0 text-secondary"><small><?php echo $isadmin == "1" ? "Administrator" : "Student";?></small></p>
                    </section>
                </div>
            </div>
            <div class="mx-3">
                <div class="card-dashboard p-5">
                    <h3 class="text-primary mb-4">General Account Settings</h3>
                    <form>
                        <div class="form-group">
                            <label for="fname">Username</label>
                            <input type="text" class="form-control" id="fname" placeholder="First Name" value="<?php echo $username;?>">
                        </div>
                        <div class="form-group">
                            <label for="fname">Password</label>
                            <input type="password" class="form-control" id="fname" placeholder="First Name" value="<?php echo $password;?>">
                        </div>

                        <hr>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="First Name" value="<?php echo $firstname;?>">
                            </div>
                            <div class="form-group">
                                <label for="mname">Middle Name</label>
                                <input type="text" class="form-control" id="mname" placeholder="Middle Name" value="<?php echo $middlename;?>">
                            </div>
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lname" placeholder="First Name" value="<?php echo $lastname;?>">
                            </div>
                            <div class="form-group">
                                <label for="fname">Email</label>
                                <input type="text" class="form-control" id="fname" placeholder="First Name" value="<?php echo $email;?>">
                            </div>
                            <div class="form-group  mb-5">
                                <label for="exampleFormControlFile1">Profile Picture</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <input type="submit" value="Save Changes" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    


    </div>

    <?php echo $footer;?>
