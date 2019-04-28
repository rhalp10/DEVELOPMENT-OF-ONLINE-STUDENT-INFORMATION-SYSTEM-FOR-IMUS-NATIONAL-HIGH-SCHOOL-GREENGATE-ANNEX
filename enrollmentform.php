<!-- <!DOCTYPE html> -->
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!-- <html lang="en"> -->
<!--<![endif]-->
<head>
<link rel="stylesheet" href="steps/normalize.css">
<link rel="stylesheet" href="steps/css/jquery.idealforms.css">
<meta charset=utf-8 />
<title>jQuery Ideal Forms 3 Example</title>
<style>
body {
/*max-width: 980px;
margin: 2em auto;
font: normal 15px/1.5 Arial, sans-serif;
color: #353535;
overflow-y: scroll;*/
}
.content {
margin: 0 30px;
}
.field.buttons button {
margin-right: .5em;
}
#invalid {
display: none;
float: left;
width: 290px;
margin-left: 120px;
margin-top: .5em;
color: #CC2A18;
font-size: 130%;
font-weight: bold;
}
.idealforms.adaptive #invalid {
margin-left: 0 !important;
}
.idealforms.adaptive .field.buttons label {
height: 0;
}
.main{
  width: 250px !important;
}
.form-inline { 
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

/* Add some margins for each label */
.form-inline label {
  margin: 5px 10px 5px 0;
}

/* Style the input fields */
.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

/* Style the submit button */
.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
}

.form-inline button:hover {
  background-color: royalblue;
}

/* Add responsiveness - display the form controls vertically instead of horizontally on screens that are less than 800px wide */
@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }

  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
</style>
<link href="steps/jquerysctipttop.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1 style="" align="center">Enrollment Form</h1>
<div class="content">
<div class="idealsteps-container">
<nav class="idealsteps-nav"></nav>
<form action="" novalidate autocomplete="off" class="idealforms" method="POST" id="my-form">
<div class="idealsteps-wrap" > 

<!-- Step 1 -->

<section class="idealsteps-step">
<h4>Please fill up this form correctly.</h4>

        <legend><h2>A. REGISTRATION</h2></legend>



<div class="field">
<label class="main"><i style="color: red;">*</i> Gradelevel:</label>
<select name="gradelevel" id="gradelevel">
<option value="default">&ndash; Select an option &ndash;</option>
<option value="1">Grade 7</option>
<option value="2">Grade 8</option>
<option value="3">Grade 9</option>
<option value="4">Grade 10</option>
</select>
<span class="error"></span> </div>

<div class="field">
<label class="main"><i style="color: red;">*</i> Name of Enrolee:</label>
<input name="enrolee_name" type="text" id="enrolee_name" >
<span class="error"></span> </div>

<div class="field">
<label class="main"><i style="color: red;">*</i> E-Mail:</label>
<input name="email" type="email" id="email">
<span class="error"></span> </div>

<div class="field">
<label class="main"><i style="color: red;">*</i> Birthday:</label>
<input name="enrolee_bday" id="enrolee_bday" type="text" placeholder="mm/dd/yyyy" class="datepicker">
<span class="error"></span> </div>
<div class="field">
<label class="main">Age as of June this year:</label>
<input name="enrolee_age" id="enrolee_age" type="text" maxlength="3" minlength="3" onkeyup="numberInputOnly(this);">
<span class="error"></span> </div>

<div class="field">
<label class="main"><i style="color: red;">*</i> Sex:</label>
<select name="enrolee_gender" id="enrolee_gender">
<option value="default">&ndash; Select an option &ndash;</option>
<option value="1">Male</option>
<option value="2">Female</option>
</select>
<span class="error"></span> </div>

<div class="field">
<label class="main"><i style="color: red;">*</i> Complete Address (Lot, Street, Subdivision, Brgy., Municipal):</label>
<input name="enrolee_address" id="enrolee_address" type="text" >
<span class="error"></span> </div>

<div class="field">
<label class="main"><i style="color: red;">*</i> House:</label>
<select name="enrolee_house" id="enrolee_house">
<option value="default">&ndash; Select an option &ndash;</option>
<option value="Owned">Owned</option>
<option value="Rented">Rented</option>
</select>
<span class="error"></span> </div>

<div class="field">
<label class="main"><i style="color: red;">*</i> Name of Parent or Guardian (Relationship to Student):</label>
<input name="enrolee_parent" type="text" id="enrolee_parent" >
<span class="error"></span> </div>

