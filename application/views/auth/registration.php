

  <div class="container">
   <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
   	<div class="card body p-0">
   		<div class="row">
   			<div class="col-lg">
   				<div class="p-5">
   					<div class="text-center">
   						<h1 class="h4 text-gray-900 mb-4"> create akun</h1>
   					</div>
   					<form class="user" method="post" action="<?= base_url('CrudController/registration') ?>">
   						
   						<div class="form-group">
   							<input type="text" name="name" id="name" class="form-control form-control-user" placeholder="Fullname" >
   							<?= form_error('name','<small class="text-danger pl-3 ">','</small>');?>
   						</div>
   						<div class="form-group">
   							<input type="text" name="email" id="email" class="form-control" placeholder="Email Adress" >
   							<?= form_error('email','<small class="text-danger pl-3 ">','</small>');?>
   						</div>
   						<div class="form-group row">
   						<div class="col-sm-6 mb-3 mb-sm-0">
   							<input type="password" name="password1" id="password1" class="form-control form-control-user" placeholder="password">
   						<?= form_error('password1','<small class="text-danger pl-3 ">','</small>');?>
   						</div>
   						<div class="col-sm-6">
   							<input type="password" name="password2" id="password2" class="form-control form-control-user" placeholder="password">
   					
   						</div>
   					</div>
   					<button type="submit" class="btn btn-primary btn-user btn-block" >Register</button>
   					</form>
   					<hr>
   					<div class="text-center">
   						<a class="small" href="forgot-pass.html"> forgot password</a>
   					</div>
   					<div class="text-center">
   						<a class="small" href="<?php echo base_url('CrudController/index'); ?>"> Already Login
   					</div>
   					

   				</div>
   			</div>
   			

   		</div>
   		
   	</div>
   	
   </div>
          