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

<form id="example-advanced-form" action="#">
    <h3>Account</h3>
    <fieldset>
        <legend>Account Information</legend>
 
        <label for="userName-2">User name *</label>
        <input id="userName-2" name="userName" type="text" class="required">
        <label for="password-2">Password *</label>
        <input id="password-2" name="password" type="text" class="required">
        <label for="confirm-2">Confirm Password *</label>
        <input id="confirm-2" name="confirm" type="text" class="required">
        <p>(*) Mandatory</p>
    </fieldset>
 
    <h3>Profile</h3>
    <fieldset>
        <legend>Profile Information</legend>
 
        <label for="name-2">First name *</label>
        <input id="name-2" name="name" type="text" class="required">
        <label for="surname-2">Last name *</label>
        <input id="surname-2" name="surname" type="text" class="required">
        <label for="email-2">Email *</label>
        <input id="email-2" name="email" type="text" class="required email">
        <label for="address-2">Address</label>
        <input id="address-2" name="address" type="text">
        <label for="age-2">Age (The warning step will show up if age is less than 18) *</label>
        <input id="age-2" name="age" type="text" class="required number">
        <p>(*) Mandatory</p>
    </fieldset>
 
    <h3>Warning</h3>
    <fieldset>
        <legend>You are to young</legend>
 
        <p>Please go away ;-)</p>
    </fieldset>
 
    <h3>Finish</h3>
    <fieldset>
        <legend>Terms and Conditions</legend>
 
        <input id="acceptTerms-2" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
    </fieldset>
</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
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




    var form = $("#example-advanced-form").show();
 
form.steps({
    headerTag: "h3",
    bodyTag: "fieldset",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        // Allways allow previous action even if the current form is not valid!
        if (currentIndex > newIndex)
        {
            return true;
        }
        // Forbid next action on "Warning" step if the user is to young
        if (newIndex === 3 && Number($("#age-2").val()) < 18)
        {
            return false;
        }
        // Needed in some cases if the user went back (clean up)
        if (currentIndex < newIndex)
        {
            // To remove error styles
            form.find(".body:eq(" + newIndex + ") label.error").remove();
            form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
        }
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onStepChanged: function (event, currentIndex, priorIndex)
    {
        // Used to skip the "Warning" step if the user is old enough.
        if (currentIndex === 2 && Number($("#age-2").val()) >= 18)
        {
            form.steps("next");
        }
        // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
        if (currentIndex === 2 && priorIndex === 3)
        {
            form.steps("previous");
        }
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        alert("Submitted!");
    }
}).validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
        confirm: {
            equalTo: "#password-2"
        }
    }
});
</script>


</div>
<script>

    

      
</script>