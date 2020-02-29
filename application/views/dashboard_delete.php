<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo $header; ?>

<?php include('about-us.php'); ?>
 
    <div class="dashboard-container mx-auto mb-5 mt-5">
        <div class="mx-0" style="margin-top: 200px;">
            <div class="mx-3">
                <div class="card-dashboard p-5">
                    <h3 class="text-primary mb-4">Delete Student</h3>
                    <p><?php echo $msg; ?></p>
                              <?php echo form_open('dashboard/delete','id="dashboardform" class="w-100"');?>
                              <input type="hidden" class="form-control" placeholder="Student No." name="id" value="<?php echo $form[0]['id']; ?>" >
                              <input type="hidden" class="form-control" placeholder="Student No." name="ref_rfid" value="<?php echo $form[0]['ref_rfid']; ?>" >
                              <div class="form-group">
                              <label for="fname">Student No.</label>
                                      <input type="text" class="form-control" placeholder="Student No." name="student_no"  value="<?php echo $form[0]['student_no']; ?>"  readonly>
                                  </div>
                                  <div class="form-group">
                                  <label for="fname">First Name</label>
                                      <input type="text" class="form-control" placeholder="First Name" name="firstname"  value="<?php echo $form[0]['firstname']; ?>"  readonly>
                                  </div>
                                  <div class="form-group">
                                  <label for="fname">Middle Name</label>
                                      <input type="text" class="form-control" placeholder="Middle Name" name="middlename"  value="<?php echo $form[0]['middlename']; ?>"  readonly>
                                  </div>
                                  <div class="form-group">
                                  <label for="fname">Last Name</label>
                                      <input type="text" class="form-control" placeholder="Last Name" name="lastname"  value="<?php echo $form[0]['lastname']; ?>"  readonly> 
                                  </div>
                                  <div class="form-group">
                                  <label for="fname">Course</label>
                                  <select class="custom-select" name="course" disabled>
                                          <option value="">--Course--</option>
                                          <?php foreach($course as $cr) { ?>
                                          <option value="<?php echo $cr['id']; ?>" <?php echo ($cr['id'] == $form[0]['course']) ? "selected" : ""; ?> ><?php echo $cr['name']; ?></option>
                                          <?php } ?> 
                                      </select>
                                  </div>
                                  <div class="form-group ">
                                  <label for="fname">Year Level</label>
                                      <select class="custom-select" name="ordinal_year" disabled>
                                          <option  value="" >--Year Level--</option>
                                          <option value="1st Year" <?php echo ($form[0]['ordinal_year'] == "1st Year") ? "selected" : ""; ?> >1st Year</option>
                                          <option value="2nd Year" <?php echo ($form[0]['ordinal_year'] == "2nd Year") ? "selected" : ""; ?> >2nd Year</option>
                                          <option value="3rd Year" <?php echo ($form[0]['ordinal_year'] == "3rd Year") ? "selected" : ""; ?> >3rd Year</option>
                                          <option value="4th Year" <?php echo ($form[0]['ordinal_year'] == "4th Year") ? "selected" : ""; ?> >4th Year</option>
                                        </select>
                                  </div>
                                  <button type="submit" class="btn btn-danger" name="submit">Delete</button>
                      </div>
                      </form>
                </div>
            </div>
        </div>
    


    </div>

    <?php echo $footer;?>
