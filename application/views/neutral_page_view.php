<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo $header;?>
<nav class="fixed-top" style="background: none; border: 0px; box-shadow: none;">
        <section class="top-nav navbar navbar-expand-lg navbar-light py-2 px-5" style="background: transparent; border: 0px; box-shadow: none;">
            <div class="d-flex p-3" style="align-items: center;">
                <img src="<?php echo base_url();?>assets/img/olopsc logo.png" alt="" style="height: 70px;width: auto;">
                <p class="navbar-brand text-primary mb-0 ml-3" href="#">OLOPSC RFID System</p>
            </div>
        </section>
</nav>

<div class="neutral" style="display: flex;align-items: center;height: 100vh;flex-direction:column">

        
        <?php if(!empty($error)){?>
        <div class="alert alert-primary p-2" role="alert" style="margin-top:100px">
            <small>
            <?php echo $error;?>
            </small>
        </div>
        <?php }else{?>
        <div style="margin-top:200px">
        </div>

        <?php }?>
        <div class="card mt-0  mb-0 px-2 text-center col-2 text-center">
            <img src="<?php echo base_url();?>assets/img/<?php echo $student['id_image'];?>" alt="" class="mb-3 img-fluid mx-auto" style="width: 120px;height:120px">
            
            <!-- <img src="https://images.pexels.com/photos/3768163/pexels-photo-3768163.jpeg?cs=srgb&dl=woman-closing-her-eyes-3768163.jpg&fm=jpg" class="mb-3 img-fluid mx-auto" style="width: 120px;height:120px"> -->
           
            <section>
                <h5 class="text-primary mb-2 pb-0"><?php echo $student['firstname']." ".$student['middlename']." ".$student['lastname'];?></h5>
                <p class="m-0 p-0 text-secondary"><?php echo $student['student_no'];?></p>
                <p class="m-0 p-0 text-secondary"><?php echo $student['name'];?></p>
            </section>
        </div>

        <?php echo form_open('neutralpage/timein');?>
            <input type="text" placeholder="Tap your ID" name="ref_rfid" id="student_no_time" class="form-control w-100 mt-4" required style="text-align:center">
            <button type="submit" class="btn btn-primary w-100 mt-4" name="submit">Enter</button>
            <?php echo form_close();?>
</div>

<?php echo $footer;?>
