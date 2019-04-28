<?php 
include('../dbconfig.php');
$admission_ID = $_REQUEST['admission_ID'];

$sql = "SELECT * FROM `admission_files` af 
LEFT JOIN ref_requirements rr ON af.req_ID = rr.req_ID
WHERE af.admission_ID = $admission_ID
";
$result = mysqli_query($con, $sql);
$file_Name = array();
$req_ID = "";
while($row = mysqli_fetch_array($result))
{
   $req_ID  =  $row["req_ID"];
   $file_Name[$req_ID] =  $row["file_Name"];
}


function check_file($file_Name){
  if (!empty($file_Name)) {

   echo ' class="btn btn-success" href="../assets/uploads/'.$file_Name.'" download';
  }
  else{
   echo ' class="btn btn-danger" href="#" download disabled=""';
  }
}
?>
<div class="row">
                              <div class="col-lg-5 col-lg-offset-4 col-sm-6 col-sm-offset-3">

                                        <div class="row">
                                             <div class="col-sm-12">
                                               <div class="form-group">
                                                   <a  <?php 

                                                   if (isset($file_Name[1])) {
                                                        check_file($file_Name[1]);
                                                   }
                                                   else{
                                                     check_file('');
                                                   }


                                                   ?>><i class="icon-download" ></i></a>
                                                 <label for="rcard">Report Card</label>
                                                 
                                               </div>
                                               <div class="form-group">
                                                  <a   <?php 

                                                   if (isset($file_Name[2])) {
                                                        check_file($file_Name[2]);
                                                   }
                                                   else{
                                                     check_file('');
                                                   }


                                                   ?>><i class="icon-download" ></i></a>
                                                 <label for="bcert">Photocopy of Birth Certificate</label>
                                                
                                               </div>

                                               <div class="form-group">
                                                <a  <?php 

                                                   if (isset($file_Name[3])) {
                                                        check_file($file_Name[3]);
                                                   }
                                                   else{
                                                     check_file('');
                                                   }


                                                   ?>><i class="icon-download" ></i></a>
                                                 <label for="pic1x1">1x1 ID Picture</label>
                                                 
                                               </div>

                                               <div class="form-group">
                                                  <a   <?php 

                                                   if (isset($file_Name[4])) {
                                                        check_file($file_Name[4]);
                                                   }
                                                   else{
                                                     check_file('');
                                                   }


                                                   ?>><i class="icon-download" ></i></a>
                                                 <label for="gmoralcert">Good Moral Certificate</label>
                                                
                                               </div>

                                               <div class="form-group">
                                                 <a   <?php 

                                                   if (isset($file_Name[5])) {
                                                        check_file($file_Name[5]);
                                                   }
                                                   else{
                                                     check_file('');
                                                   }


                                                   ?>><i class="icon-download" ></i></a>
                                                 <label for="brgyclrnc">Barangay Clearance</label>
                                                 
                                               </div>
                                                <div class="form-group">
                                                  <a   <?php 

                                                   if (isset($file_Name[6])) {
                                                        check_file($file_Name[6]);
                                                   }
                                                   else{
                                                     check_file('');
                                                   }


                                                   ?>><i class="icon-download" ></i></a>
                                                 <label for="financial">Financial Assessment (from private school)</label>
                                                 
                                               </div>
                                             </div>
                                        </div>
                              </div>
                         </div>
