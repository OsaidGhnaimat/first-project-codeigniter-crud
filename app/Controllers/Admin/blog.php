<?php
namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\BlogModel;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class Blog extends BaseController
{
    public function index()
    {
        $data=[
			'meta_title' => 'cofeigniter 4 blog',
			'title'      => 'this is a blog page'
		];
		return view('blog', $data);

    }
	public function post($id)
    {
		$model = new BlogModel();
		$post  = $model->find($id);
		if($post){
			$data=[
				'meta_title' => $post['post_title'],
				'title'      => $post['post_content'],
				'post'       => $post
			];
		}else{
			$data=[
				'meta_title' => 'post not found',
				'title'      => 'post not found'
			];
		}
		return view('single_post',$data);
    }

	public function new()
    {
		$data=[
			'meta_title' => 'new post',
			'title'      => 'create new post'
		];

		if( $this->request->getMethod() == 'post' ){
			$model = new BlogModel();
			$model->save($_POST);
		}

		return view('new_post', $data);
    }

	public function edit($id)
    {
		$model = new BlogModel();
		$post  = $model->find($id);
		$data=[
			'meta_title' => 'new post',
			'title'      => 'create new post',
		];

		if( $this->request->getMethod() == 'post' ){
			$model = new BlogModel();
			$_POST['post_id'] = $id;
			$model->save($_POST);
		}

		$data['post']= $post;

		return view('edit_post', $data);
    }




	public function delete($id){
		$model = new BlogModel();
		$post  = $model->find($id);
		if($post){
			$model->delete($id);
			return redirect()->to('/CodeIgniter/first-project/public/blog');
		}
	}

}