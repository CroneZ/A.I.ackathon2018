<?php include 'inc/header.php'; ?>
      <div class="jumbotron">
        <h1>Stolen and Lost Cars</h1>
        <form method="GET" action="index.php">
            <select name="category" class="form-control">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->VehicleType; ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <input type="submit" class="btn btn-lg btn-success" value="FIND">
        </form>
      </div>  
<?php include 'inc/footer.php'; ?>
