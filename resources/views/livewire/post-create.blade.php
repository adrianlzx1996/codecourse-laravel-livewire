<div class="mb-4">
	<form wire:submit.prevent="addPost">
		<div class="mb-3">
			<label for="body" class="visually-hidden">Your post</label>
			<textarea name="body" id="body" class="form-control" wire:model.debounce="body"></textarea>
		</div>

		<button type="submit" class="btn btn-primary">Post</button>
	</form>
</div>
