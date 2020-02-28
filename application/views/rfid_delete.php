<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo $header; ?>

<?php include('about-us.php'); ?>
 
    <div class="dashboard-container mx-auto mb-5 mt-5">
        <div class="mx-0" style="margin-top: 200px;">
            <div class="mx-3">
                <div class="card-dashboard p-5">
                    <h3 class="text-primary mb-4">Delete RFID Card</h3>
                    <p><?php echo $msg; ?></p>
                              <?php echo form_open('rfid/delete','id="dashboardform" class="w-100"');?>
                              <div class="form-group">
                              <label for="fname">Rfid No.</label>
                                      <input type="text" class="form-control" placeholder="Rfid No." name="rfid_number"  value="<?php echo $rfid_number; ?>"  readonly>
                                  </div>
                                 
                                  <button type="submit" class="btn btn-danger" name="submit">Delete</button>
                      </div>
                      </form>
                </div>
            </div>
        </div>
    


    </div>

    <?php echo $footer;?>
