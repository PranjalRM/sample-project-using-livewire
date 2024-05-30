<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Createpost extends Component
{
    #[Rule('required',message:'Please,add the title')]
    public $title = '';

    #[Rule('required')]
    public $content = '';

    public function save()
    {
        $this->validate();
        
        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);
        
        $this->redirect('/post',navigate:true);
    }
    public function render()
    {
        return view('livewire.createpost');
    }
}
