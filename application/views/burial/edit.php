<div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card">
                            <div class="header">
                                <a href="<?php echo base_url();?>burial"><button class="btn btn-default"><i class="pe-7s-back"></i></button></a>
                                <h4 class="title">Edit Burial - No. <?php echo $burial->id;?></h4>
                            </div>
                            <div class="content">
                                <?php $attr = array( "class"=>"form-horizontal", "role" => "form");?>
                              <?php echo form_open('', $attr);?>
                                <div class="form-group">
                                <label class="col-sm-2 control-label">Date</label>
                                <div class="col-sm-10">
                                  <input type="date" name="date" class="form-control" required="" value="<?php echo $burial->date;?>" id="date_of_event">
                                </div>
                              </div>
                              <div class="">
                                <label class="col-sm-2 control-label">Start</label>
                                <div class="col-sm-4">
                                  <input type="time" name="time" class="form-control" required="" value="<?php echo $burial->time;?>" required id="time_of_event">
                                </div>
                              </div>
                              <div class="">
                                <label class="col-sm-2 control-label">End</label>
                                <div class="col-sm-4">
                                  <input type="time" name="end_time" class="form-control" required="" value="<?php echo $burial->end_time;?>" required="" id="">
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
                                <label class="col-sm-2 control-label">Name of Death Person</label>
                                <div class="col-sm-10">
                                  <input type="text" name="death_person" class="form-control" placeholder="Name of Death Person" required="" value="<?php echo $burial->death_person;?>">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="col-sm-2 control-label">Cause of Death</label>
                                <div class="col-sm-10">
                                  <input type="text" name="cause_of_death" class="form-control" placeholder="Cause of Death" value="<?php echo $burial->cause_of_death;?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Date of Death</label>
                                <div class="col-sm-10">
                                  <input type="date" name="dod" class="form-control" required="" value="<?php echo $burial->dod;?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Date of Birth</label>
                                <div class="col-sm-10">
                                  <input type="date" name="dob" class="form-control" required="" value="<?php echo $burial->dob;?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Requirements</label>
                                <div class="col-sm-10">
                                  <input type="checkbox" name="death_certificate" value="ok" <?php if($burial->death_certificate == 'ok') { echo 'checked'; }?>> Death Certificate
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
    $( "#myForm" ).validate({
     
    });
    $(document).ready(function(){
        var time_of_event = $('#time_of_event').val();
        var date_of_event = $('#date_of_event').val();
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

        var priest = "<?php echo $burial->priest;?>";
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