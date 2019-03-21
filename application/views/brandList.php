<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Brand List</h3>
		<p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>
	</div>
</div>

<div class="panel">
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Category</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
                            $brandNumber = 1;
                            if($dataBrand != null){
                                foreach ($dataBrand as $brand) {
                        ?>
						<tr>
							<td><?= $brandNumber; ?></td>
							<td><?= $brand->brand; ?></td>
							<td>
								<a
									data-toggle="modal"
									href="#modal-edit<?= $brand->id_brand; ?>"
									class="btn btn-success"
									><i class="fa fa-pencil"></i> Edit</a
								>
								<a
									href="<?= base_url(); ?>Brand_C/deleteBrand/<?= $brand->id_brand; ?>"
									class="btn btn-danger"
									><i class="fa fa-trash"></i> Delete</a
								>
							</td>
						</tr>
						<?php 
                                    $brandNumber++;
                                }
                            } else{
                        ?>
						<tr>
							<td>0</td>
							<td>None</td>
						</tr>
						<?php
                            }
                        ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- =========================================|=|Edit brand modal|=|========================================= -->
<?php
	foreach ($dataBrand as $brand) {
?>
<div class="modal fade" id="modal-edit<?= $brand->id_brand; ?>">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?= base_url(); ?>Brand_C/editBrand/<?= $brand->id_brand; ?>" method="POST">
				<div class="modal-header">
					<h4 class="modal-title">
						Edit a brand
					</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="">Brand</label>
						<input
							type="text"
							name="brand"
							class="form-control"
							value="<?= $brand->brand; ?>"
							required
						/>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">
						<i class="fa fa-close"></i> Cancel
					</button>
					<button type="submit" class="btn btn-success">
						<i class="fa fa-save"></i> Save changes
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
	}
?>
<!-- =========================================|=|Edit brand modal|=|========================================= -->
