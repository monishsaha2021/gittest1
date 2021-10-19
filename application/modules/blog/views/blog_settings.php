<div class="static-content-wrapper">
<div class="static-content">
<div class="page-content">
<ol class="breadcrumb">
   <li><a href="">Home</a></li>
   <li><a href="#">Blog Settings</a></li>
</ol>
<div class="container-fluid">
<div data-widget-group="group1">
<div class="row">
<div class="col-md-12">
   <div class="panel panel-success">
      <div class="panel-heading">
         <h2><i class="fa fa-cogs"></i>Blog Settings</h2>
         <div class="panel-ctrls">
            <a href="#" class="button-icon"><i class="ti ti-file"></i></a>
            <a href="#" class="button-icon"><i class="ti ti-mouse"></i></a>
            <a href="#" class="button-icon"><i class="ti ti-settings"></i></a>
         </div>
      </div>

      <div class="panel-body">
         <div class="row">
            <div class="col-md-12">
               <?php if (!empty(validation_errors())): ?>

                  <div class="alert alert-danger">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <strong><?php echo validation_errors(); ?></strong>
                  </div>

               <?php endif ?>
               <form action="<?= base_url('blog/BlogSettings/blog_settings') ?>" enctype="multipart/form-data" method="post" class="form-horizontal blog_settings row-border">
                  <div class="form-group">
                     <label class="col-sm-2 control-label text-success">Meta Description</label>
                     
                     <div class="col-sm-4">
                        <textarea name="meta_desc" class="form-control" rows="5" placeholder="Complete SEO tips for optimization your web content" required><?php echo $settings->meta_description ?></textarea>
                     </div>
                     <label class="col-sm-2 control-label text-success">Meta Keywords</label>
                     <div class="col-sm-4">
                        <textarea name="meta_keyword" class="form-control" rows="5" placeholder="seo,tips etc" required><?php echo $settings->meta_kewords ?></textarea>
                        <p class="help-block">Please Separate Keywords with comma ",".</p>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-2 control-label text-success">
                        Maximum number of post shown on page (For Blog Index Page) 
                     </label>
                     <div class="col-sm-4">
                        <input type="number" name="post_per_page" value="<?php echo $settings->per_page_posts ?>" class="form-control" placeholder="4,5,6 etc" required>
                     </div>
                     <label class="col-sm-2 control-label text-success">Enable/Disable Comments </label>
                     <div class="col-sm-4">
                        <select name="comments" class="form-control" required>
                           <option value="<?php echo $settings->enable_comments ?>" selected="selected">
                              <?php if ($settings->enable_comments == 0): ?>
                                 Disable

                              <?php else: ?>   
                                 Enable

                              <?php endif ?>               
                           </option>
                           <option value="1">Enable</option>
                           <option value="0">Disable</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-2 control-label text-success">Enable/Disable Recent Post</label>
                     <div class="col-sm-4">
                        <select name="enable_recent_posts" class="form-control" required>
                           <option value="<?php echo $settings->enable_recent_post ?>" selected="selected">
                              <?php if ($settings->enable_recent_post == 0): ?>
                                 Disable

                              <?php else: ?>   
                                 Enable

                              <?php endif ?>               
                           </option>

                           <option value="1">Enable</option>
                           <option value="0">Disable</option>
                        </select>
                     </div>

                     <label class="col-sm-2 control-label text-success">Default Image</label>

                     <?php if (empty($settings->default_img)): ?>

                        <div class="col-sm-4">
                           <label for="blog_img">
                           <img src="<?php bs() ?>public/assets/img/add-image.png" id="img" width="100" height="100">
                           </label>
                           <input id="blog_img" name="img" type="file" class="blog_img visible" style="display: none;" required>
                        </div>

                   <?php else: ?>  

                        <div class="col-sm-4">
                           <label for="blog_img">
                           <img src="<?php echo $settings->default_img ?>" id="img" width="100" height="100">
                           </label>
                           <input id="blog_img" name="img" type="file" class="blog_img visible" style="display: none;">
                           <input type="hidden" value="<?php echo $settings->default_img  ?>" name="update_img">
                        </div>

                   <?php endif ?>


                    
                  </div>
                  <div class="form-group">
                     <label class="col-sm-2 control-label text-success">Enable/Disable Category Posts </label>
                     <div class="col-sm-4">
                        <select name="category_posts" class="form-control" required>
                           <option value="<?php echo $settings->enable_category_posts ?>" selected="selected">
                              <?php if ($settings->enable_category_posts == 0): ?>
                                 Disable

                              <?php else: ?>   
                                 Enable

                              <?php endif ?>               
                           </option>
                           <option value="1">Enable</option>
                           <option value="0">Disable</option>
                        </select>
                     </div>
                     <label class="col-sm-2 control-label text-success">Youtube </label>
                     <div class="col-sm-4">
                        <input type="link" name="youtube" value="<?php echo $settings->youtube ?>" class="form-control" required>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-2 control-label text-success">Facebook</label>
                     <div class="col-sm-4">
                        <input type="link" name="facebook" value="<?php echo $settings->facebook ?>" class="form-control" required>
                     </div>
                     <label class="col-sm-2 control-label text-success">Linkedin</label>
                     <div class="col-sm-4">
                        <input type="link" name="linkedin" value="<?php echo $settings->Linkedin ?>" class="form-control" required>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-2 control-label text-success"></label>
                     <div class="col-sm-8">
                        <button type="submit" class="btn btn-toolbar">Set Up</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<script>
function first_img(input) 
{

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#img').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$(".blog_img").change(function() 
{
  first_img(this);
});
</script>