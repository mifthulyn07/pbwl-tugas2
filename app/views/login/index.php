<!-- MAIN -->

<main style="max-width:800px; margin:10px auto;">

     <!-- FLASHER  -->

     <div class="row">
          <div class="col">
               <?php Flasher::flash(); ?>
          </div>
     </div>

     <!-- CARD TABLE -->

     <div class="card" style="background-color:#334756; margin:20px;">
          <div class="card-header" style="background-color:#2C394B; font-weight:bold;">
               Login
          </div>
          <div class="card-body">

               <!-- FORM LOGIN  -->

               <form action="<?php echo BASEURL; ?>/login/run" method="POST">
                    <div class="mb-3 row">
                         <label for="username" class="col-sm-3 col-form-label">Username</label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" id="user_email" name="user_email">
                         </div>
                    </div>
                    <div class="mb-3 row">
                         <label for="password" class="col-sm-3 col-form-label">Password</label>
                         <div class="col-sm-9">
                              <input type="password" class="form-control" id="user_password" name="user_password">
                         </div>
                    </div>
                    <div class="mb-3 row">
                         <button type="submit" class="btn btn-primary col-sm-2" style="background-color: #FF4C29; border: 1px solid #FF4C29; margin-left:12px;">Login</button>
                    </div>
               </form>
          </div>
     </div>
</main>