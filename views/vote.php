<?php include "partials/header.php"; ?>

<h1>Candidates</h1>
<form action="votesubmit.php" method="post">
	<?php foreach($candidates as $candidate) { ?>
	<div class="row space15">
		<div class="col-sm">
			<img src="candidates/<?= $candidate->id ?>.jpg" class="candidate" />
		</div>		
		<div class="col-sm">
			<p><?= $candidate->name ?></p>
		</div>
		<div class="col-sm text-right">
			<input type="radio" name="candidateid" aria-label="<?= $candidate->name ?>">
		</div>
	</div>
	<?php } ?>

	<button type="submit" class="btn btn-primary mb-2">Vote!</button>
</form>

<?php include "partials/footer.php"; ?>
