<?php include "partials/header.php"; ?>

<h1>Results</h1>
<form action="votesubmit.php" method="post">
	<div class="row space15">
		<div class="col-sm-1">
			<img src="candidates/1234.jpg" class="candidate" />
		</div>		
		<div class="col-sm-11">
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
		</div>
	</div>
	<div class="row space15">
		<div class="col-sm-1">
			<img src="candidates/1234.jpg" class="candidate" />
		</div>		
		<div class="col-sm-11">
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
		</div>
	</div>
</form>

<?php include "partials/footer.php"; ?>
