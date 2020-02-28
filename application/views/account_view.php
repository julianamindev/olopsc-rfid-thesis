<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo $header; ?>

<?php include('about-us.php'); ?>
 
    <div class="dashboard-container mx-auto mb-5 mt-5">
        <div class="row-grid mx-0" style="margin-top: 200px;">
            <div class="">
                <div class="card-dashboard  px-2 text-center">
                    <img src="<?php echo base_url();?>assets/img/<?php echo $id_image;?>" alt="" class="mb-3 mt-3" style="height: 80px;">
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
                    <p><?php echo $msg; ?></p>
                    <?php echo form_open_multipart('account/update','id="accountform" class="w-100"');?>
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id;?>">
                        <div class="form-group">
                            <label for="fname">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo $username;?>" <?php echo $isadmin == 1 ? "" : "readonly" ?>>
                        </div>
                        <div class="form-group">
                            <label for="fname">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password"  name="password" value="<?php echo $password;?>" readonly>
                        </div>
                     
                            <div class="form-group">
                                <label for="fname">New password</label>
                                <input type="password" class="form-control" id="new_password" placeholder="New Password" name="new_password" >
                            </div>
                        
                            <div class="form-group">
                                <label for="fname">Confirm New password</label>
                                <input type="password" class="form-control" id="confirm_password" placeholder="Confirm New Password" name="confirm_password" >
                            </div>
                        <hr>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="firstname" placeholder="First Name"  name="firstname" value="<?php echo $firstname;?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="mname">Middle Name</label>
                                <input type="text" class="form-control" id="middlename" placeholder="Middle Name"  name="middlename" value="<?php echo $middlename;?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lastname" placeholder="First Name" name="lastname" value="<?php echo $lastname;?>" readonly>
                            </div>
                            <!--div class="form-group">
                                <label for="fname">Email</label>
                                <input type="text" class="form-control" id="fname" placeholder="First Name" value="<?php echo $email;?>">
                            </div-->
                            <?php if($isadmin > 0){?>
                            <div class="form-group  mb-5">
                                <label for="exampleFormControlFile1">Profile Picture</label>
                                <input type="file" class="form-control-file" id="id_image" name="id_image">
                            </div>
                            <?php }?>
                            <input type="submit" value="Save Changes" name="submit" id="btn-account" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    


    </div>

    <?php echo $footer;?>
