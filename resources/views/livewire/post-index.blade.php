<div>
	<livewire:post-create></livewire:post-create>

    @foreach($posts as $post)
		<livewire:post-single :post="$post" :key="$post->id"></livewire:post-single>
    @endforeach
</div>
