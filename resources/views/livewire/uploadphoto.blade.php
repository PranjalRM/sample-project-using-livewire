<div>>
<form wire:submit="save">
    @if ($photo)
    <img src="{{ $photo->temporaryUrl() }}" alt="Photo">
    @endif
    <input type="file" wire:model="photo">

    @error('photo') <span class="error">{{ $message }}</span> @enderror

    <button type="submit">Save Photo</button>
</form>
</div