<?php

namespace App\Livewire\Blog;

use App\Models\Post;
use Illuminate\View\View;
use Livewire\Component;

class BlogCardPost extends Component
{
    public Post $post;

    public function mount(Post $post): void
    {
        $this->post = $post;
    }

    public function render(): View
    {
        return view('livewire.blog.blog-card-post');
    }
}
