
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
													<label>Citizenship</label>
													<select class="select"  name="citizenship" id="citizenship">
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
                    $('#fname').prop("disabled", true);
                    $('#mname').prop("disabled", true);
                    $('#lname').prop("disabled", true);
                    $('#schl').prop("disabled", true);
                    $('#bday').prop("disabled", true);
                    $('#mobilenum').prop("disabled", true);
                    $('#email').prop("disabled", true);
                    $('#gender').prop("disabled", true);
                    $('#citizenship').prop("disabled", true);
                    $('#admission_Status').prop("disabled", true);

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
                    $('#action').text("Edit");
                    $('#operation').val("Edit");
                    $('.modal-title').text("View Admission Info");
                    $('#action').hide();
                    $('#admission_ID').val(admission_ID);
               }
          });

	});

	$(document).on('click', '.delete', function () {
		var admission_ID = $(this).attr('id');
		console.log(admission_ID);
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