<div class="field">
<label class="main"><i style="color: red;">*</i> Active Contact Number of Parent or (Graduation) Guardian:</label>
<input name="enrolee_contact" id="enrolee_contact" type="text" maxlength="11" minlength="11" onkeyup="numberInputOnly(this);" >
<span class="error"></span> </div>

<div class="field">
<label class="main">(Alternate Number):</label>
<input name="enrolee_altcontact" id="enrolee_altcontact" type="text" maxlength="11" minlength="11" onkeyup="numberInputOnly(this);">
<span class="error"></span> </div>

<div class="field">
<label class="main">Job or Work of Parent or Guardian:</label>
<input name="enrolee_parentWork" id="enrolee_parentWork" type="text" >
<span class="error"></span> </div>

<div class="field">
<label class="main"><i style="color: red;">*</i> To whom the student is staying or living with?:</label>
<select name="enrolee_living" id="enrolee_living">
<option value="default">&ndash; Select an option &ndash;</option>
<option value="Parent">Parent</option>
<option value="Guardian">Guardian</option>
</select>
<span class="error"></span> </div>


<div class="field buttons">
<label class="main">&nbsp;</label>
<button type="button" class="next">Next &raquo;</button>
</div>
</section>

<!-- Step 2 -->

<section class="idealsteps-step">

<h4>Please fill up this form correctly.</h4>
<legend><h2>B. BIOMETRIC DATA (Clinic/ Nurse)</h2></legend>

<div class="field">
<label class="main">Height (cm):</label>
<input name="enrolee_height" id="enrolee_height" type="text" maxlength="3" minlength="3" onkeyup="numberInputOnly(this);" >
<span class="error"></span> </div>
<div class="field">
<label class="main">Weight (kg):</label>
<input name="enrolee_weight" id="enrolee_weight" maxlength="3" minlength="3" onkeyup="numberInputOnly(this);"  >
<span class="error"></span> </div>
<div class="field">
<label class="main">BMI Status:</label>
<input name="enrolee_bmistat"  id="enrolee_bmistat" maxlength="10" minlength="10" onkeyup="numberInputOnly(this);"  >
<span class="error"></span> </div>

<div class="field">
<label class="main">Agree to end in school feeding program?</label>
<select name="enrolee_FeedProg" id="enrolee_FeedProg">
<option value="default">&ndash; Select an option &ndash;</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<span class="error"></span> </div>

<div class="field">
<label class="main">Agree to take deworming tablets 2 times a year?</label>
<select name="enrolee_InDeworming" id="enrolee_InDeworming">
<option value="default">&ndash; Select an option &ndash;</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<span class="error"></span> </div>

<div class="field">
<label class="main">Medical history / immunization Taken and Data:</label>
<p class="group form-inline" style="width: 470px;">
<label>
  <input name="enrolee_medDecease1" id="enrolee_medDecease1" type="text" >
  <input type="date" class="form-control" id="enrolee_medDeceaseDate1" name="enrolee_medDeceaseDate1">
</label>
<label>
  <input name="enrolee_medDecease2" id="enrolee_medDecease2" type="text" >
  <input type="date" class="form-control" id="enrolee_medDeceaseDate2" name="enrolee_medDeceaseDate2">
</label>
<label>
  <input name="enrolee_medDecease3" id="enrolee_medDecease3" type="text" >
  <input type="date" class="form-control" id="enrolee_medDeceaseDate3" name="enrolee_medDeceaseDate3">
</label>
<label>
  <input name="enrolee_medDecease4" id="enrolee_medDecease4" type="text" >
  <input type="date" class="form-control" id="enrolee_medDeceaseDate4" name="enrolee_medDeceaseDate4">
</label>

</p>
<span class="error"></span> </div>



<div class="field buttons">
<label class="main">&nbsp;</label>
<button type="button" class="prev">&laquo; Prev</button>
<button type="button" class="next">Next &raquo;</button>
</div>
</section>

<!-- Step 3 -->

<section class="idealsteps-step">


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
    <br>

<div class="field buttons">
<label class="main">&nbsp;</label>
<button type="button" class="prev">&laquo; Prev</button> 
<button type="submit" class="submit">Submit</button>
</div>
</section>

</div>
<span id="invalid"></span>
</form>
</div>
</div>
<script src="steps/jquery.min.js"></script> 
<script src="steps/jquery-ui.min.js"></script> 
<script src="steps/js/out/jquery.idealforms.js"></script> 
<!--<script src="js/out/jquery.idealforms.min.js"></script>--> 
<script>
function numberInputOnly(elem) {
                var validChars = /[0-9.]/;
                var strIn = elem.value;
                var strOut = '';
                for(var i=0; i < strIn.length; i++) {
                  strOut += (validChars.test(strIn.charAt(i)))? strIn.charAt(i) : '';
                }
                elem.value = strOut;
            }

