<?php include 'inc/header.php'; ?> 
	<h2 class="page-header"> Report Stolen Vehicle or Motorbike</h2>
	<form action="report.php" method="POST">
		<div class = "form-group">
			<label>Car Plate</label>	
			<input type "text" name="car_plate" class="form-control">
		</div>
		<div class = "form-group">
			<label>Category</label>
			<select class="form-control" name="category">
				<option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->VehicleType; ?></option>
                <?php endforeach; ?>
			</select>
		</div>
		<div class = "form-group">
			<label>Colour</label>	
			<input type "text" name="colour" class="form-control">
		</div>
		<div class = "form-group">
			<label>Brand</label>	
			<input type "text" name="brand" class="form-control">
		</div>
		<div class = "form-group">
			<label>Model</label>	
			<input type "text" name="model" class="form-control">
		</div>
		<input type="submit" class="btn btn-default" value="Submit" name="submit">
	</form>
<?php include 'inc/footer.php'; ?> 
