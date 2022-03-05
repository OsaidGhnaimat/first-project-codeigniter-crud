<?= $this->extend('layout/main.php') ?>
	<?= $this->section('content') ?>

	<h1><?= $title ?></h1>
	<form method="POST">
    <div class="mb-3">
		<label for="exampleInputEmail1" class="form-label">title</label>
		<input type="text" name="post_title" class="form-control" id="exampleInputEmail1" value="<?= $post['post_title'] ?>">
    </div>
  <div class="mb-3 form-check">
	<textarea class="form-control" name="post_content" id="floatingTextarea" value="<?= $post['post_content'] ?>"></textarea>
	<label for="floatingTextarea">content</label>
  </div>
  <button type="submit" class="btn btn-primary">edit</button>
</form>


	<?= $this->endSection() ?>
