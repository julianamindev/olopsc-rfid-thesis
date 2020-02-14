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
              <h5 class="modal-title text-primary" id="staticBackdropLabel">Add Student</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body d-flex">
            <?php echo form_open('dashboard/add','id="dashboardform" class="w-100"');?>
                    <div class="form-group">
                            <input type="text" class="form-control" placeholder="Student No." name="student_no" required>
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
                        <div class="form-group">
                         <select class="custom-select" name="course" required>
                                <option value="">--Course--</option>
                                <?php foreach($course as $cr) { ?>
                                <option value="<?php echo $cr['id']; ?>"><?php echo $cr['name']; ?></option>
                                <?php } ?> 
                            </select>
                        </div>
                        <div class="form-group ">
                            <select class="custom-select" name="ordinal_year" required>
                                <option  value="" >--Year Level--</option>
                                <option value="1st Year">1st Year</option>
                                <option value="2nd Year">2nd Year</option>
                                <option value="3rd Year">3rd Year</option>
                                <option value="4th Year">4th Year</option>
                              </select>
                        </div>
                        <div class="form-group ">
                            <select class="custom-select" name="rfid_number" required>
                                <option   value="">--RFID Card--</option>
                                <?php foreach($rfid as $rf) { ?>
                                <option value="<?php echo $rf['rfid_number']; ?>"><?php echo $rf['rfid_number']; ?></option>
                                <?php } ?> 
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Profile Picture</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="id_image" required>
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
   
    <div class="dashboard-container mx-auto " style="margin-top:8%">
    <p><?php echo $msg; ?></p>
        <!-- <div class="d-flex mt-5">
            <button class="btn btn-primary mr-2">Active</button>
            <button class="btn btn-secondary">Inactive</button>
        </div> -->


            <div class="w-100 mt-4 p-0" style="display: flex;">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Student No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Course</th>
                        <th scope="col">Yr Level</th>
                        <!-- <th scope="col">Status</th> -->
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php foreach($student as $std) { ?>
                      <tr class="card-list">
                        <th scope="row"><?php echo $std['student_no']; ?></th>
                        <td><?php echo $std['firstname']." ".$std['middlename']." ".$std['lastname']; ?></td>
                        <td><?php echo $std['cname']; ?></td>
                        <td><?php echo $std['ordinal_year']; ?></td>
                        <!-- <td>Active</td> -->
                        <td class="mr-auto">
                            <div class="btn-group">
                                <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="assets/img/gear icon.png" alt="" style="height: 15px;width: auto;">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editStudent">Edit</a>
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteStudent">Delete</a>
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




    <?php echo $footer; ?>
