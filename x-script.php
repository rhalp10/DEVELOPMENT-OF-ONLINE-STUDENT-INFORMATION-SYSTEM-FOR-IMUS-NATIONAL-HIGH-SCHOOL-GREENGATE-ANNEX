
<script src="assets/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="assets/js/jquery-3.3.1.min.js" ></script>
      <script>window.jQuery || document.write('<script src="assets/js/jquery-slim.min.js"><\/script>')</script><script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
      <script src="assets/alertifyjs/alertify.min.js"></script>

    <script src="assets/OwlCarousel/dist/owl.carousel.js"></script>
<script>
						    // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  
  $('html,body').animate({ scrollTop: 0 }, 'slow');
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera

}

$(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: false
                  },
                  1000: {
                    items: 2,
                    nav: true,
                    loop: false,
                    margin: 20
                  }
                }
              })
            })
</script>
<?php if ($page == "map")  { ?>
<script>
  function initMap() {
        var myLatLng = {lat: 14.3737069, lng: 120.9240774};

        var map = new google.maps.Map(document.getElementById('googleMap'), {
          zoom: 15,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'general tomas mascardo national high school'
        });
      }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfPKc1jcQM-i3bxv2ipJ6u9zJ1Jujh6yo&callback=initMap"></script>
<?php } ?>
<?php if ($page == "news")  { ?>
<script type="text/javascript" src="assets/datatables/datatables.min.js"></script>
<script>
  $(document).ready(function() {
             
            var dataTable = $('#news_data').DataTable({
            "processing":true,
            "serverSide":true,
            "order":[],
            "ajax":{
              url:"dashboard/datatable/news/fetch.php",
              type:"POST"
            },
            "columnDefs":[
              {
                "targets":[0],
                "orderable":false,
              },
            ],

          });
  });
</script>
<?php } ?>
<?php if ($page == "admission")  { ?>
<script type="text/javascript" src="assets/SmartWizard/dist/js/jquery.smartWizard.min.js"></script>
<script type="text/javascript">
      function getAge(DOB) {
          var today = new Date();
          var birthDate = new Date(DOB);
          var age = today.getFullYear() - birthDate.getFullYear();
          var m = today.getMonth() - birthDate.getMonth();
          if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
              age = age - 1;
          }

          return age;
      }
      function age(){
        var adm_bod = $('#adm_bod').val();
        var age = getAge(adm_bod);
        $('#adm_bod_age').val(age);
      }

      function calculateBmi() {
      var weight = document.step3.adm_weight.value;
      var height = document.step3.adm_height.value;
      if(weight > 0 && height > 0)
      { 
        var finalBmi = weight/(height/100*height/100)
        var finalBmi = finalBmi.toFixed(2)

        document.step3.adm_bmis.value = finalBmi;
        
        $('#adm_bmistat').val(finalBmi);
          if(finalBmi < 18.5){
            $('#adm_bmis').val("That you are too thin.");
          }
          if(finalBmi > 18.5 && finalBmi < 25){
            $('#adm_bmis').val("That you are healthy.");
          }
          if(finalBmi > 25){
            $('#adm_bmis').val("That you have overweight.");
          }
      }
      else{
        // alert("Please Fill in everything correctly")
      }
      }
    // var age_input = $('#age_input').val();
    // $('#calculated_age').value(getAge(age_input));

        $(document).ready(function(){

            // $(document).on('change', '#adm_fname', function(){
            //   alert('change');
            
            
            // });

            // Step show event
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
               //alert("You are on step "+stepNumber+" now");
               if(stepPosition === 'first'){
                   $("#prev-btn").addClass('disabled');
                   $("#finish-btn").hide();
               }else if(stepPosition === 'final'){
                   $("#next-btn").hide();
                   $("#finish-btn").show();
               }else{
                   $("#finish-btn").hide();
                   $("#next-btn").show();
                   $("#prev-btn").removeClass('disabled');
               }
            });

            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Finish')
                                             .addClass('btn btn-info')
                                             .on('click', function(){ alert('Finish Clicked'); });
            var btnCancel = $('<button></button>').text('Cancel')
                                             .addClass('btn btn-danger')
                                             .on('click', function(){ $('#smartwizard').smartWizard("reset"); });

            // Smart Wizard 1
            $('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'arrows',
                    transitionEffect:'fade',
                    showStepURLhash: false,
                    toolbarSettings: {toolbarPosition: 'none',
                                      toolbarExtraButtons: [btnFinish, btnCancel]
                                    }
            });

            

            // External Button Events
             var page = 1;

            $("#prev-btn").on("click", function() {
                // Navigate previous
                $('#smartwizard').smartWizard("prev");
                page--;
                console.log(page);
                return true;
            });

            function check_input(input,msg){
              if (
                  input == null || input == ""){
                  alertify.alert(msg).setHeader('Admission Form Error');
                  return false;
                }

            }
            $("#next-btn").on("click", function() {
                // Navigate next
               
                var adm_gradelevel = $('#adm_gradelevel').val();
                var adm_fname = $('#adm_fname').val();
                var adm_mname = $('#adm_mname').val();
                var adm_lname = $('#adm_lname').val();
                var adm_email = $('#adm_email').val();
                var adm_bod = $('#adm_bod').val();
                var adm_sex = $('#adm_sex').val();
                var adm_address = $('#adm_address').val();
                var adm_pg_name = $('#adm_pg_name').val();
                var adm_pg_contact = $('#adm_pg_contact').val();
                var adm_height = $('#adm_height').val();
                var adm_weight = $('#adm_weight').val();
                var vrfy;
                if (page == 1){
                    if (check_input(adm_fname,"First Name Is Required") == false){
                      
                       vrfy = false;
                    }
                    else if (check_input(adm_mname,"Middle Name Is Required") == false){
                       vrfy = false;
                    }
                    else if (check_input(adm_lname,"Last Name Is Required") == false){
                       vrfy = false;
                    }
                    else if (check_input(adm_email,"Email Is Required") == false){
                       vrfy = false;
                    }

                    else if (check_input(adm_bod,"Birthday Is Required") == false){
                       vrfy = false;
                    }
                    else if (check_input(adm_sex,"Sex Is Required") == false){
                       vrfy = false;
                    }
                    else if (check_input(adm_address,"Address Is Required") == false){
                       vrfy = false;
                    }
                    else{
                     vrfy = true;
                      
                    }
                }
                if (page == 2){
                      if (check_input(adm_pg_name,"Parent Name Is Required") == false){
                        vrfy = false;
                      }
                      else if (check_input(adm_pg_contact,"Contact Is Required") == false){
                         vrfy = false;
                      }
                   
                       else{
                       vrfy = true;
                        
                      }

                }
                if (page == 3){
                     
                      if (check_input(adm_height,"Height Is Required") == false){
                         vrfy = false;
                      }
                      else if (check_input(adm_weight,"Weight Is Required") == false){
                         vrfy = false;
                      }
                       else{
                       vrfy = true;
                        
                      }

                }


                if (vrfy == false){

                }
                else{

                  page++;
                 $('#smartwizard').smartWizard("next");
                 return true;
                }

                 console.log(page);
             
                
                  
                
            });
            
            $("#finish-btn").on("click", function() {
               
                // alertify.alert('Finish Clicked').setHeader('Admission Form');

                var datastr  = '';
                datastr += 'action=admission'+ '&';
                datastr += 'adm_gradelevel=' + jQuery('#adm_gradelevel').val() + '&';
                datastr += 'adm_fname=' + jQuery('#adm_fname').val() + '&';
                datastr += 'adm_mname=' + jQuery('#adm_mname').val() + '&';
                datastr += 'adm_lname=' + jQuery('#adm_lname').val() + '&';
                datastr += 'adm_suffix=' + jQuery('#adm_suffix').val() + '&';
                datastr += 'adm_email=' + jQuery('#adm_email').val() + '&';
                datastr += 'adm_bod=' + jQuery('#adm_bod').val() + '&';
                datastr += 'adm_bod_age=' + jQuery('#adm_bod_age').val() + '&';
                datastr += 'adm_sex=' + jQuery('#adm_sex').val() + '&';
                datastr += 'adm_address=' + jQuery('#adm_address').val() + '&';
                datastr += 'adm_house=' + jQuery('#adm_house').val() + '&';
                datastr += 'adm_pg_name=' + jQuery('#adm_pg_name').val() + '&';
                datastr += 'adm_pg_contact=' + jQuery('#adm_pg_contact').val() + '&';
                datastr += 'adm_pg_alt_contact=' + jQuery('#adm_pg_alt_contact').val() + '&';
                datastr += 'adm_parentjob=' + jQuery('#adm_parentjob').val() + '&';
                datastr += 'adm_studliving=' + jQuery('#adm_studliving').val() + '&';
                datastr += 'adm_height=' + jQuery('#adm_height').val() + '&';
                datastr += 'adm_weight=' + jQuery('#adm_weight').val() + '&';
                datastr += 'adm_bmis=' + jQuery('#adm_bmis').val() + '&';
                datastr += 'adm_bmistat=' + jQuery('#adm_bmistat').val() + '&';
                datastr += 'adm_FeedProg=' + jQuery('#adm_FeedProg').val() + '&';
                datastr += 'adm_InDeworming=' + jQuery('#adm_InDeworming').val() + '&';
                datastr += 'enrolee_medDecease1=' + jQuery('#enrolee_medDecease1').val() + '&';
                datastr += 'enrolee_medDecease2=' + jQuery('#enrolee_medDecease2').val() + '&';
                datastr += 'enrolee_medDecease3=' + jQuery('#enrolee_medDecease3').val() + '&';
                datastr += 'enrolee_medDecease4=' + jQuery('#enrolee_medDecease4').val() + '&';
                datastr += 'enrolee_medDeceaseDate1=' + jQuery('#enrolee_medDeceaseDate1').val() + '&';
                datastr += 'enrolee_medDeceaseDate2=' + jQuery('#enrolee_medDeceaseDate2').val() + '&';
                datastr += 'enrolee_medDeceaseDate3=' + jQuery('#enrolee_medDeceaseDate3').val() + '&';
                datastr += 'enrolee_medDeceaseDate4=' + jQuery('#enrolee_medDeceaseDate4').val();






                
                  $.ajax({
                    url:"data-admission.php",
                    method:'POST',
                    data:datastr,
                    cache: false, 
                    type:  'json',
                    success:function(data)
                    {
                      var newdata = JSON.parse(data);
                      if (newdata.success) {
                        alertify.alert(newdata.success).setHeader('Admission Success');
                        // window.location.assign("index");
                      }
                      else{
                        alertify.alert(newdata.error).setHeader('Admission Error');
                      }
                    }
                  });
                return true;
            });


            $("#zst1").on("click", function() {
               page = 1;
                 console.log(page);

            });
            $("#zst2").on("click", function() {
               page = 2;
                 console.log(page);

            });
            $("#zst3").on("click", function() {
               page = 3;
                 console.log(page);

            });
            $("#zst4").on("click", function() {
               page = 4;
                 console.log(page);

            });

            

        });
    </script>
<?php } ?>
<?php if(isset($_REQUEST["admission_ID"])){?>
<script>
   function goto_index(){
    window.location.assign("index");
  }
 $(document).on('submit', '#admission_files_form', function(event){
     event.preventDefault();
     $.ajax({
      url:"data-admission.php?action=admission_files&admission_ID=<?php echo $_REQUEST["admission_ID"]?>",
      method:'POST',
      data:new FormData(this),
      contentType:false,
      processData:false,
      type:  'json',
      success:function(data)
      {

        var newdata = JSON.parse(data);
        if (newdata.success) {
            alertify.alert(newdata.success).setHeader('Admission File Requirements');
            setInterval(goto_index(), 5000);
        }
        else{
          alertify.alert(newdata.error).setHeader('Admission File Requirements');
        }
      }
    });
  });

</script>
  <?php } ?>



