<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Post;

#[Title("Posts")]
class Showpost extends Component
{
    public function delete(Post $post)
    {
        $post->delete();
    }

    public function render()
    {
        return view('livewire.showpost',[
            'posts' => Post::all(),
        ]);
    }
}
