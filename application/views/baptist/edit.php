<div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card">
                            <div class="header">
                                <a href="<?php echo base_url();?>baptist"><button class="btn btn-default"><i class="pe-7s-back"></i></button></a>
                                <h4 class="title">Edit Baptist - No. <?php echo $baptist->id;?></h4>
                            </div>
                            <div class="content">
                                <?php $attr = array( "class"=>"form-horizontal", "role" => "form");?>
                              <?php echo form_open('', $attr);?>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Child Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="child_name" class="form-control" placeholder="Child Name" required="" value="<?php echo $baptist->child_name?>">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Birthday</label>
                                                <div class="col-sm-9">
                                                  <input type="date" name="birthday" class="form-control" required="" value="<?php echo $baptist->birthday?>">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Birth Place</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="birthplace" class="form-control" placeholder="Birth Place" value="<?php echo $baptist->birthplace?>">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Father's Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="father" class="form-control" placeholder="Father's Name" required="" value="<?php echo $baptist->father;?>">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Father's Birth Place</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="father_birth_place" class="form-control" placeholder="Father's Birth Place" value="<?php echo $baptist->father_birth_place;?>">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Mother's Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="mother" class="form-control" placeholder="Mother's Name" required="" value="<?php echo $baptist->mother;?>">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Mother's Birth Place</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="mother_birth_place" class="form-control" placeholder="Mother's Birth Place" value="<?php echo $baptist->mother_birth_place;?>">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Married at</label>
                                                <div class="col-sm-9">
                                                  <input type="radio" name="married_at" value="Church" <?php if($baptist->married_at == 'Church'){ echo 'checked'; }?>>Church <input type="radio" name="married_at" value="Civil" <?php if($baptist->married_at == 'Civil'){ echo 'checked'; }?>>Civil
                                                  <input type="radio" name="married_at" value="Not married" <?php if($baptist->married_at == 'Not married'){ echo 'checked'; }?>>Not married
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Current Address</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="current_address" placeholder="Current Address" class="form-control" required="" value="<?php echo $baptist->current_address;?>">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Date of Baptism</label>
                                                <div class="col-sm-9">
                                                  <input type="date" name="date_of_baptism" class="form-control" required="" value="<?php echo $baptist->date_of_baptism;?>" id="date_of_baptism">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Time of Baptism</label>
                                                <div class="col-sm-9">
                                                    <select  name="time" class="form-control" id="time_of_baptism">
                                                      <option value="">-- Select time --</option>    
                                                      <option value="11:00-12:00" <?php if($baptist->time == '11:00-12:00'){ echo 'selected'; }?>>11 am to 12 pm</option>
                                                      <option value="13:00-14:00" <?php if($baptist->time == '13:00-14:00'){ echo 'selected'; }?>>1 pm to 2 pm</option>
                                                      <option value="14:00-15:00" <?php if($baptist->time == '14:00-15:00'){ echo 'selected'; }?>>2 pm to 3 pm</option>
                                                  </select>
                                                  <!-- <input type="time" name="time" class="form-control" required="" value="<?php echo $baptist->time;?>" id="time_of_baptism"> -->
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Name of Priest</label>
                                                <div class="col-sm-9">
                                                  <!-- <input type="text" name="name_of_priest" class="form-control" placeholder="Name of Priest" required="" value="<?php echo $baptist->name_of_priest;?>"> -->
                                                    <select class="form-control" name="name_of_priest" id="name_of_priest">
                                                            <?php if($priests) : foreach($priests as $priest) :?>
                                                                <option value="<?php echo $priest->name;?>" <?php if($baptist->name_of_priest == $priest->name) { echo 'selected'; } ?> style="display: <?php if($baptist->name_of_priest == $priest->name){echo 'block'; }else{ echo 'none'; }?>"><?php echo $priest->name;?></option>
                                                            <?php endforeach; endif;?>
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
                                                  <input type="text" name="god_father_name" class="form-control" placeholder="Name" value="<?php echo $baptist->god_father_name;?>">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Address</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="god_father_address" class="form-control" placeholder="Address" value="<?php echo $baptist->god_father_address;?>">
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
                                                  <input type="text" name="god_mother_name" class="form-control" placeholder="Name" value="<?php echo $baptist->god_mother_name;?>">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Address</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="god_mother_address" class="form-control" placeholder="Address" value="<?php echo $baptist->god_mother_address;?>">
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <center>Other God Father</center>
                                            <input type="text" name="other_god_father" class="form-control" placeholder="Other God Father" value="<?php echo $baptist->other_god_father;?>"><br>
                                            <input type="text" name="other_god_father2" class="form-control" placeholder="Other God Father" value="<?php echo $baptist->other_god_father2;?>"><br>
                                            <input type="text" name="other_god_father3" class="form-control" placeholder="Other God Father" value="<?php echo $baptist->other_god_father3;?>"><br>
                                            <input type="text" name="other_god_father4" class="form-control" placeholder="Other God Father" value="<?php echo $baptist->other_god_father4;?>"><br>
                                            <input type="text" name="other_god_father5" class="form-control" placeholder="Other God Father" value="<?php echo $baptist->other_god_father5;?>"><br>
                                        </div>
                                        <div class="col-md-6">
                                            <center>Other God Mother</center>
                                            <input type="text" name="other_god_mother" class="form-control" placeholder="Other God Mother" value="<?php echo $baptist->other_god_mother;?>"><br>
                                            <input type="text" name="other_god_mother2" class="form-control" placeholder="Other God Mother" value="<?php echo $baptist->other_god_mother2;?>"><br>
                                            <input type="text" name="other_god_mother3" class="form-control" placeholder="Other God Mother" value="<?php echo $baptist->other_god_mother3;?>"><br>
                                            <input type="text" name="other_god_mother4" class="form-control" placeholder="Other God Mother" value="<?php echo $baptist->other_god_mother4;?>"><br>
                                            <input type="text" name="other_god_mother5" class="form-control" placeholder="Other God Mother" value="<?php echo $baptist->other_god_mother5;?>"><br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                        <fieldset>
                                            <legend>Requirements</legend>
                                            <input type="checkbox" name="marriage_contract" value="ok" <?php if($baptist->marriage_contract == 'ok') { echo 'checked'; }?>>Marriage Contract <br>
                                            <input type="checkbox" name="birth_certificate" value="ok" <?php if($baptist->birth_certificate == 'ok') { echo 'checked'; }?>>Birth Certificate <br>
                                            <input type="checkbox" name="registration_fee" value="ok" <?php if($baptist->registration_fee == 'ok') { echo 'checked'; }?>>Registration Fee (200) <br>
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
        var time_of_baptism, date_of_baptism;
        $('#date_of_baptism').change(function(){
            date_of_baptism = $(this).val();
            if(time_of_baptism && date_of_baptism){
                $('#name_of_priest option').remove();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>baptist/get_priest",
                    data:{ date_of_baptism:date_of_baptism, time_of_baptism:time_of_baptism },
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
        $('#time_of_baptism').change(function(){
            time_of_baptism = $(this).val();
            if(time_of_baptism && date_of_baptism){
                $('#name_of_priest option').remove();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>baptist/get_priest",
                    data:{ date_of_baptism:date_of_baptism, time_of_baptism:time_of_baptism },
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