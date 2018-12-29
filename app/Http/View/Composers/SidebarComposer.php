<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Repositories\UserRepository;

class SidebarComposer
{
    /**
     * The user repository implementation.
     *
     * @var 
     */
    protected $networks;

    /**
     * The user repository implementation.
     *
     * @var 
     */
    protected $categories;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $this->networks = \App\Models\Network::all();
        $this->categories = \App\Models\Category::all();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
       
        $view->with('networks', $this->networks);
        $view->with('categories', $this->categories);
    }
}