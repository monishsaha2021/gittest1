<div class="static-content-wrapper">
<div class="static-content">
   <div class="page-content">
      <ol class="breadcrumb">
         <li class=""><a href="">Home</a></li>
         <li class=""><a href="">Users</a></li>
         <li class="active"><a href="">View Users</a></li>
      </ol>
      <div class="container-fluid">
         <div data-widget-group="group1">
            <div class="row">
               <div class="col-md-12">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h2>Users Records</h2>
                        <div class="panel-ctrls"></div>
                        <a href="<?= bs('users/print_with_dompdf') ?>">
                        <i class="fa fa-print" style="padding-left: 1%;color: black"></i>
                        </a>	
                     </div>
                     <div class="panel-body no-padding">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                           <thead>
                              <tr>
                                 <th>User Name</th>
                                 <th>First Name</th>
                                 <th>Last Name</th>
                                 <th>Email</th>
                                 <th>Role/Groups</th>
                                 <?php if ($this->session->userdata("group_id") == 1): ?>
                                 <th>Status</th>
                                 <th>Edit</th>
                                 <th>Delete</th>
                                 <th>Send Email</th>
                                 <?php endif ?>
                              </tr>
                           </thead>
                           <tbody>
                              <?php foreach ($users as $user):?>
                              <tr>
                                 <td>
                                    <?php echo htmlspecialchars($user->username,ENT_QUOTES,'UTF-8');?>
                                 </td>
                                 <td>
                                    <?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?>
                                 </td>
                                 <td>
                                    <?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?>
                                 </td>
                                 <td>
                                    <?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?>
                                 </td>
                                 <td>
                                    <?php foreach ($user->groups as $group):?>
                                    <?php echo anchor("users/User_groups/edit_group/".$group->id,htmlspecialchars($group->name,ENT_QUOTES,'UTF-8'),'class="btn btn-midnightblue btn-sm"') ;?><br />
                                    <?php endforeach?>
                                 </td>
                                 <?php if ($this->session->userdata("group_id") == 1): ?>
                                 <td>
                                    <?php echo ($user->active) ? anchor("users/auth/deactivate/".$user->id, lang('index_active_link'),array('class' => 'btn btn-primary-alt btn-sm')) : anchor("users/activate/". $user->id, lang('index_inactive_link'),array('class' => 'btn btn-danger-alt btn-sm'));?>
                                    </a>
                                 </td>
                                 <td>
                                    <a class="btn btn-success-alt btn-sm" href="<?= base_url('users/edit_user')?>/<?= $user->id ?>"><i class="ti ti-pencil"></i></a>
                                    </a>
                                 </td>
                                 <td>
                                    <a href="<?= base_url('users/delete_user')?>/<?= $user->id ?>" class="btn btn-danger-alt btn-sm"><i class="ti ti-close"></i></a>
                                 </td>
                                 <td>
                                    <a href="#" id="send_email" data-user-id="<?= $user->id ?>" class="btn btn-primary-alt btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>
                                 </td>
                                 <?php endif ?>	
                              </tr>
                              <?php endforeach;?>
                           </tbody>
                        </table>
                     </div>
                     <div class="panel-footer"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- .container-fluid -->
   </div>
   <!-- #page-content -->
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-share-square" aria-hidden="true"></i> Send Email</h4>
         </div>
         <div class="modal-body">
            <form method="post" action="<?php bs() ?>users/email">
               <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" value="<?php echo $this->config->item('site_title','ion_auth') ?>" name="name" placeholder="Name" required>
               </div>
               <div class="form-group">
                  <label>From</label>
                  <input type="email" class="form-control" value="<?php echo $this->config->item('admin_email','ion_auth') ?>" name="from_email" placeholder="From" required>
               </div>
               <div class="form-group">
                  <label>To</label>
                  <input type="email" id="to" class="form-control" value="" name="to" placeholder="To" required>
               </div>
               <div class="form-group">
                  <label>Subject</label>
                  <input type="text" class="form-control" name="subject" value="" placeholder="Subject" required>
               </div>
               <div class="form-group">
                  <label>Message</label>
                  <textarea name="msg" class="form-control" rows="10" id="summernote" cols="10" placeholder="Write You Message" required></textarea>
               </div>
         </div>
         <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send</button>
         </div>
         </form>   
      </div>
   </div>
</div>
<script>
   $("body").on('click', '#send_email', function(event) 
   {
       event.preventDefault();
       /* Act on the event */
   
       var id = $(this).attr('data-user-id');
   
       $.ajax({
           url: '<?php bs() ?>users/email/get_user_email/'+id,
           type: 'POST',
       })
       .done(function(success) 
       {
           var obj = $.parseJSON(success);
   
           $("#to").val(obj[0].email);
           // console.log(obj[0].email);
       })
   });

</script>