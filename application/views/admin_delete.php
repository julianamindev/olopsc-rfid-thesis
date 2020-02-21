<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo $header; ?>

<?php include('about-us.php'); ?>
 
    <div class="dashboard-container mx-auto mb-5 mt-5">
        <div class="mx-0" style="margin-top: 200px;">
            <div class="mx-3">
                <div class="card-dashboard p-5">
                    <h3 class="text-primary mb-4">Admin Delete</h3>
                    <p><?php echo $msg; ?></p>
                    <?php echo form_open_multipart('admin/delete','id="accountform" class="w-100"');?>
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id;?>">
                        <div class="form-group">
                            <label for="fname">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo $username;?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="fname">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password"  name="password" value="<?php echo $password;?>" readonly>
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

                            <input type="submit" value="Delete" name="submit" class="btn btn-danger">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    


    </div>

    <?php echo $footer;?>
