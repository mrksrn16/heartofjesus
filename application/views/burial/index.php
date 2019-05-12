<div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Burial Lists</h4>
                                <p class="category"><a href="<?php echo base_url();?>burial/add"><button class="btn btn-primary">Add New</button></a></p>
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
                                <br>
                                <?php echo form_open('burial/search');?>
                                    <input type="text" name="keyword" placeholder="Search here" class="form-control" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }">
                                </form>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped" id="burialTable">
                                    <thead>
                                    <tr class="first-row">
                                        <th>Date</th>
                                        <th>Priest</th>
                                        <th>Death Person</th>
                                        <th>Remarks</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr></thead>
                                    <tbody>
                                        <?php if(count($burials)) : foreach($burials as $burial) : ?>
                                        <tr>
                                            <td><?php echo date("M d Y", strtotime($burial->date));?> <?php echo date('H:i a', strtotime($burial->time)); ?> - <?php echo date('H:i a', strtotime($burial->end_time)); ?></td>
                                            <td><?php echo $burial->priest;?></td>
                                            <td><?php echo $burial->death_person;?></td>
                                            <td>
                                                <!-- <?php echo form_open('burial/update/' . $burial->id);?>
                                                    <select class="form-control" onchange="this.form.submit()" name="remarks">
                                                        <option value="unfinished" <?php if($burial->remarks == 'unfinished'){ echo 'selected'; }?>>Unfinished</option>
                                                        <option value="complete" <?php if($burial->remarks == 'complete'){ echo 'selected'; }?>>Complete</option>
                                                    </select>
                                                </form> -->
                                                <?php
                                                    if($burial->death_certificate ==  'ok'){
                                                       echo "Complete";
                                                    }else{
                                                        echo "Incomplete";
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <?php echo form_open('status/changed_status');?>
                                                    <input type="hidden" name="event" value="burials">
                                                    <input type="hidden" name="event_id" value="<?php echo $burial->id;?>">
                                                    <select class="form-control" name="status" onchange="this.form.submit()">
                                                        <option value="Undone" <?php if($burial->status == 'Undone'){ echo 'selected'; }?>>Undone</option>
                                                        <option value="Done" <?php if($burial->status == 'Done'){ echo 'selected'; }?>>Done</option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                               <a href="<?php echo base_url();?>burial/view/<?php echo $burial->id;?>">
                                                    <button class="btn btn-info">
                                                        <i class="pe-7s-info"></i>
                                                    </button>
                                                </a>
                                                <a href="<?php echo base_url();?>burial/edit/<?php echo $burial->id;?>">
                                                    <button class="btn btn-primary">
                                                        <i class="pe-7s-pen"></i>
                                                    </button>
                                                </a>
                                                <a href="<?php echo base_url();?>burial/deactivate/<?php echo $burial->id;?>" onclick="return confirm('Are you sure you want to remove?')">
                                                    <button class="btn btn-danger">
                                                        <i class="pe-7s-trash"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; else:?>
                                        <tr>
                                            <td colspan="3">No burials found.</td>
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
                window.location.href = base_url + 'burial/sort_done/';
           }else{
                window.location.href = base_url + 'burial';
           }
        });
        $('#sort_remarks').change(function(){
            remarks = $(this).val();
            $('#burialTable tr').not('.first-row').fadeOut();
            $("#burialTable tr td:contains('" + remarks + "')").parent('tr').fadeIn();
        });
    });
</script>