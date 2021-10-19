<div class="static-content-wrapper">
<div class="static-content">
   <div class="page-content">
      <ol class="breadcrumb">
         <li class=""><a href="">Home</a></li>
         <li class=""><a href="">User Groups</a></li>
         <li class="active"><a href="">View Groups</a></li>
      </ol>
      <div class="container-fluid">
         <div data-widget-group="group1">
            <div class="row">
               <div class="col-md-12">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h2>User Roles/Groups</h2>
                        <div class="panel-ctrls"></div>
                     </div>
                     <div class="panel-body no-padding">
                        <?php 
                           //If user is admin
                           if ($this->ion_auth->get_user_group() == 1) 
                           {
                           ?>
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                           <thead>
                              <tr>
                                 <th>Role/Group</th>
                                 <th>Description</th>
                                 <th>Edit</th>
                                 <th>Delete</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php foreach ($groups as $group):?>
                              <tr>
                                 <td>
                                    <?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8');?>
                                 </td>
                                 <td>
                                    <?php echo htmlspecialchars($group->description,ENT_QUOTES,'UTF-8');?>
                                 </td>
                                 <td>
                                    <a href="<?= base_url('users/User_groups/edit_group')?>/<?= $group->id ?>">
                                    <button class="btn btn-info-alt"><i class="ti ti-pencil"></i> Edit</button>
                                    </a>
                                 </td>
                                 <td>
                                    <a href="<?= base_url('users/User_groups/delete_group')?>/<?= $group->id ?>"> 
                                    <button class="btn btn-danger-alt" disable>
                                    <i class="ti ti-close"></i> Delete
                                    </button>
                                    </a> 
                                 </td>
                              </tr>
                              <?php endforeach;?>
                           </tbody>
                        </table>
                        <?php
                           }
                           
                           if ($this->ion_auth->get_user_group() == 2) {
                           ?>
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                           <thead>
                              <tr>
                                 <th>Role/Group</th>
                                 <th>Description</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php foreach ($groups as $group):?>
                              <tr>
                                 <td>
                                    <?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8');?>
                                 </td>
                                 <td>
                                    <?php echo htmlspecialchars($group->description,ENT_QUOTES,'UTF-8');?>
                                 </td>
                              </tr>
                              <?php endforeach;?>
                           </tbody>
                        </table>
                        <?php
                           }
                           ?>	
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