<?php 
include('dbconfig.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LeD65kUAAAAAHQe0ue4N0sftK_r5T0WHKCZYUyK"></script>

  <script type="text/javascript" src="assets/js/plugins/forms/wizards/steps.min.js"></script>
<style type="text/css">
   .terms{
   border:1px solid #999;
   }
   .terms_header{
   padding:10px 20px;
   background:#09F;
   color:#FFF;
   font-weight:bold;
   }
   .terms_body{
   padding:20px;
   }
   .terms_check{
   text-align:center;
   }


/*   @import url("//www.jquery-steps.com/Content/examples.css");*/

/* The following classes are just for demo purposes */
/*body
{
    font-family: Arial;
    padding: 5%;
}

.wizard > .content
{
    width: 98%;
}

.wizard > .content legend
{
    position: absolute;
    left: -9999em;
}*/

/* The following classes are to hide not active steps */
/*.wizard > .steps li
{
    display: none;
}

.wizard > .steps li.current
{
    display: block;
}*/
</style>
<div class="admission_div">

<form id="wizard">
    <!-- STEP 1 -->
    <h1>A. REGISTRATION</h1>
    <fieldset>
        <legend>A. REGISTRATION</legend>
        <!-- Your content goes here -->
   
                <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label><i style="color: red">*</i> Grade Level:</label>
                      
                          <label>7</label>
                          <input type="radio" value="1" id="gradelevel" name="gradelevel"  class="radio-inline">
                          <label>8</label>
                          <input type="radio" value="2" id="gradelevel" name="gradelevel"  class="radio-inline">
                          <label>9</label>
                          <input type="radio" value="3" id="gradelevel" name="gradelevel"  class="radio-inline">
                          <label>10</label>
                          <input type="radio" value="4" id="gradelevel" name="gradelevel"  class="radio-inline">
                         
                        </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label><i style="color: red">*</i> Name of Enrolee:</label>
                          <input type="text" class="form-control" id="enrolee_name" name="enrolee_name" placeholder="" required="">
                        </div>
                  </div>
                  <div class="col-md-12">
                        <div class="form-group">
                          <label><i style="color: red">*</i> Birthday:</label>
                          <input type="date" class="form-control" id="enrolee_bday" name="enrolee_bday" placeholder="" required="">
                        </div>
                  </div>
                  <div class="col-md-6">
                        <div class="form-group">
                            <label>Age as of June this year:</label>
                            <input type="text" class="form-control" id="enrolee_age" name="enrolee_age" placeholder="" required="">
                        </div>

                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label><i style="color: red">*</i> Gender:</label>
                          <select class="form-control" id="enrolee_gender" name="enrolee_gender" required="">
                             <?php 
                            $query = mysqli_query($con,"SELECT * FROM `ref_sex`");
                            if (mysqli_num_rows($query) > 0) 
                            {
                                 while ($rows = mysqli_fetch_assoc($query)) {
                            ?>
                            <option value="<?php echo $rows['sex_ID']?>" ><?php echo $rows['sex_Name']?></option>
                            <?php
                                 }
                            }
                            ?>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label><i style="color: red">*</i> Complete Address (Lot, Street, Subdivision, Brgy., Municipal):</label>
                          <input type="text" class="form-control"  name="enrolee_address" id="enrolee_address" required="">
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label><i style="color: red">*</i> House:</label>
                          <select  class="form-control" id="enrolee_house" name="enrolee_house" required="">
                            <option>Owned</option>
                            <option>Rented</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                        <label><i style="color: red">*</i> Name of Parent or Guardian (Relationship to Student):</label>
                        <input type="text" class="form-control"  name="enrolee_parent" id="enrolee_parent" required=""> 
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label><i style="color: red">*</i> Active Contact Number of Parent or (Graduation) Guardian:</label>
                      <input type="text" class="form-control"  name="enrolee_contact" id="enrolee_contact" maxlength="11" onkeyup="numberInputOnly(this);" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label>(Alternate Number):</label>
                      <input type="text" class="form-control"  name="enrolee_altcontact" id="enrolee_altcontact" maxlength="11" onkeyup="numberInputOnly(this);">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label>Job or Work of Parent or Guardian:</label>
                      <input type="text" class="form-control"  name="enrolee_parentWork" id="enrolee_parentWork">
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label>To whom the student is staying or living with?:</label>
                            <select  class="form-control" id="enrolee_living" name="enrolee_living" required="">
              <option>Parent</option>
              <option>Guardian</option>
            </select>
                  </div>
                </div>
              </fieldset>
    </fieldset>
    
    <!-- STEP 2 -->
    <h1>B. BIOMETRIC DATA (Clinic/ Nurse)</h1>
    <fieldset>
        <legend>B. BIOMETRIC DATA (Clinic/ Nurse)</legend>
        <!-- Your content goes here -->
         <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label><i style="color: red">*</i> Height:</label>
              <input type="text" class="form-control" id="enrolee_height" name="enrolee_height" placeholder="" required="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>BMI status:</label>
              <input type="text" class="form-control" id="enrolee_bmistat" name="enrolee_bmistat" placeholder="">
             </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label><i style="color: red">*</i> Weight:</label>
              <input type="text" class="form-control" id="enrolee_weight" name="enrolee_weight" placeholder="" required="">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Agree to end in school feeding program?</label>
              <label>If Yes(skip)</label>

            <label>If no (check)<input type="checkbox" value="" id="enrolee_ifyesInFeedProg" name="enrolee_ifyesInFeedProg" onchange='handleChange(this);'>, reason is</label>
            <input type="text" class="form-control" id="enrolee_ifnoInFeedProgReason" name="enrolee_ifyesInFeedProgReason" placeholder="" disabled="">
                            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Agree to take deworming tablets 2 times a year?</label>
              <label>If Yes(skip)</label>
            <label>If no (check)<input type="checkbox" value="" id="enrolee_ifyesInDewormingReason" name="enrolee_ifyesInDewormingReason" onchange='handleChange1(this);'>, reason is</label>
                       <input type="text" class="form-control" id="enrolee_ifnoInDewormingReason" name="enrolee_ifnoInDewormingReason" placeholder="" disabled="">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Medical history / immunization Taken and Data</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
             
              <input type="text" class="form-control" id="enrolee_medDecease[]" name="enrolee_medDecease[]" >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="date" class="form-control" id="enrolee_medDeceaseDate[]" name="enrolee_medDeceaseDate[]" >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
             
              <input type="text" class="form-control" id="enrolee_medDecease[]" name="enrolee_medDecease[]" >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="date" class="form-control" id="enrolee_medDeceaseDate[]" name="enrolee_medDeceaseDate[]" >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
             
              <input type="text" class="form-control" id="enrolee_medDecease[]" name="enrolee_medDecease[]" >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="date" class="form-control" id="enrolee_medDeceaseDate[]" name="enrolee_medDeceaseDate[]" >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
             
              <input type="text" class="form-control" id="enrolee_medDecease[]" name="enrolee_medDecease[]" >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="date" class="form-control" id="enrolee_medDeceaseDate[]" name="enrolee_medDeceaseDate[]" >
            </div>
          </div>
        </div>
    </fieldset>
    
    <!-- STEP 3 -->
    <h1>C. SCHOOL POLICY (Guidance / Prefect)</h1>
    <fieldset>
     <legend><h3>C. SCHOOL POLICY (Guidance / Prefect)</h3></legend>
    <h4>MINOR OFFENSES</h4>
    <ul>
      <li>Improper haircut/ body tattoo/es</li>
      <li>Colored hair / nails or lipstick</li>
      <li>No ID / Not wearing school uniform</li>
      <li>Using cellphone or gadgets during class</li>

    </ul>
    <h4>MAJOR OFFENSES</h4>
    <ul>
     <li>Smoking cigarettes or vape</li>
     <li>Stealing or involve in stealing / accomplice</li>
     <li>Bullying or starting / involve in fight or accomplice</li>
     <li>Cutting classes / loiterring in canteen or in any area</li>
     <li>Vandalism / destroying school (programming) properties / arson</li>
     <li>Bringing and using harmful objects, alcohol, prohibited things or pornographic materials</li>
    </ul>
    </fieldset>
</form>

<div id="error">
  
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//www.jquery-steps.com/Scripts/jquery.steps.min.js"></script>
<script>  
  function numberInputOnly(elem) {
                var validChars = /[0-9]/;
                var strIn = elem.value;
                var strOut = '';
                for(var i=0; i < strIn.length; i++) {
                  strOut += (validChars.test(strIn.charAt(i)))? strIn.charAt(i) : '';
                }
                elem.value = strOut;
            }
  function handleChange(checkbox) {
    if(checkbox.checked == true){
        document.getElementById("enrolee_ifnoInFeedProgReason").removeAttribute("disabled");
    }else{
        document.getElementById("enrolee_ifnoInFeedProgReason").setAttribute("disabled", "disabled");
   }
}
  function handleChange1(checkbox) {
    if(checkbox.checked == true){
        document.getElementById("enrolee_ifnoInDewormingReason").removeAttribute("disabled");
    }else{
        document.getElementById("enrolee_ifnoInDewormingReason").setAttribute("disabled", "disabled");
   }
}


    $("#wizard").steps({
        bodyTag: "fieldset",
        onFinished: function (event, currentIndex)
        {
            // Submission code
            //$(this).submit();
      var gradelevel = $('#gradelevel').val();
      var enrolee_name   = $('#enrolee_name').val();
      var enrolee_bday   = $('#enrolee_bday').val();
      var enrolee_age   = $('#enrolee_age').val();
      var enrolee_gender   = $('#enrolee_gender').val();
      var enrolee_address   = $('#enrolee_address').val();
      var enrolee_house   = $('#enrolee_house').val();
      var enrolee_parent   = $('#enrolee_parent').val();
      var enrolee_contact   = $('#enrolee_contact').val();
      var enrolee_altcontact   = $('#enrolee_altcontact').val();
      var enrolee_parentWork   = $('#enrolee_parentWork').val();
      var enrolee_living   = $('#enrolee_living').val();
      var enrolee_ifyesInFeedProg   = $('#enrolee_ifyesInFeedProg').val();
      var enrolee_ifnoInFeedProgReason   = $('#enrolee_ifnoInFeedProgReason').val();
      var enrolee_ifyesInDeworming   = $('#enrolee_ifyesInDeworming').val();
      var enrolee_ifnoInDewormingReason   = $('#enrolee_ifnoInDewormingReason').val();
      var enrolee_medDecease   = $('#enrolee_medDecease').val();
      var enrolee_medDeceaseDate   = $('#enrolee_medDeceaseDate').val();
      var enrolee_height   = $('#enrolee_height').val();
      var enrolee_bmistat   = $('#enrolee_bmistat').val();
      var enrolee_weight   = $('#enrolee_weight').val();

  



      $.ajax({
          url:"data-process.php",
          type:'POST',
          data:new FormData(this),
          contentType:false,
          processData:false,
          success:function(data)
          {
            alert(data);
            $('#error').val(data);
            
          }
        }); 

        }
    });
</script>


</div>
<script>

    

      
</script>