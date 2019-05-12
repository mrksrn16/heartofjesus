<div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card">
                            <div class="header">
                                <a href="<?php echo base_url();?>priests"><button class="btn btn-default"><i class="pe-7s-back"></i></button></a>
                                <h4 class="title">Add Priest</h4>
                            </div>
                            <div class="content">
                              <?php $attr = array( "class"=>"form-horizontal", "role" => "form");?>
                              <?php echo form_open('', $attr);?>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" placeholder="Name" required="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword" class="col-sm-2 control-label">Age</label>
                                <div class="col-sm-10">
                                  <input type="number" name="age" class="form-control" placeholder="Age" required="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword" class="col-sm-2 control-label">Birthday</label>
                                <div class="col-sm-10">
                                    <input type="date" name="birthday" class="form-control" required="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword" class="col-sm-2 control-label">Birth Place</label>
                                <div class="col-sm-10">
                                    <input type="text" name="birthplace" class="form-control" placeholder="Birth Place" required="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword" class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" placeholder="Address" name="address" required=""></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword" class="col-sm-2 control-label">Position</label>
                                <div class="col-sm-10">
                                    <input type="text" name="position" class="form-control" placeholder="Position" required="">
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
                        </div>
                    </div>
                </div>