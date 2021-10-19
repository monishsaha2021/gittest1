
<style type="text/css">
  .list-group-item{
    border: none !important;
  }
</style>

<link rel="stylesheet" href="<?php bs('public/assets/libs/hummingbird-treeview/hummingbird-treeview.css') ?>">

<div class="row">
    <div class="col-12">
        
        <div class="panel panel-success" data-widget='{"draggable": "false"}'>
          <form id="permission_list">
            
            <div class="panel-heading">
              <div class="row">
                <div  class="col-md-3">
                  <h5>All Modules List</h5>
                </div>
                <div class="col-md-2 offset-7">
                  <button type="submit" class="btn btn-lg btn-primary float-md-end"><?php echo lang('save');?></button>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <div class="row">

                <?php
                  //check permission 
                  if ($this->ion_auth->is_admin()): ?>

                <?php 
                  //modules list
                  foreach ($privileges as $key => $privilege): ?>
                  <div class="col-md-3">
                    <div id="treeview_container" class="hummingbird-treeview">
                      
                      <ul id="treeview<?=$key?>" class="hummingbird-base">
                         <li data-id="0">
                            <i class="fa fa-plus"></i>
                            <label>
                            <input id="xnode-0" data-id="custom-0" type="checkbox" value="<?=$privilege['module']->perm_id?>" /> <?=$privilege['module']->perm_name?>
                            </label>
                            
                            <ul>
                              <?php
                              // sub module list 
                              foreach ($privileges[$key]['sub_modules'] as $key2 => $sub_module): ?>
                               <li data-id="1">
                                  <i class="fa fa-plus"></i>
                                  <label>
                                    <input  id="xnode-0-1" data-id="custom-0-1" type="checkbox" /> <?=$sub_module->perm_sub_name?>
                                  </label>
                                  <?php
                                  //checking if current module has any child module  
                                  if(isset($privileges[$key]['sub_childModules'])): 
                                  //if have then 
                                  ?>
                                  <ul>
                                    <?php
                                      //sub child module list
                                     foreach ($privileges[$key]['sub_childModules'] as $key3 => $sub_childModule): ?>
                                     <li data-id="1">
                                        <i class="fa fa-plus"></i>
                                        <label>
                                          <input id="xnode-0-1-1" data-id="custom-0-1-1" type="checkbox" /> <?=$sub_childModule->perm_sub_name?>
                                        </label>

                                        <ul>
                                          <li>
                                            <label>
                                            <input class="hummingbird-end-node" id="xnode-0-1-1-1" data-id="custom-0-1-1-1" type="checkbox" /> View
                                            </label>
                                          </li>
                                          <li>
                                            <label>
                                            <input class="hummingbird-end-node" id="xnode-0-1-1-1" data-id="custom-0-1-1-1" type="checkbox" /> Add
                                            </label>
                                          </li>
                                          <li>
                                            <label>
                                            <input class="hummingbird-end-node" id="xnode-0-1-1-1" data-id="custom-0-1-1-1" type="checkbox" /> Edit
                                            </label>
                                          </li>
                                          <li>
                                            <label>
                                            <input class="hummingbird-end-node" id="xnode-0-1-1-1" data-id="custom-0-1-1-1" type="checkbox" /> Delete
                                            </label>
                                          </li>
                                        </ul>

                                     </li>
                                     <?php endforeach; ?>
                                  </ul>
                                <?php else: ?>
                                  <ul>
                                    <li>
                                      <label>
                                      <input class="hummingbird-end-node" id="xnode-0-1-1-1" data-id="custom-0-1-1-1" type="checkbox" /> View
                                      </label>
                                    </li>
                                    <li>
                                      <label>
                                      <input class="hummingbird-end-node" id="xnode-0-1-1-1" data-id="custom-0-1-1-1" type="checkbox" /> Add
                                      </label>
                                    </li>
                                    <li>
                                      <label>
                                      <input class="hummingbird-end-node" id="xnode-0-1-1-1" data-id="custom-0-1-1-1" type="checkbox" /> Edit
                                      </label>
                                    </li>
                                    <li>
                                      <label>
                                      <input class="hummingbird-end-node" id="xnode-0-1-1-1" data-id="custom-0-1-1-1" type="checkbox" /> Delete
                                      </label>
                                    </li>
                                  </ul>
                                <?php endif; ?>
                               </li>
                               <?php endforeach; ?>
                            </ul>

                         </li>
                      </ul>

                    </div>
                  </div>
                  <?php endforeach; ?>
                 <?php endif ?>
              </div>
              <?php echo form_close();?>
            </div>

          </form>
        </div>

    </div> <!-- end col -->
</div> <!-- end row -->

<script src="<?php bs('public/assets/libs/hummingbird-treeview/hummingbird-treeview.js') ?>"></script>

<?php foreach ($privileges as $key => $privilege): ?>
<script type="text/javascript">
$("#treeview<?=$key?>").hummingbird();
$("#treeview<?=$key?>").hummingbird("checkAll");
</script>
<?php endforeach; ?>

<script>

$(document).ready(function() {

  //form submit ajax request
  $("body").on('submit', '#permission_list', function(e){
    e.preventDefault();
    $.ajax({
      url: '<?= base_url("users/User_groups/check_group_name") ?>',
      method: 'POST',
      dataType: 'JSON',
      data: $(this).serialize(),
      success: function(result) 
      {
        console.log(result);
      },
      error:function(result) 
      {
        // body...
        console.log(result);
      }
    });
  });


});
     
</script>