		<div class="container">
             
           <div class="gradient-green" style="width: auto; padding: 20px;margin-top: 25px;">
            <?php 
            $gas =  $auth_user->get_active_sem();  

             foreach($gas as $sem)
             {
               $active_sem_ID =  $sem["sem_ID"];
               $sem_year =  $sem["sem_year"];
             }
            ?>
              <h2>Academic Staff <span class="float-right"><?php echo 'SY:('.$sem_year.')'?></span></h2>
              <hr>
           </div>
           <br>
          
            <div class="row">  
            <?php
            
            $gass =   $auth_user->get_active_sem_subject($active_sem_ID); 
            foreach($gass as $faculty)
             {
                $active_subject_ID =  $faculty["subject_ID"];
                $subject_Title =  $faculty["subject_Title"];
               ?>
                <div class="col-sm-6" style="padding-bottom:10px;">
                   <div class="card" style="min-height:200px;">
                     <div class="card-header" style="background-color:#4caf50; color:white; text-align:center;"><?php  echo $subject_Title?></div>
                      <div class="card-body" style="padding:0px;">
                        <table class="table table-bordered">
                          <thead>
                          <tr><th>Name</th>
                          <th>Position</th>
                          </tr></thead>
                          <tbody>
                            <?php 
                              $gassf = $auth_user->get_active_sem_subject_faculty($active_subject_ID); 
                              foreach($gassf as $member)
                              {
                                if ($member["suffix"] == "N/A"){
                                  $msuffix = "";
                                }
                                else{
                                   $msuffix = $member["suffix"];
                                }
                                ?>
                                <tr>
                                <td><?php echo $member["rid_FName"].' '.$member["rid_MName"].'. '.$member["rid_LName"].' '.$msuffix;?></td>
                                <td class="text-center"><?php echo $member["pos_Name"]?></td>
                                </tr>
                                <?php
                              }
                            ?>
                          </tbody>
                        </table>
                        
                      </div>
                      
                   </div>
                </div>
               <?php
             } 
            
             ?>
           </div>
        </div>
