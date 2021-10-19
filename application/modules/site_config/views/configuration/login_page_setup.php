<div class="static-content-wrapper">
<div class="static-content">
<div class="page-content">
<ol class="breadcrumb">
   <li><a href="">Home</a></li>
   <li><a href="#">Login Page Settings</a></li>
</ol>
<div class="container-fluid">
<div data-widget-group="group1">
<div class="row">
<div class="col-md-12">
<div class="panel panel-info">
   <div class="panel-heading">
      <h2><i class="fa fa-cogs"></i>Login Settings</h2>
      <div class="panel-ctrls">
         <a href="#" class="button-icon"><i class="ti ti-file"></i></a>
         <a href="#" class="button-icon"><i class="ti ti-mouse"></i></a>
         <a href="#" class="button-icon"><i class="ti ti-settings"></i></a>
      </div>
   </div>
   <div class="panel-body">
      <div class="row" style="">
         <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" data-widget='{"draggable": "false"}'>
               <div class="panel-heading">
                  <h2>Login</h2>
                  <div>
                     <ul class="nav nav-tabs pull-right">
                        <li class="active"><a href="#home1" data-toggle="tab">User Registration</a></li>
                        <li><a href="#tabb2" data-toggle="tab">Forgot Password</a></li>
                        <li><a href="#tabb3" data-toggle="tab">Social Logins</a></li>
                        <li><a href="#tabb4" data-toggle="tab">Two Factor Authentication</a></li>
                     </ul>
                  </div>
               </div>
               <div class="panel-body">
                  <div class="tab-content">
                     <div class="tab-pane active" id="home1">
                        <div class="row">
                           <div class="col-md-7">
                              <fieldset>
                                 <legend>
                                    Enable / Disable User Registration
                                 </legend>
                                 <p>
                                    Click to change the Status of User Registration.
                                 </p>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="radio radio-danger">

                                          <?php if ($reg_status[0]->registration_status == 1): ?>	

                                          <input type="radio" name="status" value="1" class="status_enable" checked>
                                            <label for="radio3">
                                            Enable 
                                            </label>

                                          <?php else: ?> 

                                          <input type="radio" name="status" value="1" class="status_enable">
                                          <label for="radio3">
                                          Enable 
                                          </label>
                                          
                                          <?php endif; ?> 
                                       </div>
                                       <div class="radio radio-danger">
                                          <?php if($reg_status[0]->registration_status == 0): ?>
                                          <input type="radio" name="status" value="0" class="status_disable" checked>
                                          <label for="radio4">
                                          Disable
                                          </label>
                                          <?php else: ?>
                                          <input type="radio" name="status" value="0" class="status_disable">
                                          <label for="radio4">
                                          Disable
                                          </label>
                                          <?php endif; ?>
                                       </div>
                                    </div>
                                 </div>
                              </fieldset>
                           </div>
                           <div class="col-md-5 reg_msg">
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="tabb2">
                        <div class="row">
                           <div class="col-md-7">
                              <fieldset>
                                 <legend>
                                    Enable / Disable Forgot Password
                                 </legend>
                                 <p>
                                    Click to change the Status of Forgot Password.
                                 </p>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="radio radio-danger">
                                          <?php if ($reg_status[0]->forgot_pass_status == 1): ?>
                                          <input type="radio" name="forgot_pass" id="forgot_pass" class="forgot_pass" value="1" checked>
                                          <label for="radio3">
                                          Enable 
                                          </label>
                                          <?php else: ?> 
                                          <input type="radio" name="forgot_pass" id="forgot_pass" class="forgot_pass" value="1">
                                          <label for="radio3">
                                          Enable 
                                          </label>
                                          <?php endif; ?>         
                                       </div>
                                       <div class="radio radio-danger">
                                          <?php if($reg_status[0]->forgot_pass_status == 0): ?>
                                          <input type="radio" name="forgot_pass" id="forgot_pass" class="forgot_pass" value="0" checked>
                                          <label for="radio4">
                                          Disable
                                          </label>
                                          <?php  else: ?>
                                          <input type="radio" name="forgot_pass" id="forgot_pass" class="forgot_pass" value="0">
                                          <label for="radio4">
                                          Disable
                                          </label>
                                          <?php  endif; ?>       
                                       </div>
                                    </div>
                                 </div>
                              </fieldset>
                           </div>
                           <div class="col-md-5 forgot_pass_status">
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="tabb3">
                        <div class="row">
                           <div class="col-md-7">
                              <fieldset>
                                 <legend>
                                    Enable / Disable Social Logins
                                 </legend>
                                 <p>
                                    Click to change the Status of Social Logins.
                                 </p>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="radio radio-danger">
                                          <?php if ($reg_status[0]->socail_login_status == 1): ?>
                                          <input type="radio" name="social_login" id="social_login" class="social_login" value="1" checked>
                                          <label for="radio3">
                                          Enable 
                                          </label>
                                          <?php  else: ?>
                                          <input type="radio" name="social_login" id="social_login" class="social_login" value="1">
                                          <label for="radio3">
                                          Enable 
                                          </label>
                                          <?php endif; ?> 
                                       </div>
                                       <div class="radio radio-danger">
                                          <?php  if($reg_status[0]->socail_login_status == 0):   ?>
                                          <input type="radio"  name="social_login" id="social_login" class="social_login" value="0" checked>
                                          <label for="radio4">
                                          Disable
                                          </label>
                                          <?php  else:  ?>
                                          <input type="radio"  name="social_login" id="social_login" class="social_login" value="0">
                                          <label for="radio4">
                                          Disable
                                          </label>
                                          <?php endif; ?>   
                                       </div>
                                    </div>
                                 </div>
                              </fieldset>
                           </div>
                           <div class="col-md-5 social_login">
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="tabb4">
                        <div class="row">
                           <div class="col-md-7">
                              <fieldset>
                                 <legend>
                                    Enable / Disable Two Factor Authentication
                                 </legend>
                                 <p>
                                    Click to change the Status of Two Fator Authentication.
                                 </p>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="radio radio-danger">

                                          <?php if ($reg_status[0]->two_factor_auth == 1): ?>

                                          <input type="radio" name="two_factor_auth" id="two_factor_auth" class="two_factor_auth" value="1" checked>
                                          <label for="radio3">
                                          Enable 
                                          </label>

                                          <?php  else: ?>

                                          <input type="radio" name="two_factor_auth" id="two_factor_auth" class="two_factor_auth" value="1">
                                          <label for="radio3">
                                          Enable 
                                          </label>

                                          <?php endif; ?> 

                                       </div>
                                       <div class="radio radio-danger">
                                          <?php  if($reg_status[0]->two_factor_auth == 0):   ?>

                                          <input type="radio"  name="two_factor_auth" id="two_factor_auth" class="two_factor_auth" value="0" checked>
                                          <label for="radio4">
                                          Disable
                                          </label>

                                          <?php  else:  ?>

                                          <input type="radio"  name="two_factor_auth" id="two_factor_auth" class="two_factor_auth" value="0">
                                          <label for="radio4">
                                          Disable
                                          </label>

                                          <?php endif; ?>   
                                       </div>
                                    </div>
                                 </div>
                              </fieldset>
                           </div>
                           <div class="col-md-5 two_factor_auth">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<script>
   $(document).ready(function() 
   {
     $("body").on('change', '.status_enable', function(event) 
     {
       event.preventDefault();
       /* Act on the event */ 

       var enable = $('.status_enable').val();
   
       $.ajax({
         url : "<?php bs('site_config/login_setup/reg_status')?>",
         method :'POST',
         data : {status:enable},
         dataType : 'text',
         success : function(data)
         {
           $('.reg_msg').html('<div class="alert alert-dismissable alert-success">'+
   			            		'<i class="ti ti-announcement"></i>&nbsp;'+ 
   			            			'<strong>Notification!</strong>'+
   			            			'<p><b>User Registration Enable Successfully</b></p>'+
   			            			'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;'+
   			            			'</button>'+
   			            	'</div>');
   
   
   		window.setTimeout(function() {
   		    $(".alert").fadeTo(500, 0).slideUp(1000, function(){
   		        $(this).remove(); 
   		    });
   		}, 1000);
   
         }
   
       });
     });
   
     $("body").on('change', '.status_disable', function(event) 
     {
       event.preventDefault();
       /* Act on the event */  
   
       var disable = $('.status_disable').val();

       $.ajax({
         url : "<?php bs('site_config/login_setup/reg_status')?>",
         method :'POST',
         data : {status:disable},
         dataType : 'text',
         success : function(data)
         {
           $('.reg_msg').html('<div class="alert alert-dismissable alert-success">'+
   			            		'<i class="ti ti-announcement"></i>&nbsp;'+ 
   			            			'<strong>Notification!</strong>'+
   			            			'<p><b>User Registration Disable Successfully</b></p>'+
   			            			'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;'+
   			            			'</button>'+
   			            	'</div>');
   
           window.setTimeout(function() {
   		    $(".alert").fadeTo(500, 0).slideUp(1000, function(){
   		        $(this).remove(); 
   		    });
   		}, 1000);
         }
       });
     });
   }); 
