<div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card">
                            <div class="header">
                                <a href="<?php echo base_url();?>priests"><button class="btn btn-default"><i class="pe-7s-back"></i></button></a>
                            </div>
                            <div class="content" style="overflow: auto;">
                                <div class="row">
                                    <div class="col-md-6" style="text-align: center;">
                                        <div class="panel panel-default">
                                          <!-- Default panel contents -->
                                          <div class="panel-heading">Priest - Fr. <?php echo $priest->name;?></div>

                                          <!-- List group -->
                                          <ul class="list-group">
                                            <li class="list-group-item"><label>Age : </label> <?php echo $priest->age;?></li>
                                            <li class="list-group-item"><label>Birthday : </label> <?php echo date('M d Y', strtotime($priest->birthday));?></li>
                                            <li class="list-group-item"><label>Birth Place : </label> <?php echo $priest->birthplace;?></li>
                                            <li class="list-group-item"><label>Address : </label> <?php echo $priest->address;?></li>
                                            <li class="list-group-item"><label>Position : </label> <?php echo $priest->position;?></li>
                                          </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="panel panel-default">
                                          <!-- Default panel contents -->
                                          <div class="panel-heading">Schedule</div>
                                          <!-- List group -->
                                          <ul class="list-group">
                                            <?php if($schedules) : foreach($schedules as $schedule): ?>
                                            <li class="list-group-item">
                                                <label><?php echo $schedule->day;?></label>
                                                <ul>
                                                    <li><?php echo date ('H:i A',strtotime($schedule->start_time));?> - <?php echo date ('H:i A',strtotime($schedule->end_time));?> <a href="<?php echo base_url();?>priests/edit_schedule/<?php echo $schedule->priest_id?>/<?php echo $schedule->id;?>"><i class="pe-7s-pen"></i></a>&nbsp;<a href="<?php echo base_url();?>priests/remove_schedule/<?php echo $schedule->priest_id?>/<?php echo $schedule->id;?>" onclick="return confirm('Remove schedule?')"><i class="pe-7s-trash"></i></a></li>
                                                </ul>
                                            </li>
                                          <?php endforeach; else:?>
                                            <li class="list-group-item">
                                                No schedules.
                                            </li>
                                        <?php endif;?>
                                             <li class="list-group-item">
                                               <a href="#" data-toggle="modal" data-target="#myModal">Add schedule</a>
                                            </li>

                                          </ul>
                                        </div>
                                    </div>
                                </div>

                                    <div class="col-md-12" >
                                     <a href="<?php echo base_url();?>priests/edit/<?php echo $priest->id?>"><button class="btn btn-primary">Edit</button></a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Modal -->
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Add Schedule</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                    <?php $attr = array( "class"=>"form-horizontal", "role" => "form");?>
                                                    <?php echo form_open('', $attr);?>
                                                    <div class="form-group">
                                                      <label class="col-sm-2 control-label">Day</label>
                                                      <div class="col-sm-10">
                                                        <select class="form-control" name="day" required="">
                                                          <option value="Monday">Monday</option>
                                                          <option value="Tuesday">Tuesday</option>
                                                          <option value="Wednesday">Wednesday</option>
                                                          <option value="Thursday">Thursday</option>
                                                          <option value="Friday">Friday</option>
                                                          <option value="Saturday">Saturday</option>
                                                          <option value="Sunday">Sunday</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="inputPassword" class="col-sm-2 control-label">Time</label>
                                                      <div class="col-sm-5">
                                                        <input type="time" name="start_time" class="form-control" required="">
                                                      </div>
                                                      <div class="col-sm-5">
                                                        <input type="time" name="end_time" class="form-control" required="">
                                                      </div>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="inputPassword" class="col-sm-2 control-label">&nbsp;</label>
                                                      <div class="col-sm-10">
                                                        <input type="submit" name="submit" value="Save" class="btn btn-primary">
                                                      </div>
                                                    </div>
                                                    </form>
                                                  </div>
                                                  <div class="modal-footer">
                                                    
                                                  </div>
                                                </div>
                                              </div>
                                            </div>