function submit_data(){

      var gradelevel = $('#gradelevel').val();
      var enrolee_email   = $('#email').val();
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
      var enrolee_FeedProg   = $('#enrolee_FeedProg').val();
      var enrolee_InDeworming   = $('#enrolee_InDeworming').val();
      var enrolee_medDecease1   = $('#enrolee_medDecease1').val();
      var enrolee_medDecease2   = $('#enrolee_medDecease2').val();
      var enrolee_medDecease3   = $('#enrolee_medDecease3').val();
      var enrolee_medDecease4   = $('#enrolee_medDecease4').val();
      var enrolee_medDeceaseDate1   = $('#enrolee_medDeceaseDate1').val();
      var enrolee_medDeceaseDate2   = $('#enrolee_medDeceaseDate2').val();
      var enrolee_medDeceaseDate3   = $('#enrolee_medDeceaseDate3').val();
      var enrolee_medDeceaseDate4   = $('#enrolee_medDeceaseDate4').val();
      var enrolee_height   = $('#enrolee_height').val();
      var enrolee_bmistat   = $('#enrolee_bmistat').val();
      var enrolee_weight   = $('#enrolee_weight').val();
 $.ajax({
        url:"data-process.php?"+
          "gradelevel="+gradelevel+
          "&enrolee_name="+enrolee_name+
          "&enrolee_email="+enrolee_email+
          "&enrolee_bday="+enrolee_bday+
          "&enrolee_age="+enrolee_age+
          "&enrolee_gender="+enrolee_gender+
          "&enrolee_address="+enrolee_address+
          "&enrolee_house="+enrolee_house+
          "&enrolee_parent="+enrolee_parent+
          "&enrolee_contact="+enrolee_contact+
          "&enrolee_altcontact="+enrolee_altcontact+
          "&enrolee_parentWork="+enrolee_parentWork+
          "&enrolee_living="+enrolee_living+
          "&enrolee_FeedProg="+enrolee_FeedProg+
          "&enrolee_InDeworming="+enrolee_InDeworming+
          "&enrolee_height="+enrolee_height+
          "&enrolee_bmistat="+enrolee_bmistat+
          "&enrolee_weight="+enrolee_weight+
          "&enrolee_medDecease1="+enrolee_medDecease1+
          "&enrolee_medDecease2="+enrolee_medDecease2+
          "&enrolee_medDecease3="+enrolee_medDecease3+
          "&enrolee_medDecease4="+enrolee_medDecease4+
          "&enrolee_medDeceaseDate1="+enrolee_medDeceaseDate1+
          "&enrolee_medDeceaseDate2="+enrolee_medDeceaseDate2+
          "&enrolee_medDeceaseDate3="+enrolee_medDeceaseDate3+
          "&enrolee_medDeceaseDate4="+enrolee_medDeceaseDate4
          ,
        success: function(data) {
          
        }
       
      });
      alert("Thank you. You will receive a confirmation to your GMail.");
      window.location = "index";
}
    $('form.idealforms').idealforms({

      silentLoad: false,

      rules: {
        'gradelevel': 'required select:default',
        'enrolee_name': 'required enrolee_name ',
        'email': 'required email',
        'enrolee_bday': 'required enrolee_bday',        
        'enrolee_gender': 'required select:default',
        'enrolee_house': 'required select:default',
        'enrolee_living': 'required select:default',
        'enrolee_address': 'required enrolee_address ',
        'enrolee_parent': 'required enrolee_parent ',
        'enrolee_contact': 'required enrolee_contact ',
        
      },

      errors: {
        'username': {
          ajaxError: 'Username not available'
        }
      },

      onSubmit: function(invalid, e) {
        e.preventDefault();

     
     
        $('#invalid')
          .show()
          .toggleClass('valid', ! invalid)
          .text(invalid ? (invalid +' invalid fields') : submit_data());
      }
    });



    $('form.idealforms').find('input, select, textarea').on('change keyup', function() {
      $('#invalid').hide();
    });

    $('form.idealforms').idealforms('addRules', {
      'comments': 'required minmax:50:200'
    });

    $('.prev').click(function(){
      $('.prev').show();
      $('form.idealforms').idealforms('prevStep');
    });
    $('.next').click(function(){
      $('.next').show();
      $('form.idealforms').idealforms('nextStep');
    });

  </script>
</body>
<!-- </html> -->

