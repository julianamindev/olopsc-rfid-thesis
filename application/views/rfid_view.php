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
              <h5 class="modal-title text-primary" id="staticBackdropLabel">Add Rfid</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo form_open('rfid/add','id="rfidform"');?>
            <div class="modal-body d-flex">
                        <div class="form-group w-100">
                            <input type="text" class="form-control" placeholder="Card" name="rfid_number" required> 
                        </div>  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
            <?php echo form_close();?>
          </div>
        </div>
      </div>

    <!-- Add Student End -->


    <div class="dashboard-container mx-auto" style="margin-top:8%">
    <p><?php echo $msg; ?></p>
        <!-- <div class="d-flex mt-5">
            <button class="btn btn-primary mr-2">Active</button>
            <button class="btn btn-secondary">Inactive</button>
        </div> -->



            <div class="w-100 mt-4 p-0" style="display: flex;">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Rfid No.</th>
                        <th scope="col">Student No.</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php foreach($rfid as $rf) { ?>
                      <tr class="card-list">
                        <td scope="row"><?php echo $rf['rfid_number']; ?></th>
                        <td scope="row"><?php echo $rf['student_no']; ?></th>
                        <td><?php echo $rf['status'] == 0 ? "<span style='color:red'>Inactive</span>":"<span style='color:#4c9447'>Active</span>"; ?></td>
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
