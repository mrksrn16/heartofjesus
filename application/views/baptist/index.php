<div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><a href="<?php echo base_url();?>baptist">Baptist Lists</a></h4>
                                <p class="category"><a href="<?php echo base_url();?>baptist/add"><button class="btn btn-primary">Add New</button></a></p>
                                <br>
                                <div class="col-md-6"><input type="checkbox" name="" id="done_event" <?php if($checked === TRUE) { echo "checked"; } ?>><label><small>sort by done event</small></label></div>
                                <div class="col-md-6" style="margin-bottom: 10px;">
                                    <label class="col-sm-3"><small>Sort Remarks</small></label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="sort_remarks">
                                            <option value="">---</option>
                                            <option value="Complete">Complete</option>
                                            <option value="Incomplete">Incomplete</option>
                                        </select>
                                    </div>
                                </div>
                                <?php echo form_open('baptist/search');?>
                                    <input type="text" name="keyword" placeholder="Search here" class="form-control" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }">
                                </form>

                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped" id="baptistTable">
                                    <thead>
                                    <tr class="first-row">
                                        <th>Date of Baptism</th>
                                        <th>Time</th>
                                        <th>Priest</th>
                                        <th>Child Name</th>
                                        <th>Father</th>
                                        <th>Mother</th>
                                        <th>Remarks</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr></thead>
                                    <tbody>
                                        <?php if(count($baptists)) : foreach($baptists as $baptist) : ?>
                                        <tr>
                                            <td><?php echo date('M d Y', strtotime($baptist->date_of_baptism));?></td>
                                            <td>
                                                <?php echo $baptist->time;?>
                                            </td>
                                            <td><?php echo $baptist->name_of_priest;?></td>
                                            <td><?php echo $baptist->child_name;?></td>
                                            <td><?php echo $baptist->father;?></td>
                                            <td><?php echo $baptist->mother;?></td>
                                            <td>
                                                <?php $chkreq;
                                                    if($baptist->birth_certificate ==  'ok' && $baptist->marriage_contract ==  'ok' && $baptist->registration_fee ==  'ok'){
                                                        echo "Complete";
                                                    }else{
                                                        echo "Incomplete";
                                                    }
                                                ?>
                                               <!--  <?php echo form_open('baptist/update/' . $baptist->id);?>
                                                    <select class="form-control" onchange="this.form.submit()" name="remarks">
                                                        <option value="unfinished" <?php if($chkreq == FALSE){ echo 'selected'; }?>>Incomplete</option>
                                                        <option value="complete" <?php if($chkreq == TRUE){ echo 'selected'; }?>>Complete</option>
                                                    </select>
                                                </form> -->
                                            </td>
                                            <td>
                                                <?php echo form_open('status/changed_status');?>
                                                    <input type="hidden" name="event" value="baptist">
                                                    <input type="hidden" name="event_id" value="<?php echo $baptist->id;?>">
                                                    <select class="form-control" name="status" onchange="this.form.submit()">
                                                        <option value="Undone" <?php if($baptist->status == 'Undone'){ echo 'selected'; }?>>Undone</option>
                                                        <option value="Done" <?php if($baptist->status == 'Done'){ echo 'selected'; }?>>Done</option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                               <a href="<?php echo base_url();?>baptist/view/<?php echo $baptist->id;?>">
                                                    <button class="btn btn-info">
                                                        <i class="pe-7s-info"></i>
                                                    </button>
                                                </a>
                                                <a href="<?php echo base_url();?>baptist/edit/<?php echo $baptist->id;?>">
                                                    <button class="btn btn-primary">
                                                        <i class="pe-7s-pen"></i>
                                                    </button>
                                                </a>
                                                <a href="<?php echo base_url();?>baptist/deactivate/<?php echo $baptist->id;?>" onclick="return confirm('Are you sure you want to remove?')">
                                                    <button class="btn btn-danger">
                                                        <i class="pe-7s-trash"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; else:?>
                                        <tr>
                                            <td colspan="5">No baptists found.</td>
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
                window.location.href = base_url + 'baptist/sort_done/';
           }else{
                window.location.href = base_url + 'baptist';
           }
        });
        $('#sort_remarks').change(function(){
            remarks = $(this).val();
            $('#baptistTable tr').not('.first-row').fadeOut();
            $("#baptistTable tr td:contains('" + remarks + "')").parent('tr').fadeIn();
        });
    });
</script>