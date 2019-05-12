<div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card">
                            <div class="header">
                                <a href="<?php echo base_url();?>priests"><button class="btn btn-default"><i class="pe-7s-back"></i></button></a>
                            </div>
                            <div class="content" style="overflow: auto;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel panel-default">
                                          <!-- Default panel contents -->
                                          <div class="panel-heading">Schedule - Edit</div>
                                          <!-- List group -->
                                          <ul class="list-group">
                                            <?php $attr = array( "class"=>"form-horizontal", "role" => "form");?>
                                              <?php echo form_open('', $attr);?>
                                              <div class="form-group">
                                                <label class="col-sm-2 control-label">Day</label>
                                                <div class="col-sm-10">
                                                  <select class="form-control" name="day" required="">
                                                    <option value="Monday" <?php if($schedule->day == 'Monday') { echo 'selected'; } ?>>Monday</option>
                                                    <option value="Tuesday" <?php if($schedule->day == 'Tuesday') { echo 'selected'; } ?>>Tuesday</option>
                                                    <option value="Wednesday" <?php if($schedule->day == 'Wednesday') { echo 'selected'; } ?>>Wednesday</option>
                                                    <option value="Thursday" <?php if($schedule->day == 'Thursday') { echo 'selected'; } ?>>Thursday</option>
                                                    <option value="Friday" <?php if($schedule->day == 'Friday') { echo 'selected'; } ?>>Friday</option>
                                                    <option value="Saturday" <?php if($schedule->day == 'Saturday') { echo 'selected'; } ?>>Saturday</option>
                                                    <option value="Sunday" <?php if($schedule->day == 'Sunday') { echo 'selected'; } ?>>Sunday</option>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label for="inputPassword" class="col-sm-2 control-label">Time</label>
                                                <div class="col-sm-5">
                                                  <input type="time" name="start_time" class="form-control" required="" value="<?php echo $schedule->start_time;?>">
                                                </div>
                                                <div class="col-sm-5">
                                                  <input type="time" name="end_time" class="form-control" required="" value="<?php echo $schedule->end_time;?>">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label for="inputPassword" class="col-sm-2 control-label">&nbsp;</label>
                                                <div class="col-sm-10">
                                                  <input type="submit" name="submit" value="Save" class="btn btn-primary">
                                                </div>
                                              </div>
                                              </form>
                                          </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>