</script>
<script>
   //forgot password enable or disable  
   $("body").on('change', '.forgot_pass', function(event) 
   {
     event.preventDefault();
     /* Act on the event */ 
   
     var status = (this.value === '1') ? '1' : '0';
   
     $.ajax({
       url : '<?php bs('site_config/login_setup/forgot_pass_status')?>',
       method :'POST',
       data : {status:status},
       dataType : 'text',
       success : function(data)
       {
         if (status == 1)
         {
           $('.forgot_pass_status').html('<div class="alert alert-dismissable alert-success">'+
   				            		'<i class="ti ti-announcement"></i>&nbsp;'+ 
   				            			'<strong>Notification!</strong>'+
   				            			'<p><b>Forgot Password Enable Successfully</b></p>'+
   				            			'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;'+
   				            			'</button>'+
   				            	'</div>');
   
           window.setTimeout(function() {
   		    $(".alert").fadeTo(500, 0).slideUp(1000, function(){
   		        $(this).remove(); 
   		    });
   		}, 1000);
         }
         else
         {
           $('.forgot_pass_status').html('<div class="alert alert-dismissable alert-success">'+
   				            		'<i class="ti ti-announcement"></i>&nbsp;'+ 
   				            			'<strong>Notification!</strong>'+
   				            			'<p><b>Forgot Password Disable Successfully</b></p>'+
   				            			'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;'+
   				            			'</button>'+
   				            	'</div>');
   
           window.setTimeout(function() {
   		    $(".alert").fadeTo(500, 0).slideUp(1000, function(){
   		        $(this).remove(); 
   		    });
   		}, 1000);
         }
               
       }
   
     });
   });
   
