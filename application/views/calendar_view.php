<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo $header; ?>
<?php include('about-us.php'); ?>

    <div class="dashboard-container mx-auto mb-5">
        <!-- <div class=" search-bar my-5 ">
            <form>
                <div class="input-group">
                    <input type="number" class="form-control col-3" placeholder="Search Student ID">
                </div>
            </form>
        </div> -->
        <div class="row-grid mx-0" style="margin-top: 170px;">
            <div class="">
                <div class="card-dashboard  px-2 text-center">
                    <img src="<?php echo base_url();?>assets/img/<?php echo $id_image;?>" alt="" class="mb-3 mt-3" style="height: 80px;">
                    <section>
                        <h5 class="text-primary mb-2 pb-0"><?php echo $name;?></h5>
                        <p class="m-0 p-0 text-secondary"><small><?php echo $student_no;?></small></p>
                        <p class="m-0 p-0 text-secondary"><small><?php echo $course;?></small></p>
                    </section>
                </div>
            </div>
            <div class="mx-3">
                <div class="card-dashboard p-5">
                    <div id='calendar'></div>
                </div>
            </div>
            <div id="log" class="w-100 text-center">
                <h5 class="mt-3">TIME LOG</h5>
                <div class="d-flex" style="height: 510px;overflow-x: hidden;overflow-y:auto">
                    <ul class="list-group rounded-0 text-center w-100">
                        <li class="list-group-item disabled p-2 rounded-0" aria-disabled="true"><small><strong>Time In</strong></small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0 bg-red"><small>7:30am</small></li>
                    </ul>
                    <ul class="list-group rounded-0 text-center w-100 ">
                        <li class="list-group-item disabled p-2 rounded-0" aria-disabled="true"><small><strong>Time Out</strong></small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0 bg-red"><small>7:30am</small></li>
                    </ul>
                    
                </div>

            </div>
        </div>

    </div>


    <?php echo $footer;?>
    
 <script>
  $('#log').hide()
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'dayGrid', 'interaction' ],  // interaction plugin must be specified
        
        dateClick: function(info) {
            alert('Clicked on: ' + info.dateStr);
            ///alert('Current view: ' + info.view.type);
            // change the day's background color just for fun
            //info.dayEl.style.backgroundColor = 'red';
        },
  });

  calendar.render();
});
    
  </script>
