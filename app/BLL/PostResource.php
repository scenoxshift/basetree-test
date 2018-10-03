<?php


namespace App\BLL;

use App\DAL\Post\PostRepository;
use BaseTree\Resources\BaseResource;
use BaseTree\Resources\Contracts\Validations\StoreValidation;
use Illuminate\Http\Request;

class PostResource extends BaseResource implements StoreValidation
{
    public function __construct(PostRepository $repository)
    {
        parent::__construct($repository);
    }
    
	public function store(array $attributes)
	{
		$attributes['user_id'] = auth()->id();

		parent::store($attributes);

		return redirect()->back();
	}

	public function storeRules(Request $request = null): array
	{
		return [
			'title' => 'required|min:6',
			'content' => 'required|min:20'
		];
	}
}
