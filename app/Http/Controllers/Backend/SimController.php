<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sim;

class SimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sims = Sim::orderBy('id', 'desc')->paginate(10);
        return view('backend.sim.index', compact('sims'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = \App\Models\Category::all();
        $networks = \App\Models\Network::all();

        return view('backend.sim.add', compact('categories', 'networks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\Sim\CreateRequest $request)
    {
        $sim = Sim::create($request->all());
        if (!is_null($request->thumbnail)) {
            $sim->image()->create(
                ['type' => 'thumbnail', 'zone' => 'sim', 'link' => $request->thumbnail]
            );
        }
        
        return redirect()
        ->route('admin.sims.index')
        ->with('success','Thêm sim thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = \App\Models\Category::all();
        $networks = \App\Models\Network::all();
        $sim = Sim::findOrFail($id);
        return view('backend.sim.edit', compact('categories', 'networks', 'sim'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\Sim\UpdateRequest $request, $id)
    {
        $sim = Sim::findOrFail($id);
        $sim->update($request->all());
        $sim->image()->updateOrCreate(
            ['type' => 'thumbnail', 'zone' => 'sim'], 
            ['type' => 'thumbnail', 'zone' => 'sim', 'link' => $request->thumbnail]
        );
        return redirect()
        ->route('admin.sims.index')
        ->with('success','Cập nhật sim thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sim = Sim::findOrFail($id);
        $sim->delete($id);

        return redirect()
            ->route('admin.sims.index')
            ->with('success' ,'Xóa sim thành công');
    }
}
