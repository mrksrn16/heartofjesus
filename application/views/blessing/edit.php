<div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card">
                            <div class="header">
                                <a href="<?php echo base_url();?>blessing"><button class="btn btn-default"><i class="pe-7s-back"></i></button></a>
                                <h4 class="title">Edit Blessing - No. <?php echo $blessing->id;?></h4>
                            </div>
                            <div class="content">
                                <?php $attr = array( "class"=>"form-horizontal", "role" => "form");?>
                              <?php echo form_open('', $attr);?>
                                <div class="form-group">
                                <label class="col-sm-2 control-label">Date</label>
                                <div class="col-sm-10">
                                  <input type="date" name="date" class="form-control" required="" value="<?php echo $blessing->date;?>" id="date_of_event">
                                </div>
                              </div>
                              <div class="">
                                <label class="col-sm-2 control-label">Start</label>
                                <div class="col-sm-4">
                                  <input type="time" name="time" class="form-control" required="" value="<?php echo $blessing->time;?>" id="time_of_event">
                                </div>
                              </div>
                               <div class="">
                                <label class="col-sm-2 control-label">End</label>
                                <div class="col-sm-4">
                                  <input type="time" name="end_time" class="form-control" required="" value="<?php echo $blessing->end_time;?>" id="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Name of Priest</label>
                                <div class="col-sm-10">
                                  <select class="form-control" name="name_of_priest" id="name_of_priest">
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                  <input type="text" name="name" class="form-control" placeholder="Name" required="" value="<?php echo $blessing->name;?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Age</label>
                                <div class="col-sm-10">
                                  <input type="number" name="age" class="form-control" placeholder="Age" required="" value="<?php echo $blessing->age;?>">
                                </div>
                              </div>
                             <div class="form-group">
                                <label class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                  <input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo $blessing->address;?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Contact</label>
                                <div class="col-sm-10">
                                  <input type="number" name="contact" class="form-control" placeholder="Contact" value="<?php echo $blessing->contact;?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">&nbsp;</label>
                                <div class="col-sm-10">
                                  <input type="submit" name="submit" value="Save" class="btn btn-primary">
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
        bride_contact: {
          required: true,
          maxlength: 11
        },
        broom_contact : {
          required: true,
          maxlength: 11
        }
      }
    });
    $(document).ready(function(){
        var time_of_event = $('#time_of_event').val();
        var date_of_event = $('#date_of_event').val();
        var priest = "<?php echo $blessing->priest;?>";
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>priests/get_priest",
            data:{ date_of_event:date_of_event, time_of_event:time_of_event },
            dataType: "JSON",
            success: function(data){
                //alert(data.result[0]['name']);
                if(data.result){
                    selOpts = "";
                    for(var i = 0; i < data.result.length; i++){
                        selected = "";
                        if(data.result[i]['name'] == priest){
                          selected = "selected";
                        }
                        selOpts += "<option value='"+data.result[i]['name']+"' "+selected+">"+data.result[i]['name']+"</option>";
                    }
                    $('#name_of_priest').append(selOpts);
                }else{
                   alert('No priest available/found'); 
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                // alert('No priest available/found');
            }
        });

        $('#date_of_event').change(function(){
            date_of_event = $(this).val();
            if(time_of_event && date_of_event){
                $('#name_of_priest option').remove();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>priests/get_priest",
                    data:{ date_of_event:date_of_event, time_of_event:time_of_event },
                    dataType: "JSON",
                    success: function(data){
                        //alert(data.result[0]['name']);
                        if(data.result){
                            selOpts = "";
                            for(var i = 0; i < data.result.length; i++){
                                selOpts += "<option value='"+data.result[i]['name']+"'>"+data.result[i]['name']+"</option>";
                            }
                            $('#name_of_priest').append(selOpts);
                        }else{
                           alert('No priest available/found'); 
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        // alert('No priest available/found');
                    }
                });
            }
        });
        $('#time_of_event').change(function(){
            time_of_event = $(this).val();
            if(time_of_event && date_of_event){
                $('#name_of_priest option').remove();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>priests/get_priest",
                    data:{ date_of_event:date_of_event, time_of_event:time_of_event },
                    dataType: "JSON",
                    success: function(data){
                        //alert(data.result[0]['name']);
                        if(data.result){
                            selOpts = "";
                            for(var i = 0; i < data.result.length; i++){
                                
                                selOpts += "<option value='"+data.result[i]['name']+"'>"+data.result[i]['name']+"</option>";
                            }
                            $('#name_of_priest').append(selOpts);
                        }else{
                           alert('No priest available/found'); 
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        // alert('No priest available/found');
                    }
                });
            }
        });
    });
  </script>