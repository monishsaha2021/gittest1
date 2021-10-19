<div class="static-content-wrapper">
<div class="static-content">
<div class="page-content">
<ol class="breadcrumb">
   <li><a href="">Home</a></li>
   <li><a href="#">Update Post</a></li>
</ol>
<div class="container-fluid">
<div data-widget-group="group1">
<div class="row">
<div class="col-md-12">
   <div class="panel panel-success">
      <div class="panel-heading">
         <h2><i class="fa fa-file-text-o" aria-hidden="true"></i>Update Post</h2>
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

               <form action="<?= base_url('blog/Posts/edit_post') ?>" enctype="multipart/form-data" method="post" class="form-horizontal blog_settings row-border">
                  <div class="form-group">
                     <label class="col-sm-2 control-label text-success">
                       Post Title 
                     </label>
                     <div class="col-sm-4">
                        <input type="text" name="title" value="<?php echo $post_data->title ?>" class="form-control" required>

                        <input type="hidden" name="post_id" value="<?php echo $this->uri->segment(4); ?>">
                     </div>
                     <label class="col-sm-2 control-label text-success">Select Category </label>
                     <div class="col-sm-4">
                        <select name="category" class="form-control" required>
                           <option selected="selected" value="<?php echo $post_data->category_id ?>">
                              <?php echo $post_data->cat_name ?>
                           </option>
                           <?php foreach ($categories as $category): ?>
                              <option value="<?php echo $category->id ?>"><?php echo $category->cat_name ?></option>
                           <?php endforeach ?>
                        </select>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-2 control-label text-success">Meta Description</label>
                     <div class="col-sm-4">
                        <textarea name="meta_desc" class="form-control" rows="5" placeholder="Description Must be within 150 characters" required><?php echo $post_data->meta_desc ?></textarea>
                     </div>
                     <label class="col-sm-2 control-label text-success">Meta Keywords</label>
                     <div class="col-sm-4">
                        <textarea name="meta_keyword" class="form-control" rows="5" placeholder="keyword1,keyword2 etc" required><?php echo $post_data->meta_keywords ?></textarea>
                        <p class="help-block">Please Separate Keywords with comma ",".</p>
                     </div>
                  </div>
                  
                  <div class="form-group">
                     <label class="col-sm-2 control-label text-success">Select Tags</label>
                     <div class="col-sm-4">
                        <select name="tags[]" class="form-control" required multiple>
                           <?php foreach ($tags as $tag): ?>

                              <option value="<?php echo $tag->id ?>"

                                 <?php foreach ($post_tags as $post_tag): ?>
                                       
                                    <?php if ($tag->id == $post_tag->tag_id): ?>
                                       
                                       selected="selected"

                                    <?php endif ?>

                                 <?php endforeach ?>
                                    ><?php echo $tag->tag ?>
                              </option>
                           <?php endforeach ?>
                        </select>
                        <p class="help-block">Press CTRL to select multiple tags</p>
                     </div>

                     <label class="col-sm-2 control-label text-success">Featured Image</label>

                        <div class="col-sm-4">
                           <label for="blog_img">
                           <img src="<?= $post_data->featured_img ?>" id="img" width="100" height="100">
                           </label>
                           <input id="blog_img" name="img" type="file" class="blog_img visible" style="display: none;" required>
                           <input type="hidden" name="old_img" value="<?= $post_data->featured_img ?>">
                        </div>
                    
                  </div>
                  <div class="form-group">
                     <label class="col-sm-2 control-label text-success">Status </label>
                     <div class="col-sm-4">
                        <select name="status" class="form-control" required>
                           <?php if ($post_data->status == 1): ?>
                              
                              <option value="<?php echo $post_data->status ?>" selected="selected">Publish</option>

                           <?php else: ?>
                              
                              <option value="<?php echo $post_data->status ?>" selected="selected">Unpublish</option>

                           <?php endif ?>
                           <option value="1">Publish</option>
                           <option value="0">Unpublish</option>
                        </select>
                     </div>

                     <label class="col-sm-2 control-label text-success">Allow Comments </label>
                     <div class="col-sm-4">
                        <select name="allow_comment" class="form-control" required>

                           <?php if ($post_data->allow_comments == 1): ?>
                              
                              <option value="<?php echo $post_data->allow_comments ?>" selected="selected">Enable</option>

                           <?php else: ?>
                              
                              <option value="<?php echo $post_data->allow_comments ?>" selected="selected">Disable</option>
                              
                           <?php endif ?>

                           <option value="1">Enable</option>
                           <option value="0">Disable</option>
                        </select>
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-sm-2 control-label text-success">Post Content </label>
                     <div class="col-sm-10">
                        <textarea name="content" id="summernote" class="form-control" rows="5" required><?= $post_data->content  ?></textarea>
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-sm-2 control-label text-success"></label>
                     <div class="col-sm-8">
                        <button type="submit" class="btn btn-success">Update</button>
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


$(document).ready(function() {
  $('#summernote').summernote();
}); 

</script>