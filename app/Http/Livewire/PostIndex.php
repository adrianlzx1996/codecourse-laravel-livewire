<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostIndex extends Component
{
	public $posts;

	protected $listeners = [
		'postAdded' => 'handlePostAdded',
	];

	public function handlePostAdded ($postId)
	{
		$this->posts->prepend(Post::find($postId));
	}

	public function mount ()
	{
		$this->posts = Post::latest()->get();
	}

    public function render()
    {
        return view('livewire.post-index');
    }
}
