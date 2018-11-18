<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

if(isset($_POST['submit'])){
	//Create Data Array
	$data = array();
	$data['car_plate'] = $_POST['car_plate'];
	$data['category_id'] = $_POST['category'];
	$data['colour'] = $_POST['colour'];
	$data['brand'] = $_POST['brand'];
	$data['model'] = $_POST['model'];

	if($job->create($data)){
		redirect('index.php', 'Your report has been listed', 'success');
	} else {
		redirect('index.php', 'Something went wrong', 'error');
	}
}

$template = new Template('templates/crime-report.php');

$template->categories = $job->getCategories();

echo $template;