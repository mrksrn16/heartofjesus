<center><h1>PERSONAL INFORMATION</h1></center>
<?php $attr = array("id" => "myForm");?>
<?php echo form_open('', $attr);?>
<table class="table table-striped">
	<?php 
		$employee = $this->user_m->get_user_info_by_id($user->id);
	?>
	<tr>
		<th style="width: 30%">Name</th>
		<td><input type="text" class="form-control" name="name" value="<?php echo $employee->name;?>" required></td>
	</tr>
	<tr>
		<th style="width: 30%">Email</th>
		<td><input type="text" class="form-control" name="email" value="<?php echo $user->email;?>" required></td>
	</tr>
	<tr>
		<th style="width: 30%">Address</th>
		<td><input type="text" class="form-control" name="address" value="<?php echo $employee->address;?>" required></td>
	</tr>
	<tr>
		<th style="width: 30%">Contact Number</th>
		<td><input type="text" class="form-control" name="contact" value="<?php echo $employee->contact;?>" id="contact" required></td>
	</tr>
	<tr>
		<th style="width: 30%">Username</th>
		<td><input type="text" class="form-control" name="username" value="<?php echo $user->username;?>" id="username" required></td>
	</tr>
	<tr>
		<th style="width: 30%">Password</th>
		<td><input type="password" class="form-control" name="password" placeholder="Password" id="password"><td>
		<input type="hidden" name="old_password" value="<?php echo $user->password;?>">
	</tr>
	<tr>
		<th style="width: 30%">Confirm Password</th>
		<td><input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" id="confirm_password"><td>
	</tr>
	<tr>
		<td colspan="2">
			<center>
				<input type="submit" class="btn btn-primary" name="submit" id="submit" value="Save">
			</center>
		</td>
	</tr>
</table>
</form>
<script src="<?php echo base_url();?>assets/plugins/jquery-validation/jquery.validate.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-validation/additional-methods.js"></script>
<script type="text/javascript">
	 $( "#myForm" ).validate({
      rules: {
        username : {
          required: true,
          maxlength: 20
        },
        contact: {
          required: true,
          maxlength: 11
        }
      }
    });
	$(document).ready(function(){
	   $("#confirm_password").keyup(throttle(function(){
	      if($(this).val() != $("#password").val()){
	        $("#submit").prop('disabled', true);
	      }else{
	        $("#submit").prop('disabled', false);
	      }
	   }));
	    $("#password").keyup(throttle(function(){
	      if($(this).val() != $("#confirm_password").val()){
	        $("#submit").prop('disabled', true);
	      }else{
	        $("#submit").prop('disabled', false);
	      }
	   }));
	});
   function throttle(f, delay){
      var timer = null;
      return function(){
        var context = this, args = arguments;
        clearTimeout(timer);
        timer = window.setTimeout(function() {
          f.apply(context, args);
        },
        delay || 100);
      }
    };
</script>