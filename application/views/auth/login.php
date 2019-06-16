



  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login Admin</div>
      <div class="card-body">
        <?= $this->session->flashdata('message'); ?>
         <form class="user" method="post" action="<?= base_url('CrudController/index'); ?>">
          <div class="form-group">
              <input type="text" id="email" class="form-control form-control-user" name="email" placeholder="Email address">
              <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
             
          </div>
          <div class="form-group">
           
              <input type="password" id="password" class="form-control form-control-user" name="password" placeholder="Password">
             <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          
          <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
      
       </form> 
        <div class="text-center">
          <a class="d-block small mt-3" href="<?= base_url('CrudController/registration'); ?>">Register an Account</a>
          
        </div>
      </div>
    </div>
  </div>
