
<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Admission Management</h5>

						</div>
						<button type="button" class="btn btn-success btn-labeled btn-labeled-right" data-toggle="modal" data-target="#admission_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>
						 Add</button>
						<table class="table table-bordered" id="admission_data">
							<thead>
								<tr>
									<th>Date</th>
                                             <th>Gradelevel</th>
									<th>Name</th>
									<th>Status</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
						</table>
					</div>
					<!-- /basic datatable -->

<!-- Vertical form modal -->
					<div id="admission_modal" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header bg-slate-400">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">ADD ADMISSION</h5>
								</div>

								<form action="#" method="POST"  class="form-horizontal" id="admission_form" enctype="multipart/form-data">
									<!-- <button type="button" class="btn btn-success btn-labeled btn-labeled-right pull-right" data-toggle="modal" data-target="#modal_form_vertical"><b><i class="icon-add"></i></b>
						 Browse Student</button> -->
									<div class="modal-body">
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>First Name</label>
													<input type="text" id="fname" name="fname" placeholder="First Name" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>Middle Name</label>
													<input type="text" id="mname"  name="mname" placeholder="Middle Name" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>Last Name</label>
													<input type="text" id="lname" name="lname" placeholder="Family Name" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>School Last Attended</label>
													<input type="text" id="schl" name="schl" placeholder="Where?" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label>Date of Birth</label>
													<input type="date" id="bday" name="bday" placeholder="" class="form-control">
												</div>

												<div class="col-sm-6">
													<label>Contact Number</label>
													<input type="text" id="mobilenum" name="mobilenum" placeholder="" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>Email</label>
													<input type="email" id="email" name="email" placeholder="email@domain.com" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>Gender</label>
													<select class="select"name="gender"  id="gender" >
     													<option value="1">Male </option>
                  											<option value="2">Female</option>
													</select>
												</div>

												
											</div>
										</div>
                                              <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-12">
                                                                 <label>Status</label>
                                                                 <select class="select" name="admission_Status"  id="admission_Status" >
                                                                      <option value="1">Accepted</option>
                                                                      <option value="0">Pending</option>
                                                                 </select>
                                                            </div>

                                                            
                                                       </div>
                                                  </div>
									</div>
									<div class="modal-footer">
								       <input type="hidden" name="admission_ID" id="admission_ID" />
								       <input type="hidden" name="operation" id="operation" value="Add" />
								       <button type="submit" class="btn btn-primary" id="action">Add</button>
									<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- /vertical form modal -->

                         <div id="admissionconfirm_modal" class="modal fade">
                              <div class="modal-dialog modal-lg">
                                   <div class="modal-content">
                                        <div class="modal-header bg-slate-400">
                                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                                             <h5 class="modal-title">CONFIRM ADMISSION</h5>
                                        </div>

                                        <form action="#" method="POST"  class="form-horizontal" id="confirm_enrolee" enctype="multipart/form-data">
                                            
                                             <div class="modal-body">
                                                  <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#view_a">A.Registration</a></li>
                                                    <li><a data-toggle="tab" href="#view_b">B. BIOMETRIC DATA (CLINIC/ NURSE)</a></li>
                                                  </ul>

                                                  <div class="tab-content">
                                                    <div id="view_a" class="tab-pane fade in active">
                                                       <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-12">
                                                                 <label>Gradelevel:</label>
                                                                 <strong><div id="yl_Name"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div>
                                                      <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-12">
                                                                 <label>Enrolee Name:</label>
                                                                 <strong><div id="fullname"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div>
                                                   <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-12">
                                                                 <label>Birthday:</label>
                                                                 <strong><div id="birthday"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div>

                                                   <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-6">
                                                                 <label>Age as of June this year:</label>
                                                                 <strong><div id="age"></div></strong>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                 <label>Sex:</label>
                                                                 <strong><div id="sex"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-12">
                                                                 <label>Complete Address:</label>
                                                                  <strong><div id="completeadd"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-12">
                                                                 <label>House:</label>
                                                                 <strong><div id="house"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-12">
                                                                 <label>Name of Parent or Guardian:</label>
                                                                  <strong><div id="guardianfullname"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div>  
                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-6">
                                                                 <label>Active Contact Number of Parent or (Graduation) Guardian:</label>
                                                                 <strong><div id="contact"></div></strong>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                 <label>(Alternate Number):</label>
                                                                 <strong><div id="altcontact"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div>   
                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-6">
                                                                 <label>Job or Work of Parent or Guardian:</label>
                                                                 <strong><div id="parentwork"></div></strong>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                 <label>To whom the student is staying or living with?:</label>
                                                                 <strong><div id="enrolee_living"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div> 
                                                    </div>
                                                    <div id="view_b" class="tab-pane fade">
                                                      
                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-6">
                                                                 <label>Height:</label>
                                                                 <strong><div id="enrolee_height"></div></strong>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                 <label>BMI status:</label>
                                                                 <strong><div id="admission_bmistat"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div> 
                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-6">
                                                                 <label>Weight:</label>
                                                                 <strong><div id="admission_weight"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div> 
                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-6">
                                                                 <label>Agree to end in school feeding program?:</label>
                                                                 <strong><div id="admission_FeedProgReason"></div></strong>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                 <label>Agree to take deworming tablets 2 times a year?:</label>
                                                                 <strong><div id="admission_DewormingReason"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div> 
                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-12">
                                                                 <label>Medical history / immunization Taken and Data</label>
                                                                 
                                                            </div>
                                                            <div class="col-sm-12">
                                                                 
                                                                 <table class="table table-bordered">
                                                                  <tbody>
                                                                       <tr>
                                                                            <td id="deceaseName1"></td>
                                                                            <td  id="medDeceaseDate1"></td>
                                                                       </tr>
                                                                       <tr>
                                                                            <td  id="deceaseName2"></td>
                                                                            <td  id="medDeceaseDate2"></td>
                                                                       </tr>
                                                                       <tr>
                                                                            <td  id="deceaseName3"></td>
                                                                            <td  id="medDeceaseDate3"></td>
                                                                       </tr>
                                                                       <tr>
                                                                            <td  id="deceaseName3"></td>
                                                                            <td  id="medDeceaseDate4"></td>
                                                                       </tr>
                                                                  </tbody>
                                                                 </table>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                 <strong><div id="admission_DewormingReason"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div>
                                                    </div>
                                                  </div>

                                                   
                                             </div>
                                             <div class="modal-footer">
                                               <input type="hidden" name="adconfirm_ID" id="adconfirm_ID" />
                                               <input type="hidden" name="operation" id="operation" value="confirm" />
                                               <a href="" class="btn btn-primary" id="confx">Confirm</a>
                                             <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                             </div>
                                        </form>
                                   </div>
                              </div>
                         </div>

 <script type="text/javascript" language="javascript" >
