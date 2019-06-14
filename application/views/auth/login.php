  <div class="container">
   <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
    <div class="card body p-0">
      <div class="row">
        <div class="col-lg">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4"> login</h1>
            </div>
             <?= $this->session->flashdata('message'); ?>
            <form class="user" method="post" action="<?= base_url('CrudController') ?>">
              
              <div class="form-group row">
                
                <input type="text" name="email" id="email" class="form-control " placeholder="email">
                <?= form_error('name','<small class="text-danger pl-3 ">','</small>');?>
              </div>
              <div class="form-group row">
              
                <input type="password" name="password" id="password" class="form-control" placeholder="password">
              <?= form_error('password','<small class="text-danger pl-3 ">','</small>');?>
             
              
            </div>
           <button class="btn btn-primary btn-block" type="submit">Login</button>
            </form>
            <hr>
           
            <div class="text-center">
                <a class="d-block small mt-3" href="<?php echo base_url('registration'); ?>">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            </div>
            

          </div>
        </div>
        

      </div>
      
    </div>
    
   </div>
          


-------<!--  -->
-------
<!--  -->