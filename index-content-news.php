

<?php 
  if (isset($_REQUEST['content'])) {
    $news_ID =$_REQUEST['content'];
    $auth_user->news_index($news_ID);  
  }
  else{
?>
        <div class="container">
             
           <div class="gradient-green" style="width: auto; padding: 20px;margin-top: 25px;">
              <h2>News Overview</h2>
              <hr>
              <p>
                 Learn more about Imus National High School Greengate Annex by keeping tabs on events, achievements, and special announcements of the School.
              </p>
           </div>
           <br>
           <div class="row" >
              <div class="col-sm-12" style="padding-bottom:10px;">
               <div class="card" >
                  <div class="card-body" >
                    <table class="table table-striped table-sm" id="news_data">
                      <thead>
                        <tr>
                          <!-- <th  width="5%" >#</th> -->
                          <th>Title</th>
                          <th  width="20%" >Date</th>
                          <!-- <th  width="20%" >Semester</th> -->
                          <th  width="10%" >Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                 
                      </tbody>
                    </table>
                  </div>
               </div>
              </div>
            
           </div>
           <br>
        </div>
<?php
  }
?>