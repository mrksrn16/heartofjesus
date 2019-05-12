<div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card" style="overflow: auto;">
                            <div class="header">
                                <a href="<?php echo base_url();?>marriage"><button class="btn btn-default"><i class="pe-7s-back"></i></button></a>
                                <h4 class="title">Add Marriage</h4>
                            </div>
                            <div class="content">
                                <?php $attr = array( "class"=>"form-horizontal", "role" => "form", "id" => "myForm");?>
                                <?php echo form_open('', $attr);?>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Date of Marriage</label>
                                    <div class="col-sm-8">
                                      <input type="date" name="date" class="form-control" required="" value="<?php echo $marriage->date;?>" id="date_of_event">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Name of Priest</label>
                                    <div class="col-sm-8">
                                      <select class="form-control" name="name_of_priest" id="name_of_priest">
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="">
                                    <label class="col-sm-2 control-label">Start</label>
                                    <div class="col-sm-4">
                                      <input type="time" name="time" class="form-control" required="" value="<?php echo $marriage->time;?>" id="time_of_event">
                                    </div>
                                  </div>
                                  <div class="">
                                    <label class="col-sm-2 control-label">End</label>
                                    <div class="col-sm-4">
                                      <input type="time" name="end_time" class="form-control" required="" id="end_time" value="<?php echo $marriage->end_time;?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="row"></div>
                                <div class="col-md-6">
                                  <center><h4>Bride</h4></center>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="bride_name" class="form-control" required="" value="<?php echo $bride->bride_name;?>" placeholder="Name">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Place of Birth</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="bride_pob" class="form-control" required="" value="<?php echo $bride->bride_pob;?>" placeholder="Place of Birth">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Citizenship</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="bride_citizenship" class="form-control" required="" value="<?php echo $bride->bride_citizenship;?>" placeholder="Citizenship">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Religion</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="bride_religion" class="form-control" required="" value="<?php echo $bride->bride_religion;?>" placeholder="Religion">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Birthday</label>
                                    <div class="col-sm-10">
                                      <input type="date" name="bride_birthday" class="form-control" required="" value="<?php echo $bride->bride_birthday;?>" placeholder="Birthday">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="bride_address" class="form-control" required="" value="<?php echo $bride->bride_address;?>" placeholder="Address">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Contact</label>
                                    <div class="col-sm-10">
                                      <input type="number" name="bride_contact" class="form-control" required="" value="<?php echo $bride->bride_contact;?>" placeholder="Contact" id="bride_contact">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Occupation</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="bride_occupation" class="form-control" required="<?php echo $bride->bride_occupation;?>" value="<?php echo $bride->bride_occupation;?>" placeholder="Occupation">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Father</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="bride_father" class="form-control" required="" value="<?php echo $bride->bride_father;?>" placeholder="Father">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Father Occupation</label>
                                    <!-- <div class="col-sm-10">
                                      <input type="text" name="bride_father_occupation" class="form-control" required="" value="<?php echo $bride->bride_father_occupation;?>" placeholder="Father Occupation">
                                    </div> -->
                                    <div class="col-sm-10">
                                      <input type="checkbox" value="Deceased" id="btnFatherDeceased" name="bride_father_occupation_deceased" <?php if($bride->bride_father_occupation == 'Deceased'){echo 'checked';}?>><small>*check if deceased</small>
                                      <input type="text" name="bride_father_occupation" class="form-control" required="" value="<?php if($bride->bride_father_occupation != 'Deceased'){echo $bride->bride_father_occupation;}?>" placeholder="Father Occupation" id="inputFatherOccupation" <?php if($bride->bride_father_occupation == 'Deceased'){echo 'disabled';}?>>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Mother</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="bride_mother" class="form-control" required="" value="<?php echo $bride->bride_mother;?>" placeholder="Mother">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Mother Occupation</label>
                                    <!-- <div class="col-sm-10">
                                      <input type="text" name="bride_mother_occupation" class="form-control" required="" value="<?php echo $bride->bride_mother_occupation;?>" placeholder="Mother Occupation">
                                    </div> -->
                                    <div class="col-sm-10">
                                       <input type="checkbox" value="Deceased" id="btnMotherDeceased" name="bride_mother_occupation_deceased" <?php if($bride->bride_mother_occupation == 'Deceased'){echo 'checked';}?>><small>*check if deceased</small>
                                      <input type="text" name="bride_mother_occupation" class="form-control" required="" value="<?php if($bride->bride_mother_occupation != 'Deceased'){echo $bride->bride_mother_occupation;}?>" placeholder="Mother Occupation" id="inputMotherOccupation" <?php if($bride->bride_mother_occupation == 'Deceased'){echo 'disabled';}?>>
                                    </div>
                                  </div>
                                  <center><h5>Requirements</h5></center>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Marriage license to be released on</label>
                                    <div class="col-sm-8">
                                      <input type="date" name="bride_req_marriage_license_released" class="form-control" value="<?php echo $bride_req->bride_req_marriage_license_released;?>">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Date submitted:</label>
                                    <div class="col-sm-8">
                                      <input type="date" name="bride_req_marriage_license_submitted" class="form-control" value="<?php echo $bride_req->bride_req_marriage_license_submitted;?>">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Civil Marriage Contract Registry number</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="bride_req_marriage_contract" class="form-control" placeholder="Civil Marriage Contract Registry number" value="<?php echo $bride_req->bride_req_marriage_contract;?>">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Baptismal for marriage</label>
                                    <div class="col-sm-8">
                                      <input type="checkbox" name="bride_req_baptismal_marriage" value="ok" <?php if($bride_req->bride_req_baptismal_marriage == 'ok') { echo 'checked'; } ?>>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Confirmation for marriage AR number</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="bride_req_confirmation_ar_number" placeholder="Confirmation for marriage AR number" class="form-control" value="<?php echo $bride_req->bride_req_confirmation_ar_number?>">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Request for permission</label>
                                    <div class="col-sm-8">
                                      <input type="checkbox" name="bride_req_request_permission" value="ok" <?php if($bride_req->bride_req_request_permission == 'ok') { echo 'checked'; } ?>>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Banns</label>
                                    <div class="col-sm-8">
                                      <input type="checkbox" name="bride_req_banns" value="ok" <?php if($bride_req->bride_req_banns == 'ok') { echo 'checked'; } ?>>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Name of Sponsor with Address</label>
                                    <div class="col-sm-8">
                                      <textarea name="bride_req_sponsor_w_address" class="form-control"><?php echo $bride_req->bride_req_sponsor_w_address?>
                                      </textarea>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Couple seminar Date and Time</label>
                                    <div class="col-sm-8">
                                      <input type="datetime-local" name="bride_req_coupled_seminar" class="form-control" value="<?php echo date('Y-m-d\TH:i:s', strtotime($bride_req->bride_req_coupled_seminar));?>">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-4 control-label">Canonical Investigation Date and Time</label>
                                      <div class="col-sm-8">
                                        <input type="datetime-local" name="bride_req_cenomar" class="form-control" value="<?php echo date('Y-m-d\TH:i:s', strtotime($bride_req->bride_req_cenomar));?>">
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label class="col-sm-4 control-label">Confession </label>
                                      <div class="col-sm-8">
                                        <input type="checkbox" name="bride_req_confession" value="ok" <?php if($bride_req->bride_req_confession == 'ok') { echo 'checked'; } ?> >
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label class="col-sm-4 control-label">Barangay Clearance</label>
                                      <div class="col-sm-8">
                                        <input type="checkbox" name="bride_req_baranggay_clearance" value="ok" <?php if($bride_req->bride_req_baranggay_clearance == 'ok') { echo 'checked'; } ?>>
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label class="col-sm-4 control-label">Church Payment A.R. NO.</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="bride_req_baranggay_church_ar_no" placeholder="Church Payment A.R. NO." class="form-control" value="<?php echo $bride_req->bride_req_baranggay_church_ar_no?>">
                                      </div>
                                   </div>
                                </div>
                                <div class="col-md-6">
                                  <center><h4>Broom</h4></center>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="broom_name" class="form-control" required="" value="<?php echo $broom->broom_name;?>" placeholder="Name">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Place of Birth</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="broom_pob" class="form-control" required="" value="<?php echo $broom->broom_pob;?>" placeholder="Place of Birth">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Citizenship</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="broom_citizenship" class="form-control" required="" value="<?php echo $broom->broom_citizenship;?>" placeholder="Citizenship">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Religion</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="broom_religion" class="form-control" required="" value="<?php echo $broom->broom_religion;?>" placeholder="Religion">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Birthday</label>
                                    <div class="col-sm-10">
                                      <input type="date" name="broom_birthday" class="form-control" required="" value="<?php echo $broom->broom_birthday;?>" placeholder="Birthday">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="broom_address" class="form-control" required="" value="<?php echo $broom->broom_address;?>" placeholder="Address">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Contact</label>
                                    <div class="col-sm-10">
                                      <input type="number" name="broom_contact" class="form-control" required="" value="<?php echo $broom->broom_contact;?>" placeholder="Contact" id="broom_contact">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Occupation</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="broom_occupation" class="form-control" required="" value="<?php echo $broom->broom_occupation;?>" placeholder="Occupation">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Father</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="broom_father" class="form-control" required="" value="<?php echo $broom->broom_father;?>" placeholder="Father">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Father Occupation</label>
                                    <!-- <div class="col-sm-10">
                                      <input type="text" name="broom_father_occupation" class="form-control" required=""  placeholder="Father Occupation">
                                    </div> -->
                                    <div class="col-sm-10">
                                       <input type="checkbox" value="Deceased" id="btnFatherDeceased2" name="broom_father_occupation_deceased" <?php if($broom->broom_father_occupation == 'Deceased'){echo 'checked';}?>><small>*check if deceased</small>
                                      <input type="text" name="broom_father_occupation" class="form-control" required="" value="<?php if($broom->broom_father_occupation != 'Deceased'){echo $broom->broom_father_occupation;}?>" placeholder="Father Occupation" id="inputFatherOccupation2" <?php if($broom->broom_father_occupation == 'Deceased'){echo 'disabled';}?>>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Mother</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="broom_mother" class="form-control" required="" value="<?php echo $broom->broom_mother;?>" placeholder="Mother">
                                    </div>
                                    
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Mother Occupation</label>
                                    <div class="col-sm-10">
                                      <input type="checkbox" value="Deceased" id="btnMotherDeceased2" name="broom_mother_occupation_deceased" <?php if($broom->broom_mother_occupation == 'Deceased'){echo 'checked';}?>><small>*check if deceased</small>
                                      <input type="text" name="broom_mother_occupation" class="form-control" required="" value="<?php if($broom->broom_mother_occupation != 'Deceased'){echo $broom->broom_mother_occupation;}?>" placeholder="Mother Occupation" id="inputMotherOccupation2" <?php if($broom->broom_mother_occupation == 'Deceased'){echo 'disabled';}?>>
                                    </div>
                                  </div>
                                  <center><h5>Requirements</h5></center>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Marriage license to be released on</label>
                                    <div class="col-sm-8">
                                      <input type="date" name="broom_req_marriage_license_released" class="form-control" value="<?php echo $broom_req->broom_req_marriage_license_released;?>">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Date submitted:</label>
                                    <div class="col-sm-8">
                                      <input type="date" name="broom_req_marriage_license_submitted" class="form-control" value="<?php echo $broom_req->broom_req_marriage_license_submitted;?>">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Civil Marriage Contract Registry number</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="broom_req_marriage_contract" class="form-control" placeholder="Civil Marriage Contract Registry number" value="<?php echo $broom_req->broom_req_marriage_contract;?>">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Baptismal for marriage</label>
                                    <div class="col-sm-8">
                                      <input type="checkbox" name="broom_req_baptismal_marriage" value="ok" <?php if($broom_req->broom_req_baptismal_marriage == 'ok') { echo 'checked'; }?>>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Confirmation for marriage AR number</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="broom_req_confirmation_ar_number" placeholder="Confirmation for marriage AR number" class="form-control" value="<?php echo $broom_req->broom_req_confirmation_ar_number;?>">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Request for permission</label>
                                    <div class="col-sm-8">
                                      <input type="checkbox" name="broom_req_request_permission" value="ok" <?php if($broom_req->broom_req_request_permission == 'ok') { echo 'checked'; }?>>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Banns</label>
                                    <div class="col-sm-8">
                                      <input type="checkbox" name="broom_req_banns" value="ok" <?php if($broom_req->broom_req_banns == 'ok') { echo 'checked'; }?>>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Name of Sponsor with Address</label>
                                    <div class="col-sm-8">
                                      <textarea name="broom_req_sponsor_w_address" class="form-control"><?php echo $broom_req->broom_req_sponsor_w_address;?></textarea>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Couple seminar Date and Time</label>
                                    <div class="col-sm-8">
                                      <input type="datetime-local" name="broom_req_coupled_seminar" class="form-control" value="<?php echo date('Y-m-d\TH:i:s', strtotime($broom_req->broom_req_coupled_seminar));?>">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-4 control-label">Canonical Investigation Date and Time</label>
                                      <div class="col-sm-8">
                                        <input type="datetime-local" name="broom_req_cenomar" class="form-control" value="<?php echo date('Y-m-d\TH:i:s', strtotime($broom_req->broom_req_cenomar));?>">
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label class="col-sm-4 control-label">Confession </label>
                                      <div class="col-sm-8">
                                        <input type="checkbox" name="broom_req_confession" value="ok" <?php if($broom_req->broom_req_confession == 'ok') { echo 'checked'; }?>>
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label class="col-sm-4 control-label">Barangay Clearance</label>
                                      <div class="col-sm-8">
                                        <input type="checkbox" name="broom_req_baranggay_clearance" value="ok" <?php if($broom_req->broom_req_baranggay_clearance == 'ok') { echo 'checked'; }?>>
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label class="col-sm-4 control-label">Church Payment A.R. NO.</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="broom_req_baranggay_church_ar_no" placeholder="Church Payment A.R. NO." class="form-control" value="<?php echo $broom_req->broom_req_baranggay_church_ar_no;?>">
                                      </div>
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
    $('#btnFatherDeceased').click(function(){
      if($(this).is(':checked')){
        $('#inputFatherOccupation').prop('disabled', true);
        $('#inputFatherOccupation').removeAttr('required');
        $('#inputFatherOccupation').val('');
      }else{
        $('#inputFatherOccupation').prop('disabled', false);
        $('#inputFatherOccupation').prop('required', true);
      }
    });
    $('#btnFatherDeceased2').click(function(){
      if($(this).is(':checked')){
        $('#inputFatherOccupation2').prop('disabled', true);
        $('#inputFatherOccupation2').removeAttr('required');
        $('#inputFatherOccupation2').val('');
      }else{
        $('#inputFatherOccupation2').prop('disabled', false);
        $('#inputFatherOccupation2').prop('required', true);
      }
    });
    $('#btnMotherDeceased').click(function(){
      if($(this).is(':checked')){
        $('#inputMotherOccupation').prop('disabled', true);
        $('#inputMotherOccupation').removeAttr('required');
        $('#inputMotherOccupation').val('');
      }else{
        $('#inputMotherOccupation').prop('disabled', false);
        $('#inputMotherOccupation').prop('required', true);
      }
    });
     $('#btnMotherDeceased2').click(function(){
      if($(this).is(':checked')){
        $('#inputMotherOccupation2').prop('disabled', true);
        $('#inputMotherOccupation2').removeAttr('required');
        $('#inputMotherOccupation2').val('');
      }else{
        $('#inputMotherOccupation2').prop('disabled', false);
        $('#inputMotherOccupation2').prop('required', true);
      }
    });
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
        var priest = "<?php echo $marriage->priest;?>";
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