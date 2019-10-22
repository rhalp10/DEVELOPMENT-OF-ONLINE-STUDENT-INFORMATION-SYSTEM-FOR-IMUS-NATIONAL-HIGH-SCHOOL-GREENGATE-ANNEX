        <div class="container">
          <!-- <div class="text-center">
             <img src="assets/img/logo/logo.png" class="" width="10%">
             </div> -->
           <div class="row">
              <div class="col-sm-4">
                 <div class="card" style="min-height:200px;">
                    <div class="card-header" style="background-color:#4caf50; color:white; text-align:center; min-height:75px;"></div>
                    <div class="card-body  text-center">
                       <img class="rounded-circle" src="assets/img/pie_chart-24px.svg" alt="Generic placeholder image" width="75" height="75" style="margin-top:-75px; border: solid 1px #4caf50; ">
                      <p>DEMOGRAPHIC</p>
                      <a class="btn btn-warning " href="index?page=demographic"> LEARN MORE</a>
                    </div>
                    
                 </div>
              </div>
               <div class="col-sm-4">
                 <div class="card" style="min-height:200px;">
                    <div class="card-header" style="background-color:#4caf50; color:white; text-align:center; min-height:75px;"></div>
                    <div class="card-body  text-center">
                      <img class="rounded-circle" src="assets/img/round_menu_book_white_18dp.png" alt="Generic placeholder image" width="75" height="75" style="margin-top:-75px; border: solid 1px #4caf50;">
                      
                 
                      <p>MISSION & VISSION</p>
                      <a class="btn btn-warning " href="index?page=mv"> LEARN MORE</a>
                    </div>
                    
                 </div>
              </div>
              <div class="col-sm-4">
                 <div class="card" style="min-height:200px;">
                    <div class="card-header" style="background-color:#4caf50; color:white; text-align:center; min-height:75px;"></div>
                    <div class="card-body  text-center">
                      <img class="rounded-circle" src="assets/img/directions_run-24px.svg" alt="Generic placeholder image" width="75" height="75" style="margin-top:-75px; border: solid 1px #4caf50;">
                      <p>ADMISSION PROCEDURES</p>
                      <a class="btn btn-warning"  href="index?page=admission_guidelines"> LEARN MORE</a>
                    </div>
                    
                 </div>
              </div>
           </div>
        </div>
        <br>
       
       
         <div class="gradient-green" style="width: auto; padding: 20px;margin-top: 25px;">
               <h1>RECENT NEWS</h1>
              <hr>
              <p>
                 Check out the latest news, event, and announcement here.
              </p>
           </div>
           
        <br>
           <div class="owl-carousel owl-theme">
            <?php 
              $auth_user->news_sample();
            ?>
          </div>
          <br>
          <div class="text-center">
           <a class="btn btn-warning "  href="index?page=news"> VIEW ALL NEWS</a>
           </div>
        
        <br>