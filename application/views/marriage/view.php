<div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card" style="overflow: auto;">
                            <div class="header">
                                <a href="<?php echo base_url();?>marriage"><button class="btn btn-default"><i class="pe-7s-back"></i></button></a>
                                <h4 class="title">Add Marriage</h4>
                            </div>
                            <div class="content">
                                <form class="form-horizontal" role="form">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Date of Marriage</label>
                                    <div class="col-sm-8">
                                       <?php echo date('M d Y', strtotime($marriage->date)) . '  ' . date('H:i' , strtotime($marriage->time));?>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  &nbsp;
                                </div>
                                <div class="row"></div>
                                <div class="col-md-6">
                                  <center><h4>Bride</h4></center>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                      <?php echo $bride->bride_name;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Place of Birth</label>
                                    <div class="col-sm-10">
                                      <?php echo $bride->bride_pob;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Citizenship</label>
                                    <div class="col-sm-10">
                                      <?php echo $bride->bride_citizenship;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Religion</label>
                                    <div class="col-sm-10">
                                      <?php echo $bride->bride_religion;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Birthday</label>
                                    <div class="col-sm-10">
                                      <?php echo date('M d Y', strtotime($bride->bride_birthday));?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">
                                      <?php echo $bride->bride_address;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Contact</label>
                                    <div class="col-sm-10">
                                      <?php echo $bride->bride_contact;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Occupation</label>
                                    <div class="col-sm-10">
                                      <?php echo $bride->bride_occupation;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Father</label>
                                    <div class="col-sm-10">
                                      <?php echo $bride->bride_father;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Father Occupation</label>
                                    <div class="col-sm-10">
                                      <?php echo $bride->bride_father_occupation;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Mother</label>
                                    <div class="col-sm-10">
                                      <?php echo $bride->bride_mother;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Mother Occupation</label>
                                    <div class="col-sm-10">
                                      <?php echo $bride->bride_mother_occupation;?>
                                    </div>
                                  </div>
                                  <center><h5>Requirements</h5></center>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Marriage license to be released on</label>
                                    <div class="col-sm-8">
                                      <?php echo date('M d Y', strtotime($bride_req->bride_req_marriage_license_released));?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Date submitted:</label>
                                    <div class="col-sm-8">
                                      <?php echo date('M d Y', strtotime($bride_req->bride_req_marriage_license_submitted));?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Civil Marriage Contract Registry number</label>
                                    <div class="col-sm-8">
                                      <?php echo $bride_req->bride_req_marriage_contract;?>
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
                                      <?php echo $bride_req->bride_req_confirmation_ar_number?>
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
                                      <?php echo $bride_req->bride_req_sponsor_w_address?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Couple seminar Date and Time</label>
                                    <div class="col-sm-8">
                                     <?php echo date('Y-m-d\TH:i:s', strtotime($bride_req->bride_req_coupled_seminar));?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-4 control-label">Canonical Investigation Date and Time</label>
                                      <div class="col-sm-8">
                                        <?php echo date('Y-m-d\TH:i:s', strtotime($bride_req->bride_req_cenomar));?>
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
                                        <?php echo $bride_req->bride_req_baranggay_church_ar_no?>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-md-6">
                                  <center><h4>Broom</h4></center>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                      <?php echo $broom->broom_name;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Place of Birth</label>
                                    <div class="col-sm-10">
                                      <?php echo $broom->broom_pob;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Citizenship</label>
                                    <div class="col-sm-10">
                                      <?php echo $broom->broom_citizenship;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Religion</label>
                                    <div class="col-sm-10">
                                      <?php echo $broom->broom_religion;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Birthday</label>
                                    <div class="col-sm-10">
                                      <?php echo date('M d Y', strtotime($broom->broom_birthday));?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">
                                      <?php echo $broom->broom_address;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Contact</label>
                                    <div class="col-sm-10">
                                      <?php echo $broom->broom_contact;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Occupation</label>
                                    <div class="col-sm-10">
                                      <?php echo $broom->broom_occupation;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Father</label>
                                    <div class="col-sm-10">
                                      <?php echo $broom->broom_father;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Father Occupation</label>
                                    <div class="col-sm-10">
                                      <?php echo $broom->broom_father_occupation;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Mother</label>
                                    <div class="col-sm-10">
                                      <?php echo $broom->broom_mother;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Mother Occupation</label>
                                    <div class="col-sm-10">
                                      <?php echo $broom->broom_mother_occupation;?>
                                    </div>
                                  </div>
                                  <center><h5>Requirements</h5></center>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Marriage license to be released on</label>
                                    <div class="col-sm-8">
                                      <?php echo date('M d Y', strtotime($broom_req->broom_req_marriage_license_released));?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Date submitted:</label>
                                    <div class="col-sm-8">
                                      <?php echo date('M d Y', strtotime($broom_req->broom_req_marriage_license_submitted));?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Civil Marriage Contract Registry number</label>
                                    <div class="col-sm-8">
                                      <?php echo $broom_req->broom_req_marriage_contract;?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Baptismal for marriage</label>
                                    <div class="col-sm-8">
                                      <input type="checkbox" name="broom_req_baptismal_marriage" value="ok" <?php if($broom_req->broom_req_baptismal_marriage == 'ok') { echo 'checked'; } ?>>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Confirmation for marriage AR number</label>
                                    <div class="col-sm-8">
                                      <?php echo $broom_req->broom_req_confirmation_ar_number?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Request for permission</label>
                                    <div class="col-sm-8">
                                      <input type="checkbox" name="broom_req_request_permission" value="ok" <?php if($broom_req->broom_req_request_permission == 'ok') { echo 'checked'; } ?>>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Banns</label>
                                    <div class="col-sm-8">
                                      <input type="checkbox" name="broom_req_banns" value="ok" <?php if($broom_req->broom_req_banns == 'ok') { echo 'checked'; } ?>>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Name of Sponsor with Address</label>
                                    <div class="col-sm-8">
                                      <?php echo $broom_req->broom_req_sponsor_w_address?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Couple seminar Date and Time</label>
                                    <div class="col-sm-8">
                                     <?php echo date('Y-m-d\TH:i:s', strtotime($broom_req->broom_req_coupled_seminar));?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-4 control-label">Canonical Investigation Date and Time</label>
                                      <div class="col-sm-8">
                                        <?php echo date('Y-m-d\TH:i:s', strtotime($broom_req->broom_req_cenomar));?>
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label class="col-sm-4 control-label">Confession </label>
                                      <div class="col-sm-8">
                                        <input type="checkbox" name="broom_req_confession" value="ok" <?php if($broom_req->broom_req_confession == 'ok') { echo 'checked'; } ?> >
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label class="col-sm-4 control-label">Barangay Clearance</label>
                                      <div class="col-sm-8">
                                        <input type="checkbox" name="broom_req_baranggay_clearance" value="ok" <?php if($broom_req->broom_req_baranggay_clearance == 'ok') { echo 'checked'; } ?>>
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label class="col-sm-4 control-label">Church Payment A.R. NO.</label>
                                      <div class="col-sm-8">
                                        <?php echo $broom_req->broom_req_baranggay_church_ar_no?>
                                      </div>
                                   </div>
                                </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">&nbsp;</label>
                                <div class="col-sm-10">
                                  <a href="<?php echo base_url();?>marriage/edit/<?php echo $marriage_id;?>/<?php echo $bride_id;?>/<?php echo $broom_id;?>"><button type="button" class="btn btn-primary">Edit</button></a>
                                </div>
                              </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>