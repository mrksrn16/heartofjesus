<div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card">
                            <div class="header">
                                <a href="<?php echo base_url();?>baptist"><button class="btn btn-default"><i class="pe-7s-back"></i></button></a>
                                <h4 class="title">Add Baptist Form</h4>
                            </div>
                            <div class="content">
                                <?php $attr = array( "class"=>"form-horizontal", "role" => "form", "id" => "myForm");?>
                              <?php echo form_open('', $attr);?>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Child Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="child_name" class="form-control" placeholder="Child Name" required="">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Birthday</label>
                                                <div class="col-sm-9">
                                                  <input type="date" name="birthday" class="form-control" required="">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Birth Place</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="birthplace" class="form-control" placeholder="Birth Place">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Father's Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="father" class="form-control" placeholder="Father's Name" required="">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Father's Birth Place</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="father_birth_place" class="form-control" placeholder="Father's Birth Place">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Mother's Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="mother" class="form-control" placeholder="Mother's Name" required="">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Mother's Birth Place</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="mother_birth_place" class="form-control" placeholder="Mother's Birth Place">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Married at</label>
                                                <div class="col-sm-9">
                                                  <input type="radio" name="married_at" value="Church">Church <input type="radio" name="married_at" value="Civil">Civil
                                                  <input type="radio" name="married_at" value="Not married">Not married
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Current Address</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="current_address" placeholder="Current Address" class="form-control" required="">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Date of Baptism</label>
                                                <div class="col-sm-9">
                                                  <input type="date" name="date_of_baptism" class="form-control" required="" value="<?php if($date){echo $date;}?>" id="date_of_event">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Time of Baptism</label>
                                                <div class="col-sm-9">
                                                  <!-- <input type="time" name="time" class="form-control" required="" value="" required="" id="time_of_event"> -->
                                                  <select  name="time" class="form-control" id="time_of_event">
                                                      <option value="">-- Select time --</option>    
                                                      <option value="11:00-12:00">11 am to 12 pm</option>
                                                      <option value="13:00-14:00">1 pm to 2 pm</option>
                                                      <option value="14:00-15:00">2 pm to 3 pm</option>
                                                  </select>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Name of Priest</label>
                                                <div class="col-sm-9">
                                                  <!-- <input type="text" name="name_of_priest" class="form-control" placeholder="Name of Priest" required=""> -->
                                                  <select class="form-control" name="name_of_priest" id="name_of_priest">
                                                        <!-- <?php if($priests) : foreach($priests as $priest) :?>
                                                            <option value="<?php echo $priest->name;?>"><?php echo $priest->name;?></option>
                                                        <?php endforeach; endif;?> -->
                                                  </select>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">God Father</label>
                                                <div class="col-sm-9">
                                                  &nbsp;
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="god_father_name" class="form-control" placeholder="Name">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Address</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="god_father_address" class="form-control" placeholder="Address">
                                                </div>
                                              </div>
                                        </div>
                                    </div><div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">God Mother</label>
                                                <div class="col-sm-9">
                                                 &nbsp;
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="god_mother_name" class="form-control" placeholder="Name">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Address</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="god_mother_address" class="form-control" placeholder="Address">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <center>Other God Father</center>
                                            <input type="text" name="other_god_father" class="form-control" placeholder="Other God Father"><br>
                                            <input type="text" name="other_god_father2" class="form-control" placeholder="Other God Father"><br>
                                            <input type="text" name="other_god_father3" class="form-control" placeholder="Other God Father"><br>
                                            <input type="text" name="other_god_father4" class="form-control" placeholder="Other God Father"><br>
                                            <input type="text" name="other_god_father5" class="form-control" placeholder="Other God Father"><br>
                                        </div>
                                        <div class="col-md-6">
                                            <center>Other God Mother</center>
                                            <input type="text" name="other_god_mother" class="form-control" placeholder="Other God Mother"><br>
                                            <input type="text" name="other_god_mother2" class="form-control" placeholder="Other God Mother"><br>
                                            <input type="text" name="other_god_mother3" class="form-control" placeholder="Other God Mother"><br>
                                            <input type="text" name="other_god_mother4" class="form-control" placeholder="Other God Mother"><br>
                                            <input type="text" name="other_god_mother5" class="form-control" placeholder="Other God Mother"><br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                        <fieldset>
                                            <legend>Requirements</legend>
                                            <input type="checkbox" name="marriage_contract" value="ok">Marriage Contract <br>
                                            <input type="checkbox" name="marriage_contract" value="ok">Birth Certificate <br>
                                            <input type="checkbox" name="registration_fee" value="ok">Registration Fee (200) <br>
                                        </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
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
        var time_of_event   , date_of_event;
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