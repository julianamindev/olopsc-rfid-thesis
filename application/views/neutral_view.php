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
                                     
        <div class="row mx-0" style="margin-top: 170px;">
        <h3 class="col-12 text-primary mb-4">Log</h3>   
            <div class="col-2">
                <div class="card-dashboard  px-2 text-center">
                    <img src="assets/img/pexels-photo-220453.png" alt="" class="mb-3 mt-3" style="height: 80px;">
                    <section>
                        <h5 class="text-primary mb-2 pb-0">Patrick John</h5>
                        <p class="m-0 p-0 text-secondary"><small>143198377</small></p>
                        <p class="m-0 p-0 text-secondary"><small>COMPUTER SCIENCE</small></p>
                    </section>
                </div>
            </div>
            <div class="col-2">
                <div class="card-dashboard  px-2 text-center">
                    <img src="assets/img/pexels-photo-220453.png" alt="" class="mb-3 mt-3" style="height: 80px;">
                    <section>
                        <h5 class="text-primary mb-2 pb-0">Patrick John</h5>
                        <p class="m-0 p-0 text-secondary"><small>143198377</small></p>
                        <p class="m-0 p-0 text-secondary"><small>COMPUTER SCIENCE</small></p>
                    </section>
                </div>
            </div>
            <div class="col-2">
                <div class="card-dashboard  px-2 text-center">
                    <img src="assets/img/pexels-photo-220453.png" alt="" class="mb-3 mt-3" style="height: 80px;">
                    <section>
                        <h5 class="text-primary mb-2 pb-0">Patrick John</h5>
                        <p class="m-0 p-0 text-secondary"><small>143198377</small></p>
                        <p class="m-0 p-0 text-secondary"><small>COMPUTER SCIENCE</small></p>
                    </section>
                </div>
            </div>
            <div class="col-2">
                <div class="card-dashboard  px-2 text-center">
                    <img src="assets/img/pexels-photo-220453.png" alt="" class="mb-3 mt-3" style="height: 80px;">
                    <section>
                        <h5 class="text-primary mb-2 pb-0">Patrick John</h5>
                        <p class="m-0 p-0 text-secondary"><small>143198377</small></p>
                        <p class="m-0 p-0 text-secondary"><small>COMPUTER SCIENCE</small></p>
                    </section>
                </div>
            </div>
        </div>
        
    </div>




    <?php echo $footer; ?>
