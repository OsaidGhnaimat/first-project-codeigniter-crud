    <?= $this->extend('layout/main.php') ?>
	<?= $this->section('content') ?>


	<h1><?= $meta_title ?></h1>
	<a href="/CodeIgniter/first-project/public/admin/blog/delete/<?= $post['post_id'] ?>" class="btn btn-danger" type="submit">delete</a>
	<a href="/CodeIgniter/first-project/public/admin/blog/edit/<?= $post['post_id'] ?>" class="btn btn-primary" type="submit">edit </a>

	<?= $this->endSection() ?>
