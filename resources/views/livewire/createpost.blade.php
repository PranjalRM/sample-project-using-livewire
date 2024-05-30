<div>
    <h2>New Post:</h2>

    <form wire:submit="save" >
        <label>
            <span>Title</span>
            <input type="text" wire:model="title">
            @error('title')<em>{{ $message }}</em>@enderror
        </label>
        
        <label>
            <span>Content</span>
            <textarea wire:model="content"></textarea>
            <small>Characters:
                <span x-text="$wire.content.length"></span>{{-- Alpine used! --}}
            </small>
            @error('content')<em>{{ $message }}</em>@enderror
        </label>

        <button type="submit">Save</button>
    </form>
</div>
