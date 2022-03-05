<?= $this->extend('layout/main.php') ?>
	<?= $this->section('content') ?>

	<h1><?= $title ?></h1>
	<form method="POST" action="/CodeIgniter/first-project/public/admin/blog/new">
    <div class="mb-3">
		<label for="exampleInputEmail1" class="form-label">title</label>
		<input type="text" name="post_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
  <div class="mb-3 form-check">
	<textarea class="form-control" name="post_content" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
	<label for="floatingTextarea">content</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


	<?= $this->endSection() ?>
