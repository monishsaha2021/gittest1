<div class="static-content-wrapper">
<div class="static-content">
<div class="page-content">
<ol class="breadcrumb">
   <li><a href="">Home</a></li>
   <li><a href="#">Site Configuration</a></li>
</ol>
<div class="container-fluid">
<div data-widget-group="group1">
<div class="row">
   <div class="col-md-12">
      <div class="alert alert-info mb-xl">
         <h3>Panel Options</h3>
         <p>All the basic panel options and colors are shown below. More Advanced Panels options will be coming soon!</p>
         <ul class="panel-color-list list-inline mt">
            <li><span data-style="panel-info"></span></li>
            <li><span data-style="panel-primary"></span></li>
            <li><span data-style="panel-blue"></span></li>
            <li><span data-style="panel-indigo"></span></li>
            <li><span data-style="panel-deeppurple"></span></li>
            <li><span data-style="panel-purple"></span></li>
            <li><span data-style="panel-pink"></span></li>
            <li><span data-style="panel-danger"></span></li>
            <li><span data-style="panel-teal"></span></li>
            <li><span data-style="panel-green"></span></li>
            <li><span data-style="panel-success"></span></li>
            <li><span data-style="panel-lime"></span></li>
            <li><span data-style="panel-yellow"></span></li>
            <li><span data-style="panel-warning"></span></li>
            <li><span data-style="panel-orange"></span></li>
            <li><span data-style="panel-deeporange"></span></li>
            <li><span data-style="panel-midnightblue"></span></li>
            <li><span data-style="panel-bluegray"></span></li>
            <li><span data-style="panel-bluegraylight"></span></li>
            <li><span data-style="panel-black"></span></li>
            <li><span data-style="panel-gray"></span></li>
            <li><span data-style="panel-default"></span></li>
            <li><span data-style="panel-white"></span></li>
            <li><span data-style="panel-brown"></span></li>
         </ul>
      </div>
   </div>
</div>
<div class="row">
<div class="col-md-12">
   <div class="panel panel-info">
      <div class="panel-heading">
         <h2><i class="fa fa-cogs"></i>Configuration</h2>
         <div class="panel-ctrls">
            <a href="#" class="button-icon"><i class="ti ti-file"></i></a>
            <a href="#" class="button-icon"><i class="ti ti-mouse"></i></a>
            <a href="#" class="button-icon"><i class="ti ti-settings"></i></a>
         </div>
      </div>
      <div class="panel-body">
         <div class="row">
            <div class="col-md-8">
               <form action="<?= base_url('site_config/Set_up') ?>" method="post" class="form-horizontal row-border">
                  <div class="form-group">
                     <label class="col-sm-3 control-label text-info">Site Name</label>
                     <div class="col-sm-8">
                        <input type="text" name="site_name" class="form-control" placeholder="Facebook,twitter etc...">
                        <div class="help-block">
                           The title of your site, used for email.
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-3 control-label text-info">Admin Email</label>
                     <div class="col-sm-8">
                        <input type="text" name="admin_email" class="form-control" placeholder="example@gmail.com">
                        <div class="help-block">
                           Your administrator email address. DEFAULT is 'admin@example.com'.
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-3 control-label text-info">Login Identity</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" name="login_id" placeholder="uesrname,email etc..">
                        <div class="help-block">
                           Column to use for uniquely identifying user/logging in/etc. Usual choices are 'email' OR 'user name'. You should add an index in the users table for whatever you set this option to. DEFAULT is 'email'.
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-3 control-label text-info">Min Password Length</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" name="min_pass" placeholder="3 etc..">
                        <div class="help-block">
                           Minimum length of passwords. DEFAULT is '8'.
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-3 control-label text-info">Max Password Length</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" name="max_pass" placeholder="10 etc...">
                        <div class="help-block">
                           Maximum length of passwords. DEFAULT is '20'.
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-3 control-label text-info">Max Login Attempts</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" name="login_atmpt" placeholder="6 etc">
                        <div class="help-block">
                           The maximum number of failed login,Default is 3. 
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-3 control-label text-info">User Expire</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" name="user_expire" placeholder="86500 etc">
                        <div class="help-block">
                           How long to remember the user (seconds). Set to zero for no expiration, Default is 86500. 
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-3 control-label text-info">Lock time</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" name="lock_time" placeholder="600 etc">
                        <div class="help-block">
                           The number of seconds to lockout an account due to exceeded attempts, Default is 600. 
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-3 control-label text-info">Email Activation</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" name="email_activation" placeholder="TRUE etc">
                        <div class="help-block">
                           Email Activation for user registration Default is FALSE, If you want to register new user with email activation then write down TRUE in the above text field and submit the form.
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-3 control-label text-info"></label>
                     <div class="col-sm-8">
                        <button type="submit" class="btn btn-toolbar">Set Up</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-md-4">
               <!-- <div class="alert alert-danger alert-dismissable">
                  <h4><i class="fa fa-exclamation-circle"></i> Notification</h4>
                  
                  </div> -->
               <div class="alert alert-dismissable alert-danger">
                  <i class="ti ti-announcement"></i>&nbsp; <strong>Notification!</strong> 
                  <p>If You Leave any field in the form the default setting will be apply. </p>
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
