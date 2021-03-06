<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo $header; ?>
<?php include('about-us.php'); ?>

    <div class="dashboard-container mx-auto mb-0">
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
                    <p><?php echo $msg; ?></p>
                    <section>
                        <h5 class="text-primary mb-2 pb-0"><?php echo $name;?></h5>
                        <p class="m-0 p-0 text-secondary"><small><?php echo $student_no;?></small></p>
                        <p class="m-0 p-0 text-secondary"><small><?php echo $course;?></small></p>
                    </section>
                </div>
            </div>
            <div class="mx-3">
                <div class="card-dashboard p-2">
                    <div id='calendar'></div>
                </div>
            </div>
            <div id="log" class="w-100 text-center">
                <div id="log-area" class="card p-0 mt-0" style="max-height: 450px;overflow: auto;" >
                    <!-- <table class='logtable' style='max-height: 450px;overflow: auto;'>
                         <tr>
                            <td>
                                <table style="width: 100%">

                                         <tr><td>Time log</td></tr>
                                        <tr><td>some time</td></tr>
                                        <tr><td>some time</td></tr>
                          <tr><td>some time</td></tr>
                           <tr><td>some time</td></tr>
                            <tr><td>some time</td></tr>
                             <tr><td>some time</td></tr>
                              <tr><td>some time</td></tr>
                               <tr><td>some time</td></tr>
                                <tr><td>some time</td></tr>
                                 <tr><td>some time</td></tr>
                                  <tr><td>some time</td></tr>

                                </table>
                            </td>
                         </tr>

                    <table> -->
                </div>
            </div>
        </div>

    </div>


    <?php echo $footer;?>
    
 <script>


document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var baseurl = '<?php echo base_url();?>';

  var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'dayGrid', 'interaction' ],  // interaction plugin must be specified
    selectable: true,  
    height: 500,
    select: function(info) {
    }, 
        dateClick: function(info) {
            getlog(info);

        },
  });

  function getlog(d){
                  //alert('Clicked on: ' + info.dateStr);
                  $.post( baseurl+"calendar/getLog", { date: d.dateStr, sid: sid })
                .done(function( data ) {
                    $('#log-area').html(data);
                });
  }

  calendar.render();
});
    
  </script>
