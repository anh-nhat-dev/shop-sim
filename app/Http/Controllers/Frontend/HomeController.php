<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {   
        $sims = \App\Models\Sim::public()->paginate(100);
        return view('frontend.index', compact('sims'));
    }

    public function detail($sim)
    {
        $sim = \App\Models\Sim::public()->where('slug', $sim)->firstOrFail();
        return view('frontend.detail', compact('sim'));
    }

    public function simNetwork($slug)
    {   
        $sims = \App\Models\Network::where('slug', $slug)
            ->firstOrFail()
            ->sims()
            ->public()
            ->paginate(100);
        return view('frontend.index', compact('sims'));
    }

    public function simCategory($slug)
    {   
        $sims = \App\Models\Category::where('slug', $slug)
            ->firstOrFail()
            ->sims()
            ->public()
            ->paginate(100);
        return view('frontend.index', compact('sims'));
    }
}
