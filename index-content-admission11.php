
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LeD65kUAAAAAHQe0ue4N0sftK_r5T0WHKCZYUyK"></script>
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
</style>
<div class="admission_div">
<h1>Admission Form</h1>
<form id="admission_form" action="data-admission-form.php" method="post" class="form-horizontal">
   <div class="form-group">
      <label class="col-xs-3 control-label">First Name</label>
      <div class="col-xs-8">
         <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required="required">
      </div>
   </div>
   <div class="form-group">
      <label class="col-xs-3 control-label">Middle Name</label>
      <div class="col-xs-8">
         <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name" required="required">
      </div>
   </div>
   <div class="form-group">
      <label class="col-xs-3 control-label">Last Name</label>
      <div class="col-xs-8">
         <input type="text" class="form-control"  id="lname" name="lname" placeholder="First Name" required="required">
      </div>
   </div>
   <div class="form-group">
       <label class="col-xs-3 control-label">School Last Attended</label>
       <div class="col-xs-8">
           <input type="text" class="form-control" id="schl" name="schl" placeholder="Where?" required="required">
       </div>                              
   </div>
    <div class="form-group">
         <label class="col-xs-3 control-label">Date of Birth</label>
         <div class="col-xs-8">
	         <input type="date" class="form-control hasDatepicker" name="bday" placeholder="YYYY-MM-DD" required="required" id="bday">
             <!--<input type="date" class="form-control" id="bday" placeholder="Date of Birth (format : MM/DD/YYYY)" name="bday" min="1980-01-01" required="required">-->
         </div>
     </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">Contact Number</label>
        <div class="col-xs-8">
            <input class="form-control" id="mobilenum" name="mobilenum" placeholder="Mobile or Landline" required="required" title="" type="number" value="">
        </div>
    </div>
   <div class="form-group">
      <label class="col-xs-3 control-label">Email</label>
      <div class="col-xs-8">
         <input type="email" class="form-control" name="email" placeholder="Type your email" size="40">
      </div>
   </div>
   <div class="form-group">
      <label class="col-xs-3 control-label">Gender</label>
      <div class="col-xs-8">
         <select class="form-control agree_option" name="gender" id="gender" required="required">
             <option value="1">Male </option>
             <option value="2">Female</option>
         </select>
      </div>
   </div>
   <div class="form-group">
                <label class="col-xs-3 control-label">Citizenship</label>
                <div class="col-xs-8">
                    <select class="form-control agree_option" name="citizenship" id="citizenship" required="required">
                       <option></option>
                                        <option value="Afghan">Afghan</option>
                                        <option value="Albanian">Albanian</option>
                                        <option value="Algerian">Algerian</option>
                                        <option value="American">American</option>
                                        <option value="Andorran">Andorran</option>
                                        <option value="Angolan">Angolan</option>
                                        <option value="Antiguans, Barbudans">Antiguans, Barbudans</option>
                                        <option value="Argentinean">Argentinean</option>
                                        <option value="Armenian">Armenian</option>
                                        <option value="Australian">Australian</option>
                                        <option value="Austrian">Austrian</option>
                                        <option value="Azerbaijani">Azerbaijani</option>
                                        <option value="Bahamian">Bahamian</option>
                                        <option value="Bahraini">Bahraini</option>
                                        <option value="Bangladeshi">Bangladeshi</option>
                                        <option value="Barbadian">Barbadian</option>
                                        <option value="Belarusian">Belarusian</option>
                                        <option value="Belgian">Belgian</option>
                                        <option value="Belizean">Belizean</option>
                                        <option value="Beninese">Beninese</option>
                                        <option value="Bhutanese">Bhutanese</option>
                                        <option value="Bolivian">Bolivian</option>
                                        <option value="Bosnian, Herzegovinian">Bosnian, Herzegovinian</option>
                                        <option value="Brazilian">Brazilian</option>
                                        <option value="British">British</option>
                                        <option value="Bruneian">Bruneian</option>
                                        <option value="Bulgarian">Bulgarian</option>
                                        <option value="Burkinabe">Burkinabe</option>
                                        <option value="Burmese">Burmese</option>
                                        <option value="Burundian">Burundian</option>
                                        <option value="Cambodian">Cambodian</option>
                                        <option value="Cameroonian">Cameroonian</option>
                                        <option value="Canadian">Canadian</option>
                                        <option value="Cape Verdian">Cape Verdian</option>
                                        <option value="Central African">Central African</option>
                                        <option value="Chadian">Chadian</option>
                                        <option value="Chilean">Chilean</option>
                                        <option value="Chinese">Chinese</option>
                                        <option value="Colombian">Colombian</option>
                                        <option value="Comoran">Comoran</option>
                                        <option value="Congolese">Congolese</option>
                                        <option value="Congolese">Congolese</option>
                                        <option value="Costa Rican">Costa Rican</option>
                                        <option value="Croatian">Croatian</option>
                                        <option value="Cuban">Cuban</option>
                                        <option value="Cypriot">Cypriot</option>
                                        <option value="Czech">Czech</option>
                                        <option value="Danish">Danish</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominican">Dominican</option>
                                        <option value="Dominican">Dominican</option>
                                        <option value="Dutch">Dutch</option>
                                        <option value="East Timorese">East Timorese</option>
                                        <option value="Ecuadorean">Ecuadorean</option>
                                        <option value="Egyptian">Egyptian</option>
                                        <option value="Emirian">Emirian</option>
                                        <option value="Equatorial Guinean">Equatorial Guinean</option>
                                        <option value="Eritrean">Eritrean</option>
                                        <option value="Estonian">Estonian</option>
                                        <option value="Ethiopian">Ethiopian</option>
                                        <option value="Fijian">Fijian</option>
                                        <option value="Filipino" selected="selected">Filipino</option>
                                        <option value="Finnish">Finnish</option>
                                        <option value="French">French</option>
                                        <option value="Gabonese">Gabonese</option>
                                        <option value="Gambian">Gambian</option>
                                        <option value="Georgian">Georgian</option>
                                        <option value="German">German</option>
                                        <option value="Ghanaian">Ghanaian</option>
                                        <option value="Greek">Greek</option>
                                        <option value="Grenadian">Grenadian</option>
                                        <option value="Guatemalan">Guatemalan</option>
                                        <option value="Guinea-Bissauan">Guinea-Bissauan</option>
                                        <option value="Guinean">Guinean</option>
                                        <option value="Guyanese">Guyanese</option>
                                        <option value="Haitian">Haitian</option>
                                        <option value="Honduran">Honduran</option>
                                        <option value="Hungarian">Hungarian</option>
                                        <option value="I-Kiribati">I-Kiribati</option>
                                        <option value="Icelander">Icelander</option>
                                        <option value="Indian">Indian</option>
                                        <option value="Indonesian">Indonesian</option>
                                        <option value="Iranian">Iranian</option>
                                        <option value="Iraqi">Iraqi</option>
                                        <option value="Irish">Irish</option>
                                        <option value="Israeli">Israeli</option>
                                        <option value="Italian">Italian</option>
                                        <option value="Ivorian">Ivorian</option>
                                        <option value="Jamaican">Jamaican</option>
                                        <option value="Japanese">Japanese</option>
                                        <option value="Jordanian">Jordanian</option>
                                        <option value="Kazakhstani">Kazakhstani</option>
                                        <option value="Kenyan">Kenyan</option>
                                        <option value="Kirghiz">Kirghiz</option>
                                        <option value="Kittian and Nevisian">Kittian and Nevisian</option>
                                        <option value="Kuwaiti">Kuwaiti</option>
                                        <option value="Laotian">Laotian</option>
                                        <option value="Latvian">Latvian</option>
                                        <option value="Lebanese">Lebanese</option>
                                        <option value="Liberian">Liberian</option>
                                        <option value="Libyan">Libyan</option>
                                        <option value="Liechtensteiner">Liechtensteiner</option>
                                        <option value="Lithuanian">Lithuanian</option>
                                        <option value="Luxembourger">Luxembourger</option>
                                        <option value="Macedonian">Macedonian</option>
                                        <option value="Malagasy">Malagasy</option>
                                        <option value="Malawian">Malawian</option>
                                        <option value="Malaysian">Malaysian</option>
                                        <option value="Maldivan">Maldivan</option>
                                        <option value="Malian">Malian</option>
                                        <option value="Maltese">Maltese</option>
                                        <option value="Marshallese">Marshallese</option>
                                        <option value="Mauritanian">Mauritanian</option>
                                        <option value="Mauritian">Mauritian</option>
                                        <option value="Mexican">Mexican</option>
                                        <option value="Micronesian">Micronesian</option>
                                        <option value="Moldovan">Moldovan</option>
                                        <option value="Monegasque">Monegasque</option>
                                        <option value="Mongolian">Mongolian</option>
                                        <option value="Moroccan">Moroccan</option>
                                        <option value="Mosotho">Mosotho</option>
                                        <option value="Motswana (singular), Batswana (plural)">Motswana (singular), Batswana (plural)</option>
                                        <option value="Mozambican">Mozambican</option>
                                        <option value="Namibian">Namibian</option>
                                        <option value="Nauruan">Nauruan</option>
                                        <option value="Nepalese">Nepalese</option>
                                        <option value="New Zealander">New Zealander</option>
                                        <option value="Ni-Vanuatu">Ni-Vanuatu</option>
                                        <option value="Nicaraguan">Nicaraguan</option>
                                        <option value="Nigerian">Nigerian</option>
                                        <option value="Nigerien">Nigerien</option>
                                        <option value="none">none</option>
                                        <option value="North Korean">North Korean</option>
                                        <option value="Norwegian">Norwegian</option>
                                        <option value="Omani">Omani</option>
                                        <option value="Pakistani">Pakistani</option>
                                        <option value="Palauan">Palauan</option>
                                        <option value="Panamanian">Panamanian</option>
                                        <option value="Papua New Guinean">Papua New Guinean</option>
                                        <option value="Paraguayan">Paraguayan</option>
                                        <option value="Peruvian">Peruvian</option>
                                        <option value="Polish">Polish</option>
                                        <option value="Portuguese">Portuguese</option>
                                        <option value="Qatari">Qatari</option>
                                        <option value="Romanian">Romanian</option>
                                        <option value="Russian">Russian</option>
                                        <option value="Rwandan">Rwandan</option>
                                        <option value="Saint Lucian">Saint Lucian</option>
                                        <option value="Salvadoran">Salvadoran</option>
                                        <option value="Sammarinese">Sammarinese</option>
                                        <option value="Samoan">Samoan</option>
                                        <option value="Sao Tomean">Sao Tomean</option>
                                        <option value="Saudi Arabian">Saudi Arabian</option>
                                        <option value="Senegalese">Senegalese</option>
                                        <option value="Serbian">Serbian</option>
                                        <option value="Seychellois">Seychellois</option>
                                        <option value="Sierra Leonean">Sierra Leonean</option>
                                        <option value="Singaporean">Singaporean</option>
                                        <option value="Slovak">Slovak</option>
                                        <option value="Slovene">Slovene</option>
                                        <option value="Solomon Islander">Solomon Islander</option>
                                        <option value="Somali">Somali</option>
                                        <option value="South African">South African</option>
                                        <option value="South Korean">South Korean</option>
                                        <option value="Spanish">Spanish</option>
                                        <option value="Sri Lankan">Sri Lankan</option>
                                        <option value="Sudanese">Sudanese</option>
                                        <option value="Surinamer">Surinamer</option>
                                        <option value="Swazi">Swazi</option>
                                        <option value="Swedish">Swedish</option>
                                        <option value="Swiss">Swiss</option>
                                        <option value="Syrian">Syrian</option>
                                        <option value="Tadzhik">Tadzhik</option>
                                        <option value="Taiwanese">Taiwanese</option>
                                        <option value="Tanzanian">Tanzanian</option>
                                        <option value="Thai">Thai</option>
                                        <option value="Togolese">Togolese</option>
                                        <option value="Tongan">Tongan</option>
                                        <option value="Trinidadian">Trinidadian</option>
                                        <option value="Tunisian">Tunisian</option>
                                        <option value="Turkish">Turkish</option>
                                        <option value="Turkmen">Turkmen</option>
                                        <option value="Tuvaluan">Tuvaluan</option>
                                        <option value="Ugandan">Ugandan</option>
                                        <option value="Ukrainian">Ukrainian</option>
                                        <option value="Uruguayan">Uruguayan</option>
                                        <option value="Uzbekistani">Uzbekistani</option>
                                        <option value="Venezuelan">Venezuelan</option>
                                        <option value="Vietnamese">Vietnamese</option>
                                        <option value="Yemeni">Yemeni</option>
                                        <option value="Zambian">Zambian</option>
                                        <option value="Zimbabwean">Zimbabwean</option>
                                         
                        </select>
                </div>
            </div>
   <div class="form-group">
      <div class="terms">
         <div class="terms_header">
            Terms and Conditions
         </div>
         <div class="terms_body">
            I am aware that:<br>
            <ol>
               <li>the school will create and maintain computerized and hard copy records of my personal data in the course of my study and after I leave the school;</li>
               <li>these records will be processed in compliance with the Data Privacy Act 2012.</li>
            </ol>
            I hereby give my consent that my personal data in custody of the school may be used by the University for internal reports and for related student administration to external parties.
         </div>
      </div>
      <br>
      <div class="terms_check">
         <input type="checkbox" id="chkagree" class="btn btn-primary">&nbsp;I agree to the terms and conditions stated above
      </div>
   </div>
     <div class="form-group text-center">
      <div class="btn-group">
          <a class="btn btn-info" href="index">CANCEL</a>
          <input class="btn btn-primary" type="submit" name="submit" value="SUBMIT" id="submit">
      </div>
   </div>
