



  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login Admin</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <form class="user">
            
              <input type=text id="email" class="form-control" name="email" placeholder="Email address" required="required" autofocus="autofocus">
             
          </div>
          <div class="form-group">
           
              <input type="password" id="password" class="form-control" name="password" placeholder="Password" required="required">
             
          </div>
          <div class="form-group">
            <div class="checkbox">
             
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
         
       </form> 
        <div class="text-center">
          <a class="d-block small mt-3" href="<?= base_url('CrudController/registration'); ?>">Register an Account</a>
          
        </div>
      </div>
    </div>
  </div>
