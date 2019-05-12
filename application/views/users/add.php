<div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card">
                            <div class="header">
                                <a href="<?php echo base_url();?>users"><button class="btn btn-default"><i class="pe-7s-back"></i></button></a>
                                <h4 class="title">Add User</h4>
                            </div>
                            <div class="content">
                                <?php $attr = array( "class"=>"form-horizontal", "role" => "form", "id" => "myForm");?>
                              <?php echo form_open('', $attr);?>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                  <input type="text" name="name" class="form-control" placeholder="Name" required="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                  <input type="email" name="email" class="form-control" placeholder="Email" required="">
                                </div>
                              </div>
                             <div class="form-group">
                                <label class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                  <input type="text" name="address" class="form-control" placeholder="Address" required="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Contact</label>
                                <div class="col-sm-10">
                                  <input type="number" name="contact" class="form-control" placeholder="Contact" id="contact">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                  <input type="text" name="username" class="form-control" placeholder="Username" id="username" required="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                  <input type="password" name="password" class="form-control" placeholder="Password" id="password" required="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Confirm Password</label>
                                <div class="col-sm-10">
                                  <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" id="confirm_password" required="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">&nbsp;</label>
                                <div class="col-sm-10">
                                  <input type="submit" name="submit" value="Save" class="btn btn-primary" id="submit">
                                </div>
                              </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>

  <script src="<?php echo base_url();?>assets/plugins/jquery-validation/jquery.validate.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/jquery-validation/additional-methods.js"></script>
  <script type="text/javascript">
    // $(document).ready(function(){
    //   $('#submit').click(function(){
    //     $('#myForm').submit();
    //   });
    // });
    // jQuery.validator.setDefaults({
    //   debug: true,
    //   success: "valid"
    // });
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