</form>
</div>
<script>
   $(document).ready(function(){
   
   	document.getElementById('chkagree').onchange = function() {
       document.getElementById('submit').disabled = !this.checked;
   	};
   });
   // when form is submit
       $('#admission_form').submit(function() {
           // we stoped it
           event.preventDefault();
	   	var fname = $('#fname').val();
	   	var mname = $('#mname').val();
	   	var lname = $('#lname').val();
	   	var schl = $('#schl').val();
	   	var bday = $('#bday').val();
	   	var mobilenum = $('#mobilenum').val();
	   	var email = $('#email').val();
	   	var gender = $('#gender').val();
	   	var citizenship = $('#citizenship').val();
           // needs for recaptacha ready
           grecaptcha.ready(function() {
               // do request for recaptcha token
               // response is promise with passed token
               grecaptcha.execute('6LeD65kUAAAAAHQe0ue4N0sftK_r5T0WHKCZYUyK', {action: 'submit_admission'}).then(function(token) {
                   // add token to form
                   $('#admission_form').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
   		    $.post("data-admission-form.php",{
   		    	fname: fname,
   		    	mname: mname,
   		    	lname:lname,
   		    	schl:schl,
   		    	bday:bday,
   		    	mobilenum:mobilenum,
   		    	email: email, 
   		    	gender:gender,
   		    	citizenship:citizenship,
   		    	token: token
   		    	}, function(result) {
   			    console.log(result);
   			    if(result.success) {
   			    	// $('#admission_div').html('Thanks you.');
   			    	alert('Thanks.');
   			    	window.location = "index";
   				    
   			    } else {
   				    alert('You are spammer ! Get the @$%K out.');
   			    }
   		    });
               });;
           });
     });
     
</script>