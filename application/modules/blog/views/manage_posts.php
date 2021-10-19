<div class="static-content-wrapper">
<div class="static-content">
<div class="page-content">
<ol class="breadcrumb">
   <li><a href="">Home</a></li>
   <li><a href="#">Manage Blog Posts </a></li>
</ol>
<div class="container-fluid">
<div data-widget-group="group1">
<div class="row">
<div class="col-md-12">
   <div class="panel panel-default">
      <div class="panel-heading">
         <h2><i class="fa fa-wrench"></i>Manage Blog Posts</h2>
         <div class="panel-ctrls">
            <a href="#" class="button-icon"><i class="ti ti-file"></i></a>
            <a href="#" class="button-icon"><i class="ti ti-mouse"></i></a>
            <a href="#" class="button-icon"><i class="ti ti-settings"></i></a>
         </div>
      </div>
      <div class="panel-body">
         <div class="row">
            <div class="col-md-12">

               <table class="table table-hover" id="example">
                  <thead>
                     <tr>
                        <th>Post Title</th>
                        <th>Featured Image</th>
                        <th>Created at</th>
                        <th>Allow Comments</th>
                        <th>Status</th>
                        <th>Actions</th>
                     </tr>
                  </thead>
                  <tbody>

                     <?php if (!empty($posts)): ?>
                        

                     <?php 

                           foreach ($posts as $post): 
                     ?>

                     <tr>
                        <td><?php echo $post->title ?></td>
                        <td><img src="<?php echo $post->featured_img ?>" alt="Featured Image" width="30"></td>
                        <td><?php echo date('m-d-Y',strtotime($post->created_at)) ?></td>
                        <td>
                           <?php if ($post->allow_comments == 1): ?>

                           <a href="<?php bs() ?>blog/posts/unallow_comments/<?php echo $post->id ?>" data-toggle="tooltip" data-placement="top" title="Click to Change Status">
                              <button type="button" class="btn btn-success btn-xs">Yes</button>
                           </a>

                           <?php else: ?>
                           
                           <a href="<?php bs() ?>blog/posts/allow_comments/<?php echo $post->id ?>" data-toggle="tooltip" data-placement="top" title="Click to Change Status">
                              <button type="button" class="btn btn-danger btn-xs">No</button>   
                           </a>   

                           <?php endif ?>
                        </td>
                        <td>
                           <?php if ($post->status == 1): ?>

                              <a href="<?php bs() ?>blog/posts/unpublish/<?php echo $post->id ?>" data-toggle="tooltip" data-placement="top" title="Click to Change Status">
                                 <button type="button" class="btn btn-success btn-xs">Publish</button>
                              </a>  

                           <?php else: ?>

                              <a href="<?php bs() ?>blog/posts/publish/<?php echo $post->id ?>" data-toggle="tooltip" data-placement="top" title="Click to Change Status">
                                 <button type="button" class="btn btn-danger btn-xs">Unpublish</button>   
                              </a>   
                              
                           <?php endif ?>
                        </td>
                        <td>
                           <a href="<?php bs() ?>blog/posts/edit_post/<?php echo $post->id ?>">
                              <button type="button" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></button>
                           </a>   
                           <?php if ($post->status == 0): ?>
                           
                              <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-external-link" disable data-toggle="tooltip" data-placement="top" title="This Post is Unpulish"></i></button>

                           <?php else: ?>

                           <a href="<?php bs() ?>blog/post/<?php echo $post->slug ?>" target="_blank">
                              <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-external-link"></i></button>
                           </a>   

                           <?php endif ?>

                           <a href="<?php bs() ?>blog/posts/delete_post/<?php echo $post->id ?>">
                              <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                           </a>   
                        </td>   
                     </tr>

                     <?php endforeach ?>   

                     <?php else: ?>

                        <tr>
                           <td>
                              <p><font color="red" size="4"><b>Posts Not Available</b></font></p> 
                           </td>
                        </tr>

                     <?php endif ?>

                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Category</h4>
      </div>
      <div class="modal-body">
         <form action="<?= base_url('blog/BlogCategory/update') ?>" method="post" class="form-horizontal row-border">
            <div class="form-group">
               <label class="col-sm-3 control-label text-success">Category</label>
               <div class="col-sm-6">
                  <input type="text" name="cat" id="cat" value="" class="form-control" required>
                  <input type="hidden" name="id" id="id" value="" class="form-control">
               </div>
            </div>
      </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary">Save changes</button>
         </div>
      </form>
    </div>
  </div>
</div>
