<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">
              <li class=""><a href="">Home</a></li>
              <li class=""><a href="">Users</a></li>
              <li class="active"><a href="">Update User</a></li>
            </ol>
            <div class="container-fluid">

        <div class="panel panel-info" data-widget='{"draggable": "false"}'>
          <div class="panel-heading">
            <h2><i class="fa fa-user"></i>Update User</h2>
            <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
          </div>
          <div class="panel-body">
            <?php echo validation_errors(); ?>
            <?= form_open(uri_string(),array('id'=>'social_config','class'=>'form-horizontal validate')); ?>
                <div class="form-group">
                  <label for="fieldname" class="col-md-3 control-label">First Name</label>
                  <div class="col-md-6">
                    <?php
                      $first_name['class']='form-control';  
                      echo form_input($first_name);
                     ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fieldname" class="col-md-3 control-label">Last Name</label>
                  <div class="col-md-6">
                    <?php 
                       $last_name['class']='form-control'; 
                       echo form_input($last_name);
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fieldname" class="col-md-3 control-label">User Name</label>
                  <div class="col-md-6">
                    <?php
                      echo form_input($username);
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fieldname" class="col-md-3 control-label">Email Address</label>
                  <div class="col-md-6">
                    <?php
                      echo form_input($email);
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fieldname" class="col-md-3 control-label">Company Name</label>
                  <div class="col-md-6">
                    <?php
                      echo form_input($company);
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fieldname" class="col-md-3 control-label">Phone No</label>
                  <div class="col-md-6">
                    <?php
                      echo form_input($phone);
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fieldname" class="col-md-3 control-label">Password</label>
                  <div class="col-md-6">
                    <?php
                      echo form_input($password);
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fieldname" class="col-md-3 control-label">Confirm Password</label>
                  <div class="col-md-6">
                    <?php
                      echo form_input($password_confirm);
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fieldname" class="col-md-3 control-label"><?php echo lang('edit_user_groups_heading');?></label>
                  <div class="col-md-6">
                    <?php if ($this->ion_auth->is_admin()): ?>

                        <?php foreach ($groups as $group):?>
                            <label class="btn btn-info">
                            <?php
                                $gID=$group['id'];
                                $checked = null;
                                $item = null;
                                foreach($currentGroups as $grp) {
                                    if ($gID == $grp->id) {
                                        $checked= ' checked="checked"';
                                    break;
                                    }
                                }
                            ?>
                            <input type="checkbox" class="bg" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                            <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                            </label>
                        <?php endforeach?>

                    <?php endif ?>

                    <?php echo form_hidden('id', $user->id);?>
                    <?php echo form_hidden($csrf); ?>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-3">
                    <input type="submit" name="submit" class="finish btn-primary btn" value="Submit">
                </div>
              </fieldset>
            </form>
          </div>
        </div>

     </div> <!-- .container-fluid -->
  </div> <!-- #page-content -->
</div>

