<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo $header;?>


<div style="display: flex;align-items: center;height: 100vh;flex-direction:column">

        
        <?php if(!empty($error)){?>
        <div class="alert alert-primary" role="alert" style="margin-top:200px">
        <?php echo $error;?>
        </div>
        <?php }else{?>
        <div style="margin-top:200px">
        </div>

        <?php }?>
        <div class="card mt-0  mb-0 px-2 text-center col-2 text-center">
            <img src="<?php echo base_url();?>assets/img/<?php echo $student['id_image'];?>" alt="" class="mb-3 img-fluid mx-auto" style="width: 170px;">
            <section>
                <h3 class="text-primary mb-2 pb-0"><?php echo $student['firstname']." ".$student['middlename']." ".$student['lastname'];?></h3>
                <p class="m-0 p-0 text-secondary"><?php echo $student['student_no'];?></p>
                <p class="m-0 p-0 text-secondary"><?php echo $student['name'];?></p>
            </section>
            <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
        </div>

        <?php echo form_open('neutralpage/timein');?>
            <input type="text" placeholder="Tap your ID" name="ref_rfid" id="student_no_time" class=" w-100 mt-4" required style="text-align:center">
            <button type="submit" class="btn btn-primary w-100 mt-4" name="submit">Enter</button>
            <?php echo form_close();?>
</div>

<?php echo $footer;?>

<script>
function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}

showTime();


</script>