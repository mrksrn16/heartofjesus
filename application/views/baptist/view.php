<style type="text/css">
    .col-md-8 {
        margin-bottom: 15px;
    }
</style>
<div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card">
                            <div class="header">
                                <a href="<?php echo base_url();?>baptist"><button class="btn btn-default"><i class="pe-7s-back"></i></button></a>
                                <h4 class="title">Baptist - No. <?php echo $baptist->id;?></h4>
                            </div>
                            <div class="content">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Child Name</label>
                                                <div class="col-sm-9">
                                                  <?php echo $baptist->child_name;?>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Birthday</label>
                                                <div class="col-sm-9">
                                                  <?php echo date('M d Y', strtotime($baptist->birthday));?>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Birth Place</label>
                                                <div class="col-sm-9">
                                                  <?php echo $baptist->birthplace;?>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Father's Name</label>
                                                <div class="col-sm-9">
                                                  <?php echo $baptist->father;?>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Father's Birth Place</label>
                                                <div class="col-sm-9">
                                                  <?php echo $baptist->father_birth_place;?>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Mother's Name</label>
                                                <div class="col-sm-9">
                                                  <?php echo $baptist->mother;?>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Mother's Birth Place</label>
                                                <div class="col-sm-9">
                                                  <?php echo $baptist->mother_birth_place;?>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Married at</label>
                                                <div class="col-sm-9">
                                                  <input type="radio" name="married_at" value="Church" <?php if($baptist->married_at == 'Church'){ echo 'checked'; }?>>Church <input type="radio" name="married_at" value="Civil"  <?php if($baptist->married_at == 'Civil'){ echo 'checked'; }?>>Civil
                                                  <input type="radio" name="married_at" value="Not married"  <?php if($baptist->married_at == 'Not married'){ echo 'checked'; }?>>Not married
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Current Address</label>
                                                <div class="col-sm-9">
                                                  <?php echo $baptist->current_address;?>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Date of Baptism</label>
                                                <div class="col-sm-9">
                                                  <?php echo date('M d Y', strtotime($baptist->date_of_baptism));?> <?php echo date('H:i', strtotime($baptist->time));?>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Name of Priest</label>
                                                <div class="col-sm-9">
                                                  <?php echo $baptist->date_of_baptism;?>
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
                                                  <?php echo $baptist->god_father_name;?>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Address</label>
                                                <div class="col-sm-9">
                                                  <?php echo $baptist->god_father_address;?>
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
                                                  <?php echo $baptist->god_mother_name;?>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Address</label>
                                                <div class="col-sm-9">
                                                  <?php echo $baptist->god_mother_address;?>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <center><label>Other God Father</label><br><br>
                                                <?php echo $baptist->other_god_father;?> <br><br>
                                                <?php echo $baptist->other_god_father2;?> <br><br>
                                                <?php echo $baptist->other_god_father3;?> <br><br>
                                                <?php echo $baptist->other_god_father4;?> <br><br>
                                                <?php echo $baptist->other_god_father5;?> <br><br>
                                            </center>

                                        </div>
                                        <div class="col-md-6">
                                            <center><label>Other God Mother</label> <br><br>
                                                <?php echo $baptist->other_god_mother;?> <br><br>
                                                <?php echo $baptist->other_god_mother2;?> <br><br>
                                                <?php echo $baptist->other_god_mother3;?> <br><br>
                                                <?php echo $baptist->other_god_mother4;?> <br><br>
                                                <?php echo $baptist->other_god_mother5;?> <br><br>
                                            </center>
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
                                    <div class="row" style="margin-top: 15px;">
                                        <div class="col-md-12">
                                            <a href="<?php echo base_url();?>baptist/edit/<?php echo $baptist->id;?>"><button type="button" class="btn btn-info">Edit</button></a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>