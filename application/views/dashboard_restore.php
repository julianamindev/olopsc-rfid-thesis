<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo $header; ?>

<?php include('about-us.php'); ?>
 
    <div class="dashboard-container mx-auto mb-5 mt-5">
        <div class="mx-0" style="margin-top: 200px;">
            <div class="mx-3">
                <div class="card-dashboard p-5">
                    <h3 class="text-primary mb-4">Student Password Restore</h3>
                    <p><?php echo $msg; ?></p>
                              <?php echo form_open('dashboard/restore','id="dashboardform" class="w-100"');?>
                              <input type="hidden" class="form-control"  name="id"  value="<?php echo $form[0]['id']; ?>"  >
                              <input type="hidden" class="form-control"  name="password"  value="<?php echo $form[0]['password']; ?>"  >
                              <input type="hidden" class="form-control"  name="student_no"  value="<?php echo $form[0]['student_no']; ?>"  >
                              <p>You are about to restore this student's password. Please confirm.</p>
                              <div class="form-group">
                              <label for="fname">Password</label>
                                      <input type="password" class="form-control" placeholder="Rfid No." name="rfid_number"  value="*************"  readonly required>
                                  </div>
                                 
                                  <button type="submit" class="btn btn-danger" name="submit">Confirm</button>
                      </div>
                      </form>
                </div>
            </div>
        </div>
    


    </div>

    <?php echo $footer;?>
