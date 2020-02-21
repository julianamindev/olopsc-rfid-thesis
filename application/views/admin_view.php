<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo $header; ?>
      
<?php include('about-us.php'); ?>    
    
    <!-- Add student Modal -->

    <div class="modal fade" id="addStudent" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-primary" id="staticBackdropLabel">Add Administrator</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body d-flex">
            <?php echo form_open_multipart('admin/add','id="adminform" class="w-100"');?>
                    <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name" name="firstname" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Middle Name" name="middlename" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name" name="lastname" required>
                        </div>


                 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
            </form>
          </div>
        </div>
      </div>

    <!-- Add Student End -->




    <div class="dashboard-container mx-auto" style="margin-top:8%"> 
    <p><?php echo $msg; ?></p>
            <div class="w-100" style="display: flex; padding-top: 80px;">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Fullname</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($admin as $adm) { ?>

                            <tr class="card-list">
                            <th scope="row"><?php echo $adm['id']; ?></th>
                            <td><?php echo $adm['username']; ?></td>
                            <td><?php echo $adm['firstname']." ".$adm['middlename']." ".$adm['lastname']; ?></td>
                            <td class="mr-auto">
                            <div class="btn-group">
                                <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="<?php echo base_url();?>assets/img/gear icon.png" alt="" style="height: 15px;width: auto;">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="<?php echo base_url();?>admin/edit/<?php echo $adm['id'];?>" >Edit</a>
                                  <a class="dropdown-item" href="<?php echo base_url();?>admin/delete/<?php echo $adm['id'];?>">Delete</a>
                                </div>
                              </div>
                        </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                  </table>
            </div>
    </div>

    <div class="addStudent" style="position: fixed;bottom:0;right: 0; margin-bottom:50px;margin-right:50px;">
        <button class="add-btn" data-toggle="modal" data-target="#addStudent">
            <img  class="plus-icon" src="<?php echo base_url();?>assets/img/plus-icon.png" alt="">
        </button>
    </div>

    <?php echo $footer;?>
