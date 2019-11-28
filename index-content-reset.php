		<div class="container">
             
           <div class="gradient-green" style="width: auto; padding: 20px;margin-top: 25px;">
              <h2>Reset</h2>
              <hr>
           </div>
           <br>
            <div class="row">
              <div class="col-sm-12">
                 <div class="card" style="min-height:200px;">
                    <div class="card-body">
                        <form class="form-horizontal" id="reset_form" method="POST">
                          <div class="form-group">
                            <label for="reset_pass">New password</label>
                            <input type="password" class="form-control" name="reset_pass" id="reset_pass" >
                          </div>
                          <div class="form-group">
                            <label for="reset_cpass">Confirm password</label>
                            <input type="password" class="form-control" name="reset_cpass" id="reset_cpass" >
                          </div>
                           <input type="hidden" name="operation" value="submit_resetpass">
                           <input type="hidden" name="user_ID" value="<?php echo $_REQUEST["user_ID"]?>">
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    
                 </div>
              </div>
           </div>
        </div>