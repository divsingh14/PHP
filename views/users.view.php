<?php require 'partials/head.php'; ?>
<div class="container">
	<h1 class="display-1 text-center">All User</h1>
	<h1 class="display-3 text-center">Submit your name</h1>
	<div>
		<form class="form-inline" method="POST" action="/users">
			<div class="form-group"></div>
				<input type="" class="form-control" placeholder="Enter Name" name="name">
			<button type="submit" class="btn btn-primary m-3 ">Submit</button>
		</form>
		<ul class="list-group">
			<?php foreach ($users as $user): ?>
				<li class="list-item "><?= $user->name; ?></li>
			<?php endforeach; ?> 
		</ul>
	</div>
</div>
<?php require 'partials/footer.php'; ?>