<div>
    <form wire:submit="add">
        <input type="text" wire:model.change="todo">

        <span>Current Todo:{{ $todo }}</span>

        <button type="submit">Add</button>
    </form>
    <ol>
        @foreach ($todos as $todo)
        <li>{{ $todo }}</li>
        @endforeach
    </ol>
</div>
