<style>
	.uctext 
	{
		text-transform: uppercase;
	}
</style>

        <div class="container">
             
           <div class="gradient-green" style="width: auto; padding: 20px;margin-top: 25px;">
              <h2>Admission</h2>
              <hr>
           </div>
           <br>
            <div class="row">
              <div class="col-sm-12">
                 <div class="card" >
                    <div class="card-body" style="padding:0px;">
                    <!-- Smart Wizard HTML -->
		              <div id="smartwizard">
		                  <ul>
		                      <li><a href="#step-1" id='zst1'>A. REGISTRATION<br /><small>&nbsp;</small></a></li>
		                      <li><a href="#step-2" id='zst2'>B. OTHER DATA <br /><small>&nbsp;</small></a></li>
		                      <li><a href="#step-3" id='zst3'>C. BIOMETRIC DATA <br /><small>(CLINIC/ NURSE)</small></a></li>
		                      <li><a href="#step-4" id='zst4'>D. SCHOOL POLICY<br /><small>(GUIDANCE / PREFECT)</small></a></li>
		                  </ul>

		                  <div>
		                  	
		                      <div id="step-1" class="">
		                        <div id="form-step-0" role="form" data-toggle="validator">

		                        	<small>Please fill up this form correctly.</small>
		                            <div class="form-row">
		                            	 <div class="form-group col-md-4">
						                <label for="adm_classification"><span class="text-danger">*</span> Classification:</label>
		                               <select class="form-control" name="adm_classification" id="adm_classification">
		                                	<option value="1">New</option>
		                                	<option value="2">Old</option>
		                                	<option value="3">Transferee</option>
		                                </select>

		                                <div class="help-block with-errors"></div>
						                </div>
						                 <div class="form-group col-md-4">
						                <label for="adm_lrn"><span class="text-danger">*</span> LRN:</label>
		                              	<input type="text" class="form-control" name="adm_lrn" id="adm_lrn" placeholder="" onkeypress="return isNumberKey(event)" maxlength="15" required>

		                                <div class="help-block with-errors"></div>
						                </div>
						                <div class="form-group col-md-4">
						                 <label for="adm_gradelevel"><span class="text-danger">*</span> GRADE LEVEL:</label>
		                                <select class="form-control" name="adm_gradelevel" id="adm_gradelevel">
		                                	<?php 
		                                	$auth_user->ref_year_level();
		                                	?>
		                                </select>
		                                <div class="help-block with-errors"></div>
						                </div>
						            </div>
						            <div class="form-row">
						                <div class="form-group col-md-3">
						                <label for="adm_fname"><span class="text-danger">*</span> FIRST NAME:</label>
		                                <input type="text" class="uctext form-control" name="adm_fname" id="adm_fname" placeholder="" onkeypress="letterInputOnly(this)" required>

		                                <div class="help-block with-errors"></div>
						                </div>

						                <div class="form-group col-md-3">
						                <label for="adm_mname"><span class="text-danger">*</span> MIDDLE NAME:</label>
		                                <input type="text" class="uctext form-control" name="adm_mname" id="adm_mname" placeholder=""  onkeypress="letterInputOnly(this)" required>
		                                <div class="help-block with-errors"></div>
						                </div>

						                <div class="form-group col-md-3">
						                <label for="adm_lname"><span class="text-danger">*</span> LAST NAME:</label>
		                                <input type="text" class="uctext form-control" name="adm_lname" id="adm_lname" placeholder=""  onkeypress="letterInputOnly(this)"  required>
		                                <div class="help-block with-errors"></div>
						                </div>

						                <div class="form-group col-md-3">
						                <label for="adm_suffix"><span class="text-danger">*</span> SUFFIX:</label>
		                                <select class="form-control" name="adm_suffix" id="adm_suffix">
		                                	<?php 
		                                	$auth_user->user_suffix_option();
		                                	?>
		                                </select>
		                                <div class="help-block with-errors"></div>
						                </div>
						            </div>

						            <div class="form-row">
						                <div class="form-group col-md-12">
						                 <label for="adm_email"><span class="text-danger">*</span> EMAIL:</label>
		                                <input type="email" class="uctext form-control" name="adm_email" id="adm_email" placeholder="" required>
		                                <div class="help-block with-errors"></div>
						                </div>
						            </div>
						             <div class="form-row">
						                <div class="form-group col-md-6">
						                 <label for="adm_bod"><span class="text-danger">*</span> BIRTHDAY:</label>
		                                <input type="text" class="form-control restricting" name="adm_bod" id="adm_bod" placeholder=""   required>
		                                <div class="help-block with-errors"></div>
						                </div>
						                <div class="form-group col-md-6">
						                  <label for="adm_bod_age">AGE</label>
						                   <input type="text" class="form-control" id="adm_bod_age" name="adm_bod_age" placeholder="" value="" required="" disabled="">
						                </div>
						            </div>
						            <div class="form-row">
						                <div class="form-group col-md-12">
						                 <label for="adm_sex"><span class="text-danger">*</span> SEX:</label>
		                                <select class="form-control" name="adm_sex" id="adm_sex">
		                                	<?php 
		                                	$auth_user->ref_sex();
		                                	?>
		                                </select>
		                                <div class="help-block with-errors"></div>
						                </div>
						            </div>
						            <div class="form-row">
						                <div class="form-group col-md-12">
						                 <label for="adm_address"><span class="text-danger">*</span> ADDRESS (<small>Lot, Street, Subdivision, Brgy., Municipal</small>):</label>
		                                <input type="text" class="uctext form-control" name="adm_address" id="adm_address" placeholder="" required>
		                                <div class="help-block with-errors"></div>
						                </div>
						            </div>
						            

						        </div>
		                      </div>
		                      <div id="step-2" class="">
		                      	  <div id="form-step-1" role="form" data-toggle="validator">
		                        	<small>Please fill up this form correctly.</small>
		                         
						            <div class="form-row">
						                <div class="form-group col-md-12">
						                <label for="adm_house"><span class="text-danger">*</span> HOUSE:</label>
		                                <select class="form-control" name="adm_house" id="adm_house">
		                                	<option>Owned</option>
		                                	<option>Rented</option>
		                                </select>
		                                <div class="help-block with-errors"></div>
						                </div>
						            </div>

						            <div class="form-row">
						                <div class="form-group col-md-12">
						                 <label for="adm_pg_name"><span class="text-danger">*</span> PARENT/GUARDIAN NAME:</label>
		                                <input type="text" class="uctext form-control" name="adm_pg_name" id="adm_pg_name" placeholder="" required>
		                                <div class="help-block with-errors"></div>
						                </div>
						            </div>
						             <div class="form-row">
						                <div class="form-group col-md-6">
						                 <label for="adm_pg_contact"><span class="text-danger">*</span> PARENT/GUARDIAN CONTACT:</label>
		                                <input type="text" class="form-control" name="adm_pg_contact" id="adm_pg_contact" placeholder=""   maxlength="11"  onkeypress="return isNumberKey(event)" required>
		                                <div class="help-block with-errors"></div>
						                </div>
						                <div class="form-group col-md-6">
						                  <label for="adm_pg_alt_contact">ALTERNATE CONTACT</label>
						                   <input type="text"  class="form-control" id="adm_pg_alt_contact" name="adm_pg_alt_contact" placeholder="" value="" maxlength="11" onkeypress="return isNumberKey(event)">
						                </div>
						            </div>
						            
						            <div class="form-row">
						                <div class="form-group col-md-12">
						                <label for="adm_parentjob"> Job or Work of Parent or Guardian:</label>
		                                 <input type="text" class="uctext form-control" id="adm_parentjob" name="adm_parentjob" placeholder="" value="">
		                                <div class="help-block with-errors"></div>
						                </div>
						            </div>
						            <div class="form-row">
						                <div class="form-group col-md-12">
						                <label for="adm_studliving"><span class="text-danger">*</span> To whom the student is staying or living with?:</label>
		                                <select class="form-control" name="adm_studliving" id="adm_studliving">
		                                	<option>Parent</option>
		                                	<option>Guardian</option>
		                                </select>
		                                <div class="help-block with-errors"></div>
						                </div>
						            </div>

						        </div>
		                      </div>
		                      <div id="step-3" class="">
		                      	  <div id="form-step-2" role="form" data-toggle="validator">
		                      	  	<form name="step3">
		                      	  	<div class="form-row">
						                <div class="form-group col-md-4">
						                <label for="adm_height"><span class="text-danger">*</span> HEIGHT (CM):</label>
		                                <input type="text" class="form-control" name="adm_height" id="adm_height" placeholder="" onkeyup="calculateBmi()" maxlength="4"  onkeypress="return isNumberKey(event)" required>
		                                <div class="help-block with-errors"></div>
						                </div>

						                <div class="form-group col-md-4">
						                <label for="adm_weight"><span class="text-danger">*</span> WEIGHT (KG):</label>
		                                <input type="text" class="form-control" name="adm_weight" id="adm_weight" placeholder="" onkeyup="calculateBmi()" maxlength="4"  onkeypress="return isNumberKey(event)" required>
		                                <div class="help-block with-errors"></div>
						                </div>

						                <div class="form-group col-md-4">
						                <label for="adm_bmis"><span class="text-danger">*</span> BMI STATUS:</label>
		                                <input type="text" class="form-control" name="adm_bmis" id="adm_bmis" placeholder="" required disabled="">
		                                
		                                 <input type="hidden"  name="adm_bmistat" id="adm_bmistat" >
		                                <div class="help-block with-errors"></div>
						                </div>
						            </div>
						        	</form>
		                      	  	  <div class="form-row">
						                <div class="form-group col-md-12">
						                <label for="adm_FeedProg"><span class="text-danger">*</span> Agree to end in school feeding program:</label>
		                                <select class="form-control" name="adm_FeedProg" id="adm_FeedProg">
		                                	<option>Yes</option>
		                                	<option>No</option>
		                                </select>
		                                <div class="help-block with-errors"></div>
						                </div>
						            </div>
						              <div class="form-row">
						                <div class="form-group col-md-12">
						                <label for="adm_InDeworming"><span class="text-danger">*</span> Agree to take deworming tablets 2 times a year:</label>
		                                <select class="form-control" name="adm_InDeworming" id="adm_InDeworming">
		                                	<option>Yes</option>
		                                	<option>No</option>
		                                </select>
		                                <div class="help-block with-errors"></div>
						                </div>
						            </div>

						            <div class="form-row">
						                <div class="form-group col-md-6">
						                <label for="enrolee_medDecease">Medical history / immunization Taken and Data (Optional):</label>
		                                <input type="text" class="uctext form-control" name="enrolee_medDecease[]" id="enrolee_medDecease1" placeholder="" required >
		                                <div class="help-block with-errors"></div>
						                </div>

						                <div class="form-group col-md-6">
						                <label for="enrolee_medDeceaseDate">&nbsp;</label>
		                                <input type="date" class="form-control" name="enrolee_medDeceaseDate[]" id="enrolee_medDeceaseDate1" placeholder="" required >
		                                <div class="help-block with-errors"></div>
						                </div>
						            </div>
						             <div class="form-row">
						                <div class="form-group col-md-6">
		                                <input type="text" class="uctext form-control" name="enrolee_medDecease[]" id="enrolee_medDecease2" placeholder="" required >
		                                <div class="help-block with-errors"></div>
						                </div>
						                <div class="form-group col-md-6">
		                                <input type="date" class="form-control" name="enrolee_medDeceaseDate[]" id="enrolee_medDeceaseDate2" placeholder="" required >
		                                <div class="help-block with-errors"></div>
						                </div>
						            </div>

						             <div class="form-row">
						                <div class="form-group col-md-6">
		                                <input type="text" class="uctext form-control" name="enrolee_medDecease[]" id="enrolee_medDecease3" placeholder="" required >
		                                <div class="help-block with-errors"></div>
						                </div>
						                <div class="form-group col-md-6">
		                                <input type="date" class="form-control" name="enrolee_medDeceaseDate[]" id="enrolee_medDeceaseDate3" placeholder="" required >
		                                <div class="help-block with-errors"></div>
						                </div>
						            </div>

						             <div class="form-row">
						                <div class="form-group col-md-6">
		                                <input type="text" class="uctext form-control" name="enrolee_medDecease[]" id="enrolee_medDecease4" placeholder="" required >
		                                <div class="help-block with-errors"></div>
						                </div>
						                <div class="form-group col-md-6">
		                                <input type="date" class="form-control" name="enrolee_medDeceaseDate[]" id="enrolee_medDeceaseDate4" placeholder="" required >
		                                <div class="help-block with-errors"></div>
						                </div>
						            </div>
		                          </div>
		                      </div>
		                      <div id="step-4" class="">
		                      	<br>
		                      	<div class="btn btn-primary btn-sm float-right" id="print_form" >PRINT</div>
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
		                      </div>
		                  </div>
		              </div>
                    </div>
                    <div class="card-footer ">
		              <div class="">
			              <button class="btn btn-secondary" id="prev-btn" type="button">Previous</button>
			              <button class="btn btn-secondary" id="next-btn" type="button">Next</button>
			              <button class="btn btn-primary" id="finish-btn" type="submit">Finish</button>
		              </div>
                    </div>
                    
                 </div>
              </div>
           </div>
        </div> 
           <br> 
<!-- Modal -->
<div class="modal fade" id="print_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enrolment Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding:0px;">
        <iframe id="print_frame" src="#" style="width:100%; height:800px;" frameborder="0" ></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>