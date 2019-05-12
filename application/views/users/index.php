<div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><a href="<?php echo base_url();?>users">Users</a></h4>
                                <p class="category"><a href="<?php echo base_url();?>users/add"><button class="btn btn-primary">Add New</button></a></p>
                                <br>
                                <?php echo form_open('user/search');?>
                                    <input type="text" name="keyword" placeholder="Search here" class="form-control" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }">
                                </form>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                        <th></th>
                                    </tr></thead>
                                    <tbody>
                                        <?php if(count($users)) : foreach($users as $user) : ?>
                                        <?php 
                                            $this->db->where('user_id', $user->id);
                                            $usr = $this->db->get('user_info')->row();
                                        ?>
                                        <tr>
                                            <td><?php echo $usr->name;?></td>
                                            <td><?php echo $user->username;?></td>
                                            <td><?php echo $user->role;?></td>
                                            <td>
                                                <a href="<?php echo base_url();?>users/delete/<?php echo $user->id;?>" style="font-size: 24px;color:red !important;" onclick="return confirm('Delete this user?')"><span class="pe-7s-trash"></span></a> |
                                                <?php if($user->isActive == 1) :?>
                                                    <a href="<?php echo base_url();?>users/deactivate/<?php echo $user->id;?>" onclick="return confirm('Deactivate this user?')">Deactivate</a>
                                                <?php else: ?>
                                                    <a href="<?php echo base_url();?>users/activate/<?php echo $user->id;?>" onclick="return confirm('Activate this user?')">Activate</a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; else:?>
                                        <tr>
                                            <td colspan="5">No user found.</td>
                                        </tr>
                                    <?php endif;?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>