<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Role List</h4>
            </div>
            <div class="card-body">

                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                    <thead>
                      <tr>
                         <th>Role/Group</th>
                         <th>Description</th>
                         <th>Action</th>
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
                              <button class="btn btn-info"><i class="fas fa-pencil-alt"></i> Edit</button>
                            </a>

                            <a href="<?= base_url('users/User_groups/delete_group')?>/<?= $group->id ?>"> 
                              <button class="btn btn-danger" disable><i class="fas fa-trash"></i> Delete</button>
                            </a> 
                         </td>
                      </tr>
                      <?php endforeach;?>
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->