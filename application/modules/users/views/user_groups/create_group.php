<div class="static-content-wrapper">
<div class="static-content">
   <div class="page-content">
      <ol class="breadcrumb">
         <li class=""><a href="#">Home</a></li>
         <li class=""><a href="#">User Groups</a></li>
         <li class="active"><a href="#">Create Group</a></li>
      </ol>
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-11">
               <div class="panel panel-info" data-widget='{"draggable": "false"}'>
                  <div class="panel-heading">
                     <h2><i class="fa fa-plus-circle"></i><?php echo lang('create_group_heading');?></h2>
                     <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
                  </div>
                  <div class="panel-body">
                     <p>The wizard has jQuery Validation plugin support built-in. All you need to do is turn on the <code>validate: true</code> option on and you instantly have a wizard with form validation!</p>
                     <?php echo form_open("users/User_groups/create_group",array('id'=>'wizard','class'=>'form-horizontal'));?>
                     <fieldset title="Step 1">
                        <legend>Create Group</legend>
                        <div class="form-group">
                           <label for="fieldname" class="col-md-3 control-label">Group Name</label>
                           <div class="col-md-6">
                              <?php echo form_input($group_name);?>
                              <span id="err_msg" style="color:red"></span>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="fieldemail" class="col-md-3 control-label">Desc</label>
                           <div class="col-md-6">
                              <?php echo form_input($description);?>
                           </div>
                        </div>
                     </fieldset>
                     <fieldset title="Step 2">
                        <legend>Assign Privileges</legend>
                        <div class="form-group">
                           <div class="col-md-6 col-md-offset-4">
                              <?php foreach ($perm as $key => $value): ?>
                              <div class="checkbox red icheck">
                                 <label>
                                 <input type="checkbox" name="privilege[]" value="<?php echo $value->perm_id ?>"><?php echo $value->perm_name ?>
                                 </label>
                              </div>
                              <?php endforeach ?>
                           </div>
                        </div>
                     </fieldset>
                     <input type="submit" class="finish btn-success btn" value="Submit" />
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- .container-fluid -->
</div>
<!-- #page-content -->
<script>
   $(document).ready(function() {
   
      //This script is to check email validity
      $("body").on('change', '#group_name', function()
      {
         var group_name = $("#group_name").val();
   
         if (group_name.length === 0) 
         {
           $('#err_msg').text('Group Name is required');
           return false;
         }
   
         $.ajax({
           url: '<?= base_url("users/User_groups/check_group_name") ?>',
           method: 'POST',
           dataType: 'TEXT',
           data: {group_name: group_name},
           success: function(result) 
           {
             var msg = result.split("::");
   
             if (msg[0] == "ok")
             {
               $("#err_msg").fadeIn();
               $("#err_msg").text("Group name already taken.");
             }  
             else
             {
               console.log('Success');
               $("#err_msg").fadeIn();
               $("#err_msg").html("<span class='fa fa-check-circle text-success'> Success</span>");
               $("#err_msg").delay(3000).fadeOut();
             }
           },
           error:function(result) 
           {
             // body...
             console.log(result);
           }
         })
      });
   });
     
</script>