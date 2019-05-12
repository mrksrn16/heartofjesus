<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Heart of Jesus and Mary Parish</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url();?>assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'> -->
    <link href="<?php echo base_url();?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <!--  Custom CSS    -->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet"/>


    <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
</head>
<body style="background: #f5f5f5;">

<div class="wrapper">
    <div class="login-form">
        <center><img src="<?php echo base_url();?>assets/img/logo.png" style="width: 200px;"></center>
        <h3><center>Heart of Jesus and Mary Parish - Login</center></h3> <br>
        <?php $attributes = array('class' => 'form-horizontal', 'role' => 'form', 'id' => 'myForm');?>
        <?php echo form_open('' , $attributes); ?>
          <?php if($message) :?>
          <div style="" class="msg">
              <p><?php echo $message;?></p>
          </div>
        <?php endif; ?>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Enter email" name="email" required="">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Send</button> <br><br><br>
              <a href="<?php echo base_url();?>user/login">Back</a>
            </div>
        </form>
    </div>
</div>


</body>
<script src="<?php echo base_url();?>assets/plugins/jquery-validation/jquery.validate.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-validation/additional-methods.js"></script>
<script type="text/javascript">
  $( "#myForm" ).validate({
    rules : {
      // username : {
      //   required: true,
      //   maxlength: 10
      // }
    }
  });
</script>
</html>
