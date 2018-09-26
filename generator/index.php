<?php
include_once "config.php";
			// Get data from DB
$stmt = $con-> prepare("SELECT bugs.*, groups.Name as bugGroup, groups.ID as groupID FROM bugs
						INNER JOIN groups ON bugs.BugGroup = groups.ID");
			// Execute data
			$stmt->execute();
			// Assign To Variable
			$bugs = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Reports Generator</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/backend.css" />
	</head>
	<body>

		<!-- Start Form -->
		<div class="container">
			<h1 class="text-center">Generate New Report</h1>
			<form class="form-horizontal" action="" method="POST">
				<!-- Start Program Name Field -->
				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Program Name</label>
					<div class="col-sm-10 col-md-4">
						<input type="text" name="program" class="form-control" required="required" />
					</div>
				</div>
				<!-- End Program Name Field -->
				<!-- Start Website Field -->
				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Website</label>
					<div class="col-sm-10 col-md-4">
						<input type="text" name="website" class="form-control" required="required" />
					</div>
				</div>
				<!-- End Website Field -->
				<!-- Start Bug Field -->
				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Bug</label>
					<div class="col-sm-10 col-md-4">
						<select class="form-control" name="bug">\
							<option selected>-- Choose Bug --</option>
							<?php
							$groupID = '';
							foreach ($bugs as $bug) {

								if ($groupID != $bug['groupID']) {

							    	if ($groupID != '') {
							      		echo '</optgroup>
											';
							    	}
							    	echo '<optgroup label="' . $bug['bugGroup'] . '">
										';
								}
								echo '<option value="' . $bug['ID'] . '">' . $bug['Name'] . '</option>
									';
								$groupID = $bug['groupID'];    
							}
							if ($groupID != '') {
							  echo '</optgroup>
							  ';
							}
							?>
						</select>
					</div>
				</div>
				<!-- End Bug Field -->
				<!-- Start Submit Field -->
				<div class="form-group form-group-lg">
					<div class="col-sm-offset-2 col-sm-10 col-md-4">
						<input type="submit" value="Generate" class="btn btn-primary" />
					</div>
				</div>
				<!-- End Submit Field -->

			</form>
			<!-- End Form -->
			<?php 
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {

					$program = htmlspecialchars($_POST['program'], ENT_QUOTES, "UTF-8");
					$website = htmlspecialchars($_POST['website'], ENT_QUOTES, "UTF-8");
					$bug 	 = htmlspecialchars($_POST['bug'], ENT_QUOTES, "UTF-8");
					// Get reports from
					$stmt = $con-> prepare("SELECT ReportFile FROM bugs WHERE ID = ?");
					// Execute data
					$stmt->execute(array($bug));
					// Assign To Variable
					$report = $stmt->fetch();
					$file 	= "reports/" . $report['ReportFile'] . ".php";
					echo '<div class="form-group">
						  <label for="comment">Report:</label>
						  <textarea class="form-control" rows="30">';

					@include_once $file;
					echo "</textarea>
					</div>";
				}
			?>
		</div>
		<footer class="page-footer font-small">

			<div class="footer-copyright text-center py-3">© 2018 Copyright:
			<a href="https://twitter.com/khaledibnalwled"> Khaled ibn Al-Walid</a>
			</div>

		</footer>
	</body>
</html>