<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$sid = isset($sid) ? $sid : '';

?>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="<?php echo base_url();?>assets/styles/core/main.js"></script>
<script src="<?php echo base_url();?>assets/styles/daygrid/main.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.2.0/main.js"></script>
<script type="text/javascript">
var sid = '<?php echo $sid;?>';

$(document).ready(function() {

$("#btn-account").click(function(event){

  var np = $("#new_password").val();
  var cp = $("#confirm_password").val();


  if((cp != "") || (np != "")){

    if((np != cp) || (cp != np) ){

        alert("Password mismatch");
        $("#new_password").val("");
        $("#confirm_password").val("");
        return false;

    }else{

        $("#accountform").submit();

    }

  }

})


$('.input-search').keydown(function(event) {
  // enter has keyCode = 13, change it if you want to use another button
  if (event.keyCode == 13) {
    this.form.submit();
    return false;
  }
});
});

$('#student_no_time').focus();
$('#student_no_time').focusout(function(){
         $(this).focus();
     });


</script>

</body>
</html>