<div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card">
                            <div class="header">
                                <a href="<?php echo base_url();?>marriage"><h4 class="title">Marriage Lists</h4></a>
                                <p class="category"><a href="<?php echo base_url();?>marriage/add"><button class="btn btn-primary">Add New</button></a></p>
                                <br>
                                <!-- <?php echo form_open('marriage/search');?>
                                    <input type="text" name="keyword" placeholder="Search here" class="form-control" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }">
                                </form> -->
                                <div class="col-md-6"><input type="checkbox" name="" id="done_event" <?php if($checked === TRUE) { echo "checked"; } ?>><label><small>sort by done event</small></label></div>
                                <div class="col-md-6">
                                    <label class="col-sm-3"><small>Sort Remarks</small></label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="sort_remarks">
                                            <option value="">---</option>
                                            <option value="Complete">Complete</option>
                                            <option value="Incomplete">Incomplete</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped" id="marriageTable">
                                    <thead>
                                    <tr class="first-row">
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Bride</th>
                                        <th>Broom</th>
                                        <th>Priest</th>
                                        <th>Remarks</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr></thead>
                                    <tbody>
                                        <?php if(count($marriage)) : foreach($marriage as $marriageItem) : ?>
                                        <tr>
                                            <td><?php echo date("M d Y", strtotime($marriageItem->date));?></td>
                                            <td><?php echo date("H:i a", strtotime($marriageItem->time)) . ' - ' . date("H:i a", strtotime($marriageItem->end_time));?></td>
                                            <td><?php $bride = $this->marriage_m->get_bride($marriageItem->bride_id); echo $bride->bride_name;?></td>
                                            <td><?php $broom = $this->marriage_m->get_broom($marriageItem->broom_id); echo $broom->broom_name;?></td>
                                            <td><?php echo $marriageItem->priest;?></td>
                                            <td>
                                                <?php
                                                    $bride_req = $this->marriage_m->get_bride_req($marriageItem->bride_id);
                                                    if($bride_req->bride_req_marriage_license_released && $bride_req->bride_req_marriage_license_submitted && $bride_req->bride_req_marriage_contract && $bride_req->bride_req_baptismal_marriage && $bride_req->bride_req_marriage_license_released && $bride_req->bride_req_request_permission && $bride_req->bride_req_confirmation_ar_number && $bride_req->bride_req_banns && $bride_req->bride_req_coupled_seminar && $bride_req->bride_req_cenomar &&$bride_req->bride_req_confession && $bride_req->bride_req_baranggay_clearance && $bride_req->bride_req_baranggay_church_ar_no){
                                                        echo "Complete";
                                                    }else{
                                                        echo "Incomplete";
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <?php echo form_open('status/changed_status');?>
                                                    <input type="hidden" name="event" value="marriage">
                                                    <input type="hidden" name="event_id" value="<?php echo $marriageItem->id;?>">
                                                    <select class="form-control" name="status" onchange="this.form.submit()">
                                                        <option value="Undone" <?php if($marriageItem->status == 'Undone'){ echo 'selected'; }?>>Undone</option>
                                                        <option value="Done" <?php if($marriageItem->status == 'Done'){ echo 'selected'; }?>>Done</option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                              <a href="<?php echo base_url();?>marriage/view/<?php echo $marriageItem->id;?>/<?php echo $marriageItem->bride_id;?>/<?php echo $marriageItem->broom_id;?>">
                                                    <button class="btn btn-primary">
                                                        <i class="pe-7s-info"></i>
                                                    </button>
                                                </a>
                                                <a href="<?php echo base_url();?>marriage/edit/<?php echo $marriageItem->id;?>/<?php echo $marriageItem->bride_id;?>/<?php echo $marriageItem->broom_id;?>">
                                                    <button class="btn btn-primary">
                                                        <i class="pe-7s-pen"></i>
                                                    </button>
                                                </a>
                                                <a href="<?php echo base_url();?>marriage/deactivate/<?php echo $marriageItem->id;?>" onclick="return confirm('Are you sure you want to remove?')">
                                                    <button class="btn btn-danger">
                                                        <i class="pe-7s-trash"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; else:?>
                                        <tr>
                                            <td colspan="5">No marriage found.</td>
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
                window.location.href = base_url + 'marriage/sort_done/';
           }else{
                window.location.href = base_url + 'marriage';
           }
        });
        $('#sort_remarks').change(function(){
            remarks = $(this).val();
            $('#marriageTable tr').not('.first-row').fadeOut();
            $("#marriageTable tr td:contains('" + remarks + "')").parent('tr').fadeIn();
        });
    });
</script>