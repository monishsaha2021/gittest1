<div class="static-content-wrapper">
<div class="static-content">
<div class="page-content">
<ol class="breadcrumb">
   <li><a href="">Home</a></li>
   <li><a href="#">Add Blog Tags </a></li>
</ol>
<div class="container-fluid">
<div data-widget-group="group1">
<div class="row">
<div class="col-md-12">
   <div class="panel panel-info">
      <div class="panel-heading">
         <h2><i class="fa fa-plus-circle"></i>Add Tags</h2>
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

               <form id="add_cat_validate" action="<?= base_url('blog/Tags/add') ?>" method="post" class="form-horizontal row-border">
                  <div class="form-group">
                     <label class="col-sm-2 control-label text-info">Add Tag</label>
                     <div class="col-sm-4">
                        <input type="text" name="add_tag" class="form-control" required="">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-2 control-label text-success"></label>
                     <div class="col-sm-8">
                        <button type="submit" class="btn btn-info">Save</button>
                     </div>
                  </div>
               </form>

               <table class="table table-hover">
                  <thead>
                     <tr>
                        <th>Tags</th>
                        <th>Edit</th>
                        <th>Delete</th>
                     </tr>
                  </thead>
                  <tbody>

                     <?php if (!empty($tags)): ?>
                        

                     <?php 

                           foreach ($tags as $tag): 
                     ?>

                     <tr>
                        <td><?php echo $tag->tag ?></td>
                        <td>
                           <a href="#" data-tag-value="<?php echo $tag->tag ?>" data-tag-id="<?php echo $tag->id ?>" id="edit_cat" title="" data-toggle="modal" data-target="#myModal">
                              <button type="" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                           </a>   
                        </td>
                        <td>
                           <a href="<?php bs() ?>blog/Tags/delete/<?php echo $tag->id ?>" title="">
                              <button type="" class="btn btn-danger btn-sm">
                                 <i class="fa fa-minus-circle" aria-hidden="true"></i> 
                                 Delete
                              </button>
                           </a>   
                        </td>
                     </tr>

                     <?php endforeach ?>   

                     <?php else: ?>

                        <tr>
                           <td>
                              <p><font color="red" size="4"><b>Tags Not Added Yet</b></font></p> 
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
        <h4 class="modal-title" id="myModalLabel">Update Tag</h4>
      </div>
      <div class="modal-body">
         <form action="<?= base_url('blog/Tags/update') ?>" method="post" class="form-horizontal row-border">
            <div class="form-group">
               <label class="col-sm-3 control-label text-success">Tag</label>
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

<script>
   $('body').on('click', '#edit_cat', function(event) {
      event.preventDefault();
      /* Act on the event */

      var tag = $(this).attr('data-tag-value');
      var id       = $(this).attr('data-tag-id');

      $('#cat').val(tag);
      $('#id').val(id);

   });
</script>