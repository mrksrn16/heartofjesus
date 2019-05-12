<div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card">
                            <div class="header">
                                <a href="<?php echo base_url();?>burial"><button class="btn btn-default"><i class="pe-7s-back"></i></button></a>
                                <h4 class="title">Burial - No. <?php echo $burial->id;?></h4>
                            </div>
                            <div class="content" style="overflow: auto;">
                                <div class="form-group">
                                <label class="col-sm-2 control-label">Date</label>
                                <div class="col-sm-10">
                                  <?php echo date('M d Y', strtotime($burial->date));?> <?php echo date('H:i a', strtotime($burial->time)); ?> - <?php echo date('H:i a', strtotime($burial->end_time)); ?>
                                </div>
                              </div>
                              <div class="row" style="margin-bottom: 10px;"></div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Name of Death Person</label>
                                <div class="col-sm-10">
                                  <?php echo $burial->death_person;?>
                                </div>
                              </div>
                              <div class="row" style="margin-bottom: 10px;"></div>
                               <div class="form-group">
                                <label class="col-sm-2 control-label">Cause of Death</label>
                                <div class="col-sm-10">
                                 <?php echo $burial->cause_of_death;?>
                                </div>
                              </div>
                              <div class="row" style="margin-bottom: 10px;"></div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Date of Death</label>
                                <div class="col-sm-10">
                                   <?php echo date('M d Y', strtotime($burial->dod));?>
                                </div>
                              </div>
                              <div class="row" style="margin-bottom: 10px;"></div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Date of Birth</label>
                                <div class="col-sm-10">
                                   <?php echo date('M d Y', strtotime($burial->dob));?>
                                </div>
                              </div>
                              <div class="row" style="margin-bottom: 10px;"></div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Requirements</label>
                                <div class="col-sm-10">
                                  <input type="checkbox" name="death_certificate" value="ok" <?php if($burial->death_certificate == 'ok') { echo 'checked'; }?>> Death Certificate
                                </div>
                              </div>
                              <div class="row" style="margin-bottom: 10px;"></div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">&nbsp;</label>
                                <div class="col-sm-10">
                                  <a href="<?php echo base_url();?>burial/edit/<?php echo $burial->id;?>"><button class="btn btn-info">Edit</button></a>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>