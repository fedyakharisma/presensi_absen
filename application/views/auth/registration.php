
<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form class="user">
          <div class="form-group" method="post" action="<?=base_url('CrudController/registration'); ?>">
            
             
             
           
          </div>
          <div class="form-group">
            <div class="form group">
              <input type="text" id="name" name="name" class="form-control form-control-user" placeholder="Full name">
              
              <?= form_error('name', '<small class = "text-danger pl-3>','</small>'); ?>
            </div>
          </div>
           <div class="form-group">
          
              <input type="text" id="email" name="email" class="form-control" placeholder="Email address" >
              
            
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                
                  <input type="password" id="password1" name="password1" class="form-control" placeholder="password" required="required">
                 
              </div>
              <div class="col-md-6">
               
                  <input type="password" id="password2"  name="password2" class="form-control" placeholder="Confirm password" required="required">
                  
              </div>
            </div>
          </div>
         <button type="submit" class="btn btn-primary btn-user btn-block"> Register </button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php base_url('CrudController/index'); ?>">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  