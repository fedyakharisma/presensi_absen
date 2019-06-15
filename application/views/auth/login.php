

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login Admin</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type=text id="email" class="form-control" name="email" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="password" class="form-control" name="password" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
             
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
         
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo base_url('CrudController/registration'); ?>">Register an Account</a>
          
        </div>
      </div>
    </div>
  </div>
