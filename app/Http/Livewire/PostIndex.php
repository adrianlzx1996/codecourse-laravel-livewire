<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class PostIndex extends Component
{
	use WithPagination;

	protected $paginationTheme = 'bootstrap';

	protected $listeners = [
		'postAdded' => 'handlePostAdded',
	];

	public function handlePostAdded ($postId)
	: void {
	}

    public function render()
	: Factory|View|Application
	{
        return view('livewire.post-index', ['posts' => Post::latest()->paginate(10)]);
    }
}
