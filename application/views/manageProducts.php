<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Manage Products</h3>
		<p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>
	</div>
</div>

<!-- =========================================|=|Main panel manage products|=|========================================= -->
<div class="panel">
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<a
						data-toggle="modal"
						href="#modal-add"
						class="form-control btn btn-primary"
						><i class="fa fa-plus"></i> Add a product</a
					>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Product</th>
								<th>Category</th>
								<th>Brand</th>
								<th>Stock</th>
								<th>Price</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
                                $mpNumber = 1;
                                if($dataMP != null){
                                    foreach ($dataMP as $mp) {
                            ?>
							<tr>
								<td><?= $mpNumber; ?></td>
								<td><?= $mp->product; ?></td>
								<td><?= $mp->category; ?></td>
								<td><?= $mp->brand; ?></td>
								<td><?= number_format($mp->stock); ?></td>
								<td>Rp <?= number_format($mp->price); ?></td>
								<td>
									<a
										data-toggle="modal"
										href="#modal-edit<?= $mp->id_product; ?>"
										class="btn btn-success"
										><i class="fa fa-pencil"></i> Edit</a
									>
									<a
										href="<?= base_url(); ?>MP_C/deleteProduct/<?= $mp->id_product; ?>"
										class="btn btn-danger"
										><i class="fa fa-trash"></i> Delete</a
									>
								</td>
							</tr>
							<?php 
                                        $mpNumber++;
                                    }
                                } else{
                            ?>
							<tr>
								<td>0</td>
								<td>None</td>
								<td>None</td>
								<td>None</td>
								<td>None</td>
								<td>Rp 0</td>
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
</div>
<!-- =========================================|=|Main panel manage products|=|========================================= -->

<!-- =========================================|=|Add product modal|=|========================================= -->

<!-- <a class="btn btn-primary" data-toggle="modal" href='#modal-add'>Trigger modal</a> -->
<div class="modal fade" id="modal-add">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?= base_url(); ?>MP_C/addProduct" method="POST">
				<div class="modal-header">
					<h4 class="modal-title">Add a product</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="">Product</label>
						<input
							type="text"
							class="form-control"
							name="product"
							placeholder="New product"
						/>
					</div>

					<div class="form-group">
						<label for="">Category</label>
						<select name="id_category" class="form-control">
							<?php
                                foreach ($dataCategory as $cat) {
                            ?>
							<option value="<?= $cat->id_category; ?>"
								><?= $cat->category; ?></option
							>
							<?php
                                }
                            ?>
						</select>
					</div>

					<div class="form-group">
						<label for="">Brand</label>
						<select name="id_brand" class="form-control">
							<?php
                                foreach ($dataBrand as $brand) {
                            ?>
							<option value="<?= $brand->id_brand; ?>"
								><?= $brand->brand; ?></option
							>
							<?php
                                }
                            ?>
						</select>
					</div>


					<div class="form-group">
						<label for="">Stock</label>
						<input
							type="number"
							class="form-control"
							name="stock"
							placeholder="00000"
						/>
					</div>

					<div class="form-group">
						<label for="">Price</label>
						<input
							type="number"
							class="form-control"
							name="price"
							placeholder="00000"
						/>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">
						<i class="fa fa-close"></i> Cancel
					</button>
					<button type="submit" class="btn btn-success">
						<i class="fa fa-plus"></i> Add a product
					</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- =========================================|=|Add product modal|=|========================================= -->

<!-- =========================================|=|Edit Modal|=|========================================= -->
<?php
    foreach ($dataMP as $mp) {
?>
<div class="modal fade" id="modal-edit<?= $mp->id_product; ?>">
	<div class="modal-dialog">
		<div class="modal-content">
			<form
				action="<?= base_url(); ?>MP_C/editProduct/<?= $mp->id_product; ?>"
				method="POST"
			>
				<div class="modal-header">
					<h4 class="modal-title">Edit a product</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="">Product</label>
						<input
							type="text"
							class="form-control"
							name="product"
							placeholder="Product"
							value="<?= $mp->product; ?>"
						/>
					</div>

					<div class="form-group">
						<label for="">Category</label>
						<select name="id_category" class="form-control">
							<option value="<?= $mp->id_category; ?>"
								><?= $mp->category; ?></option
							>
							<?php
                                foreach ($dataCategory as $cat) {
                            ?>
							<option value="<?= $cat->id_category; ?>"
								><?= $cat->category; ?></option
							>
							<?php
                                }
                            ?>
						</select>
					</div>

					<div class="form-group">
						<label for="">Brand</label>
						<select name="id_brand" class="form-control">
							<option value="<?= $mp->id_brand; ?>"><?= $mp->brand; ?></option>
							<?php
                                foreach ($dataBrand as $brand) {
                            ?>
							<option value="<?= $brand->id_brand; ?>"
								><?= $brand->brand; ?></option
							>
							<?php
                                }
                            ?>
						</select>
					</div>

                    <div class="form-group">
						<label for="">Price</label>
						<input
							type="number"
							class="form-control"
							name="stock"
							placeholder="00000"
							value="<?= $mp->stock; ?>"
						/>
					</div>

					<div class="form-group">
						<label for="">Price</label>
						<input
							type="number"
							class="form-control"
							name="price"
							placeholder="00000"
							value="<?= $mp->price; ?>"
						/>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">
						<i class="fa fa-close"></i> Cancel
					</button>
					<button type="submit" class="btn btn-success">
						<i class="fa fa-save"></i> Save Changes
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
    }
?>
<!-- =========================================|=|Edit Modal|=|========================================= -->
