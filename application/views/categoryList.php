<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Category List</h3>
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
                            $catNumber = 1;
                            if($dataCategory != null){
                                foreach ($dataCategory as $cat) {
                        ?>
						<tr>
							<td><?= $catNumber; ?></td>
							<td><?= $cat->category; ?></td>
							<td>
								<a
									data-toggle="modal"
									href="#modal-edit<?= $cat->id_category; ?>"
									class="btn btn-success"
									><i class="fa fa-pencil"></i> Edit</a
								>
								<a
									href="<?= base_url(); ?>Category_C/deleteCategory/<?= $cat->id_category; ?>"
									class="btn btn-danger"
									><i class="fa fa-trash"></i> Delete</a
								>
							</td>
						</tr>
						<?php 
                                    $catNumber++;
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

<!-- =========================================|=|Edit category modal|=|========================================= -->
<?php
	foreach ($dataCategory as $cat) {
?>
<div class="modal fade" id="modal-edit<?= $cat->id_category; ?>">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?= base_url(); ?>Category_C/editCategory/<?= $cat->id_category; ?>" method="POST">
				<div class="modal-header">
					<h4 class="modal-title">
						Edit a Category
					</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="">Category</label>
						<input
							type="text"
							name="category"
							class="form-control"
							value="<?= $cat->category; ?>"
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
<!-- =========================================|=|Edit category modal|=|========================================= -->