</script>
<script>
   //forgot password enable or disable  
   $("body").on('change', '.social_login', function(event) 
   {
     event.preventDefault();
     /* Act on the event */  

     var status = (this.value === '1') ? '1' : '0';
     
     $.ajax({
       url : '<?php bs('site_config/login_setup/social_login_status')?>',
       method :'POST',
       data : {status:status},
       dataType : 'text',
       success : function(data)
       {
         if (status == 1)
         {
           $('.social_login').html('<div class="alert alert-dismissable alert-success">'+
   				            		'<i class="ti ti-announcement"></i>&nbsp;'+ 
   				            			'<strong>Notification!</strong>'+
   				            			'<p><b>Social Logins Enable Successfully</b></p>'+
   				            			'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;'+
   				            			'</button>'+
   				            	'</div>');
   
           window.setTimeout(function() {
   		    $(".alert").fadeTo(500, 0).slideUp(1000, function(){
   		        $(this).remove(); 
   		    });
   		}, 1000);
         }
         else
         {
           $('.social_login').html('<div class="alert alert-dismissable alert-success">'+
   				            		'<i class="ti ti-announcement"></i>&nbsp;'+ 
   				            			'<strong>Notification!</strong>'+
   				            			'<p><b>Social Logins Disable Successfully</b></p>'+
   				            			'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;'+
   				            			'</button>'+
   				            	'</div>');
   
           window.setTimeout(function() {
   		    $(".alert").fadeTo(500, 0).slideUp(1000, function(){
   		        $(this).remove(); 
   		    });
   		}, 1000);
         }
               
       }
   
     });
   });
   
</script>
<script>
   //forgot password enable or disable  
   $("body").on('change', '.two_factor_auth', function(event) 
   {
     event.preventDefault();
     /* Act on the event */  

   
     var status = (this.value === '1') ? '1' : '0';
     
     $.ajax({
       url : '<?php bs('site_config/login_setup/two_factor_auth')?>',
       method :'POST',
       data : {status:status},
       dataType : 'text',
       success : function(data)
       {
         if (status == 1)
         {
           $('.two_factor_auth').html('<div class="alert alert-dismissable alert-success">'+
   				            		'<i class="ti ti-announcement"></i>&nbsp;'+ 
   				            			'<strong>Notification!</strong>'+
   				            			'<p><b>Two factor Authentication Enable Successfully</b></p>'+
   				            			'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;'+
   				            			'</button>'+
   				            	'</div>');
   
           window.setTimeout(function() {
   		    $(".alert").fadeTo(500, 0).slideUp(1000, function(){
   		        $(this).remove(); 
   		    });
   		}, 1000);
         }
         else
         {
           $('.two_factor_auth').html('<div class="alert alert-dismissable alert-success">'+
   				            		'<i class="ti ti-announcement"></i>&nbsp;'+ 
   				            			'<strong>Notification!</strong>'+
   				            			'<p><b>Two factor Authentication Disable Successfully</b></p>'+
   				            			'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;'+
   				            			'</button>'+
   				            	'</div>');
   
           window.setTimeout(function() {
   		    $(".alert").fadeTo(500, 0).slideUp(1000, function(){
   		        $(this).remove(); 
   		    });
   		}, 1000);
         }
               
       }
   
     });
   });
   
</script>