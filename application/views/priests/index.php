<div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card">
                            <div class="header">
                                <a href="<?php echo base_url();?>priests"><h4 class="title">List of Priests</h4></a>
                                <p class="category"><a href="<?php echo base_url();?>priests/add"><button class="btn btn-primary">Add New</button></a></p>
                                <br>
                                <?php echo form_open('priests/search');?>
                                    <input type="text" name="keyword" placeholder="Search here" class="form-control" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }">
                                </form>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th></th>
                                    </tr></thead>
                                    <tbody>
                                        <?php if(count($priests)) : foreach($priests as $priest) : ?>
                                        <tr>
                                            <td><?php echo $priest->name;?></td>
                                            <td>
                                                <a href="<?php echo base_url();?>priests/view/<?php echo $priest->id;?>">
                                                    <button class="btn btn-info">
                                                        <!-- <i class="pe-7s-info"></i> -->
                                                        <small>View information & schedule</small>
                                                    </button>
                                                </a>
                                                <a href="<?php echo base_url();?>priests/edit/<?php echo $priest->id;?>">
                                                    <button class="btn btn-primary">
                                                        <i class="pe-7s-pen"></i>
                                                    </button>
                                                </a>
                                                <a href="<?php echo base_url();?>priests/deactivate/<?php echo $priest->id;?>" onclick="return confirm('Are you sure you want to remove this priest on the list?')">
                                                    <button class="btn btn-danger">
                                                        <i class="pe-7s-trash"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; else:?>
                                        <tr>
                                            <td colspan="2">No priests found.</td>
                                        </tr>
                                    <?php endif;?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>