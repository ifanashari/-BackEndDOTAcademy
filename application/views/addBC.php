<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Add Product & Brand</h3>
		<p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>
	</div>
</div>

<div class="panel">
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12"></div>
			<div class="col-md-6">
				<h1>Brand</h1>

				<a class="btn btn-info" data-toggle="modal" href="#modal-brand"
					><i class="fa fa-plus"></i> Add a brand
				</a>

				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Brand</th>
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

			<div class="col-md-6">
				<h1>Category</h1>

				<a class="btn btn-success" data-toggle="modal" href="#modal-category">
					<i class="fa fa-plus"></i> Add a category
				</a>

				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Category</th>
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

<!-- =========================================|=|Add category modal|=|========================================= -->

<div class="modal fade" id="modal-category">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?= base_url(); ?>Category_C/addCat" method="POST">
				<div class="modal-header">
					<h4 class="modal-title">Add a Category</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="">New Category</label>
						<input
							type="text"
							class="form-control"
							placeholder="New category"
							name="category"
							required
						/>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">
						<i class="fa fa-close"></i> Cancel
					</button>
					<button type="submit" class="btn btn-primary">
						<i class="fa fa-plus"></i> Add Category
					</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- =========================================|=|Add category modal|=|========================================= -->

<!-- =========================================|=|Add brand modal|=|========================================= -->
<div class="modal fade" id="modal-brand">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?= base_url(); ?>Brand_C/addBrand" method="POST">
				<div class="modal-header">
					<h4 class="modal-title">Add a Brand</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="">New Brand</label>
						<input
							type="text"
							class="form-control"
							placeholder="New brand"
							name="brand"
							required
						/>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">
						<i class="fa fa-close"></i> Cancel
					</button>
					<button type="submit" class="btn btn-primary">
						<i class="fa fa-plus"></i> Add Brand
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- =========================================|=|Add brand modal|=|========================================= -->
