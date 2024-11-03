<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Blogs extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.blogs',[
            'blogs'=>Article::paginate(7),
        ]);
    }
}
