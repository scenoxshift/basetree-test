<?php


namespace App\BLL;


use App\DAL\Comment\CommentRepository;
use App\DAL\Post\PostRepository;
use App\Notifications\NotifyPostOwner;
use BaseTree\Resources\BaseResource;
use BaseTree\Resources\Contracts\Validations\StoreValidation;
use Illuminate\Http\Request;

class CommentResource extends BaseResource implements StoreValidation
{
	/**
	 * @var PostRepository
	 */
	protected $postRepository;

	/**
	 * CommentResource constructor.
	 * @param CommentRepository $repository
	 * @param PostRepository $postRepository
	 */
	public function __construct(CommentRepository $repository, PostRepository $postRepository)
    {
        parent::__construct($repository);
        $this->postRepository = $postRepository;
    }

	/**
	 * @param array $attributes
	 * @return \BaseTree\Models\BaseTreeModel|\Illuminate\Database\Eloquent\Builder|\Illuminate\Http\RedirectResponse
	 */
	public function store(array $attributes)
	{
		$attributes['user_id'] = auth()->id();
		$attributes['post_id'] = request('post_id');
		
		parent::store($attributes);

		$post = $this->postRepository->findWithRelations(request('post_id'), ['user']);
		
		if($post->user->id != auth()->id()) {
            $post->user->notify(new NotifyPostOwner($post, auth()->user()->name));
        }

		return redirect()->back();
	}

	/**
	 * @param Request|null $request
	 * @return array
	 */
	public function storeRules(Request $request = null): array
	{
		return [
			'comment' => 'required|min:4'
		];
	}
}
