<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">
				<li class=""><a href="">Home</a></li>
				<li class="active"><a href="">Dashboard</a></li>
            </ol>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3">
						<div class="info-tile tile-orange">
							<div class="tile-icon"><i class="fa fa-users"></i></div>
							<div class="tile-heading"><span>Users</span></div>
							<div class="tile-body">
								<span>
							  		<?php 
							  			echo $total_users;
									?>
								</span>
							</div>
							<div class="tile-footer"><span class="text-success">
							    <?php 
							  		echo $total = $total_users*$total_users/100;;
								?>
							<i class="fa fa-level-up"></i></span></div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="info-tile tile-orange">
							<div class="tile-icon"><i class="ti ti-user"></i></div>
							<div class="tile-heading"><span>Today Users</span></div>
							<div class="tile-body">
							 	<span>
							  		<?= $today_users ?>
								</span>
							</div>
							<div class="tile-footer"><span class="text-success"><?= $today = $today_users*$today_users/100 ?> <i class="fa fa-level-up"></i></span></div>
						</div>
					</div>

						<!-- This is script is for count page visitor  -->
						<?php
						       
						   $counter_name = "";
						   
						   // Open the file for reading 
							$fp = fopen("counter.txt", "r"); 

							// Get the existing count 
							$count = fread($fp, 1024); 

							// Close the file 
							fclose($fp); 

							// Add 1 to the existing count 
							$count = $count + 1; 

							// Display the number of hits 
							// If you don't want to display it, comment out this line 
							$counterVal =  $count; 

							// Reopen the file and erase the contents 
							$fp = fopen("counter.txt", "w"); 

							fwrite($fp, $count); 

							// Close the file 
							fclose($fp); 
						?>	
					<div class="col-md-3">
						<div class="info-tile tile-danger">
							<div class="tile-icon"><i class="ti ti-bar-chart-alt"></i></div>
							<div class="tile-heading"><span>Visitors</span></div>
							<div class="tile-body"><span><?= $counterVal ?></span></div>
							<div class="tile-footer">
								<span class="text-danger">
							 		<i class="fa fa-level-down">
							 			<?php 
							 			   $counter = $counterVal*$counterVal/100;
							 			   echo $counter.' %';
							 			?>
							 		</i>
							 	</span>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="info-tile tile-danger">
							<div class="tile-icon"><i class="fa fa-user-circle"></i></div>
							<div class="tile-heading"><span>This Week Users</span></div>
							<div class="tile-body"><span><?= $weekly ?></span></div>
							<div class="tile-footer">
								<span class="text-danger">
							 		<i class="fa fa-level-down">
							 			<?php 
							 			   $counter = $weekly*$weekly/100;
							 			   echo $counter.' %';
							 			?>
							 		</i>
							 	</span>
							</div>
						</div>
					</div>
				</div>     
				<div data-widget-group="group1">
					<div class="row">
						<div class="col-xs-12">
							<div class="panel panel-default">
							<div class="panel-heading">
								<h2>New Users</h2>
								<div class="panel-ctrls"></div>
								<!-- <a href="<?= bs('Users/print_users') ?>">
									<i class="fa fa-print" style="padding-left: 1%;color: black"></i>
								</a> -->
							</div>
							<div class="panel-body no-padding">
								<div id="demo">
									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-fixed-header m-n" id="">
										<thead>
											<tr>
												<th>User Name</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Email</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($all_users as $user):?>
												<tr>
													<td><?php echo htmlspecialchars($user->username,ENT_QUOTES,'UTF-8');?></td>
										            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
										            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
										            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?>
										            </td>
												</tr>
											<?php endforeach;?>
											
										</tbody>
										<tfoot>
											<tr>
												<th>User Name</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Email</th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>


			

                </div> <!-- .container-fluid -->
            </div> <!-- #page-content -->
        </div>
    </div>
  </div> 
</div>  