$(document).ready(function () {

	$("select[value]").each(function () {
		$(this).val(this.getAttribute('value'));
	});


	var dataTable = $('#admission_data').DataTable({
		"processing": true,
		"serverSide": true,
		"order": [],
		"ajax": {
			url: "datatable/admission/fetch.php",
			type: "POST"
		},
		"columnDefs": [{
			"targets": [0],
			"orderable": false,
		}, ],

	});

	$(document).on('submit', '#admission_form', function (event) {
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
          var admission_Status = $('#admission_Status').val();

		if (fname != '' && mname != '' && lname != '' && schl != '' && bday != '' && mobilenum != '' && email != '' && gender != '' && citizenship != ''&& admission_Status != '') {	
		$.ajax({
			url: "datatable/admission/insert.php",
			type: 'POST',
			data: new FormData(this),
			contentType: false,
			processData: false,
			success: function (data) {
				$('#action').text("Add");
				$('#operation').val("Add");

				alert(data);
				$('#admission_form')[0].reset();
				$('#admission_modal').modal('hide');
				dataTable.ajax.reload();
			}
		});
		
		} else {
			alert("Fields are Required");
		}
	});

	$(document).on('click', '.update', function () {
		var admission_ID = $(this).attr("id");
   
		$.ajax({
			url: "datatable/admission/fetch_single.php",
			type: "POST",
			data: {
				admission_ID: admission_ID
			},
               dataType:"json",
			success: function (data) {
				$('#admission_modal').modal('show');
                    $('#fname').prop("disabled", false);
                    $('#mname').prop("disabled", false);
                    $('#lname').prop("disabled", false);
                    $('#schl').prop("disabled", false);
                    $('#bday').prop("disabled", false);
                    $('#mobilenum').prop("disabled", false);
                    $('#email').prop("disabled", false);
                    $('#gender').prop("disabled", false);
                    $('#citizenship').prop("disabled", false);
                    $('#admission_Status').prop("disabled", false);
				$('#fname').val(data.admission_FName);
				$('#mname').val(data.admission_MName);
				$('#lname').val(data.admission_LName);
				$('#schl').val(data.admission_LSch);
				$('#bday').val(data.admission_Bday);
				$('#mobilenum').val(data.admission_MNum);
				$('#email').val(data.email);
				$('#gender').val(data.sex_ID).change();
				$('#citizenship').val(data.citizenship).change();
                    $('#admission_Status').val(data.admission_Status).change();
                    $('#action').show();
				$('#action').text("Edit");
				$('#operation').val("Edit");
				$('.modal-title').text("Edit Admission Info");
				$('#admission_ID').val(admission_ID);
                    
			}
		});
	});
	$(document).on('click', '.add', function () {  
          $('#fname').prop("disabled", false);
          $('#mname').prop("disabled", false);
          $('#lname').prop("disabled", false);
          $('#schl').prop("disabled", false);
          $('#bday').prop("disabled", false);
          $('#mobilenum').prop("disabled", false);
          $('#email').prop("disabled", false);
          $('#gender').prop("disabled", false);
          $('#citizenship').prop("disabled", false);
          $('#admission_Status').prop("disabled", false);
           $('#action').show();
		document.getElementById('admission_modal').reset();
	});
	 $(document).on('click', '.view', function () {
          var adconfirm_ID = $(this).attr("id");
   
          $('#confx').hide();
          $('.modal-title').text("VIEW ADMISSION");
          $.ajax({
               url: "datatable/admission/fetch_single_confirm.php",
               type: "POST",
               data: {
                    adconfirm_ID: adconfirm_ID
               },
               dataType:"json",
               success: function (data) {
                    $('#admissionconfirm_modal').modal('show');

                    $('#fullname').text(data.admission_Name);
                    $('#birthday').text(data.admission_bday);
                    $('#age').text(data.admission_age);
                    $('#house').text(data.admission_house);
                    $('#sex').text(data.sex_Name);
                    $('#completeadd').text(data.admission_address);
                    $('#contact').text(data.admission_contact);
                    $('#altcontact').text(data.admission_altcontact);
                    $('#guardianfullname').text(data.admission_parent);
                    $('#parentwork').text(data.admission_parentWork);
                    $('#enrolee_living').text(data.admission_living);
                    $('#enrolee_height').text(data.admission_height);
                    $('#enrolee_weight').text(data.admission_weight);
                    $('#admission_bmistat').text(data.admission_bmistat);
                    $('#admission_FeedProgReason').text(data.admission_FeedProgReason);
                    $('#admission_DewormingReason').text(data.admission_DewormingReason);
                    $('#admission_medDecease').text(data.admission_medDecease);
                    $('#admission_medDeceaseDate').text(data.admission_medDeceaseDate);
                    $('#yl_Name').text(data.yl_Name);
                    $('#deceaseName1').text(data.admission_medDecease[0]);
                    $('#deceaseName2').text(data.admission_medDecease[1]);
                    $('#deceaseName3').text(data.admission_medDecease[2]);
                    $('#deceaseName4').text(data.admission_medDecease[3]);
                    $('#medDeceaseDate1').text(data.admission_medDeceaseDate[0]);
                    $('#medDeceaseDate2').text(data.admission_medDeceaseDate[1]);
                    $('#medDeceaseDate3').text(data.admission_medDeceaseDate[2]);
                    $('#medDeceaseDate4').text(data.admission_medDeceaseDate[3]);
                    $('#adconfirm_ID').val(adconfirm_ID);


               }
          });

     });


     $(document).on('click', '.confirm', function () {
          var adconfirm_ID = $(this).attr("id");
   
          $.ajax({
               url: "datatable/admission/fetch_single_confirm.php",
               type: "POST",
               data: {
                    adconfirm_ID: adconfirm_ID
               },
               dataType:"json",
               success: function (data) {
                    $('#admissionconfirm_modal').modal('show');

                    $('#fullname').text(data.admission_Name);
                    $('#birthday').text(data.admission_bday);
                    $('#age').text(data.admission_age);
                    $('#house').text(data.admission_house);
                    $('#sex').text(data.sex_Name);
                    $('#completeadd').text(data.admission_address);
                    $('#contact').text(data.admission_contact);
                    $('#altcontact').text(data.admission_altcontact);
                    $('#guardianfullname').text(data.admission_parent);
                    $('#parentwork').text(data.admission_parentWork);
                    $('#enrolee_living').text(data.admission_living);
                    $('#enrolee_height').text(data.admission_height);
                    $('#enrolee_weight').text(data.admission_weight);
                    $('#admission_bmistat').text(data.admission_bmistat);
                    $('#admission_FeedProgReason').text(data.admission_FeedProgReason);
                    $('#admission_DewormingReason').text(data.admission_DewormingReason);
                    $('#admission_medDecease').text(data.admission_medDecease);
                    $('#admission_medDeceaseDate').text(data.admission_medDeceaseDate);
                    $('#yl_Name').text(data.yl_Name);
                    $('#deceaseName1').text(data.admission_medDecease[0]);
                    $('#deceaseName2').text(data.admission_medDecease[1]);
                    $('#deceaseName3').text(data.admission_medDecease[2]);
                    $('#deceaseName4').text(data.admission_medDecease[3]);
                    $('#medDeceaseDate1').text(data.admission_medDeceaseDate[0]);
                    $('#medDeceaseDate2').text(data.admission_medDeceaseDate[1]);
                    $('#medDeceaseDate3').text(data.admission_medDeceaseDate[2]);
                    $('#medDeceaseDate4').text(data.admission_medDeceaseDate[3]);
                    $('#adconfirm_ID').val(adconfirm_ID);
                 
                    $('.modal-title').text("CONFIRM ADMISSION");
                    $('#confx').show();
                    $('#operation').val("confirm");

               }
          });

     });

$(document).on('click', '#confx', function (event) {
    
     var adconfirm_ID = $("#adconfirm_ID").val();
     var operation = $("#operation").val();
       if (confirm("Confirm Enrolee?")) 
       {
         
          $.ajax({
                    url: "datatable/admission/insert.php",
                    type: "POST",
                    data: {
                         adconfirm_ID: adconfirm_ID
                    },
                    dataType:"json",
                    success: function (data) {
                        
                    }
          });
           alert("Success");
       }
       else{
            return false;
       }

});
	$(document).on('click', '.delete', function () {
		var admission_ID = $(this).attr('id');
		
		if (confirm("Are you sure you want to delete this?")) {
			$.ajax({
				url: "datatable/admission/delete.php",
				type: "POST",
				data: {
					admission_ID: admission_ID
				},
				success: function (data) {
					alert(data);
					dataTable.ajax.reload();
				}
			});
		} else {
			return false;
		}
	});


});
</script>