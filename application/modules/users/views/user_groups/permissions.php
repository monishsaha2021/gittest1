<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Default Datatable</h4>
            </div>
            <div class="card-body">

                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                    <thead>
                      <tr>
                        <th>Perm Id</th>
                        <th>Module Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                       <?php foreach ($perm as $key => $value): ?>
                       <tr>
                          <td><?php echo $value->perm_id ?></td>
                          <td><?php echo $value->perm_name ?></td>
                          <td>
                             <button class="btn btn-info update" edit="<?= $value->perm_id ?>" data-toggle="modal" data-target="#myModal"><i class="fas fa-pencil-alt"></i> Edit</button>

                             <button class="btn btn-danger" id_del="<?= $value->perm_id ?>" id="delete"><i class="fas fa-trash"></i> Delete</button>
                          </td>
                       </tr>
                      <?php endforeach ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->