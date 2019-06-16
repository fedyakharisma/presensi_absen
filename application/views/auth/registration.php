

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">

        <form class="user" method="post" action="<?= base_url('CrudController/registration'); ?>">
          <div class="form-group">
           
              <input type="text" id="name" name="name" class="form-control form-control-user" placeholder="Full name" value="<?= set_value('name'); ?>">
              <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          
           <div class="form-group">
          
              <input type="email" id="email" name="email" class="form-control form-control-user" placeholder="Email address" value="<?= set_value('email'); ?>">
              <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                
                  <input type="password" id="password1" name="password1" class="form-control" placeholder="password" >
                 <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="col-md-6">
               
                  <input type="password" id="password2"  name="password2" class="form-control" placeholder="Confirm password" >
                  
              </div>
            </div>
          </div>
         <button type="submit" class="btn btn-primary btn-user btn-block"> Register </button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo base_url('CrudController/index'); ?>">Login Page</a>
          
        </div>
      </div>
    </div>
  </div>

  