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
        <div class="row-grid mx-0" style="margin-top: 150px;">
            <div class="">
                <div class="card-dashboard  px-2 text-center">
                    <img src="assets/img/pexels-photo-220453.png" alt="" class="mb-3 mt-3" style="height: 80px;">
                    <section>
                        <h5 class="text-primary mb-2 pb-0">Patrick John</h5>
                        <p class="m-0 p-0 text-secondary"><small>143198377</small></p>
                        <p class="m-0 p-0 text-secondary"><small>COMPUTER SCIENCE</small></p>
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
                <div class="d-flex">
                    <ul class="list-group rounded-0 text-center w-100">
                        <li class="list-group-item disabled p-2 rounded-0" aria-disabled="true"><small><strong>Time In</strong></small></li>
                        <li class="list-group-item rounded-0"><small>7:30am</small></li>
                        <li class="list-group-item rounded-0 bg-red"><small>7:30am</small></li>
                        </ul>
                    <ul class="list-group rounded-0 text-center w-100 ">
                        <li class="list-group-item disabled p-2 rounded-0" aria-disabled="true"><small><strong>Time Out</strong></small></li>
                        <li class="list-group-item rounded-0"><small>4:30pm</small></li>
                        <li class="list-group-item rounded-0 bg-red"><small>5:30pm</small></li>
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
    plugins: [ 'dayGrid' ],
    eventClick: function(info) {
      var eventObj = info.event;
        $('#log').show()
    },
    defaultDate: '2020-02-15',
    events: [
      {
        title: 'Absent',
        start: '2020-02-12'
      },
      {
        title: 'Absent',
        start: '2020-02-13'
      },
      {
        title: 'Absent',
        start: '2020-02-14'
      },
      {
        title: 'Present',
        start: '2020-02-15'
      }
    ]
  });

  calendar.render();
});
    
  </script>
