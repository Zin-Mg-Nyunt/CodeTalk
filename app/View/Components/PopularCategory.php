<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PopularCategory extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.popular-category',[
            "popularCategories"=>Category::withCount('blogs')->orderBy('blogs_count','desc')->take(3)->get(),
        ]);
    }
}
