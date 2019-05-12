<div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card">
                            <div class="header">
                                <a href="<?php echo base_url();?>blessing"><h4 class="title">Blessings Lists</h4></a>
                                <p class="category"><a href="<?php echo base_url();?>blessing/add"><button class="btn btn-primary">Add New</button></a></p>
                                <br>
                                <div class="col-md-6"><input type="checkbox" name="" id="done_event" <?php if($checked === TRUE) { echo "checked"; } ?>><label><small>sort by done event</small></label></div>
                                <?php echo form_open('blessing/search');?>
                                    <input type="text" name="keyword" placeholder="Search here" class="form-control" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }">
                                </form>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped" id="blessingTable">
                                    <thead>
                                    <tr class="first-row">
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Contact</th>
                                        <th>Date</th>
                                        <th>Priest</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr></thead>
                                    <tbody>
                                        <?php if(count($blessings)) : foreach($blessings as $blessing) : ?>
                                        <tr>
                                            <td><?php echo $blessing->name;?></td>
                                            <td><?php echo $blessing->age;?></td>
                                            <td><?php echo $blessing->address;?></td>
                                            <td><?php echo $blessing->contact;?></td>
                                            <td><?php echo date("M d Y", strtotime($blessing->date));?> <?php echo date("H:i a", strtotime($blessing->time));?> - <?php echo date("H:i a", strtotime($blessing->end_time));?></td>
                                           <!--  <td>
                                                <?php echo form_open('blessing/update/' . $blessing->id);?>
                                                    <select class="form-control" onchange="this.form.submit()" name="remarks">
                                                        <option value="unfinished" <?php if($blessing->remarks == 'unfinished'){ echo 'selected'; }?>>Unfinished</option>
                                                        <option value="complete" <?php if($blessing->remarks == 'complete'){ echo 'selected'; }?>>Complete</option>
                                                    </select>
                                                </form>
                                            </td> -->
                                            <td><?php echo $blessing->priest;?></td>
                                            <td>
                                                <?php echo form_open('status/changed_status');?>
                                                    <input type="hidden" name="event" value="blessings">
                                                    <input type="hidden" name="event_id" value="<?php echo $blessing->id;?>">
                                                    <select class="form-control" name="status" onchange="this.form.submit()">
                                                        <option value="Undone" <?php if($blessing->status == 'Undone'){ echo 'selected'; }?>>Undone</option>
                                                        <option value="Done" <?php if($blessing->status == 'Done'){ echo 'selected'; }?>>Done</option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url();?>blessing/edit/<?php echo $blessing->id;?>">
                                                    <button class="btn btn-primary">
                                                        <i class="pe-7s-pen"></i>
                                                    </button>
                                                </a>
                                                <a href="<?php echo base_url();?>blessing/deactivate/<?php echo $blessing->id;?>" onclick="return confirm('Are you sure you want to remove?')">
                                                    <button class="btn btn-danger">
                                                        <i class="pe-7s-trash"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; else:?>
                                        <tr>
                                            <td colspan="6">No blessings found.</td>
                                        </tr>
                                    <?php endif;?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

<script type="text/javascript">
    $(document).ready(function(){
        var base_url = "<?php echo base_url();?>";
        $('#done_event').click(function(){
           if($(this).is(":checked")){
                window.location.href = base_url + 'blessing/sort_done/';
           }else{
                window.location.href = base_url + 'blessing';
           }
        });
    });
</script>