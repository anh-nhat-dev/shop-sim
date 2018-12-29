<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Network;

class NetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $networks = Network::orderBy('id', 'desc')->paginate(10);
        return view('backend.network.index', compact('networks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.network.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\Network\CreateRequest $request)
    {
        $network = Network::create($request->all());
        if (!is_null($request->thumbnail)) {
            $network->image()->create(
                ['type' => 'thumbnail', 'zone' => 'network', 'link' => $request->thumbnail]
            );
        }
        return redirect()
            ->route('admin.nha-mang.index')
            ->with('success','Thêm nhà mạng thành công');
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
        $network = Network::findOrFail($id);
        return view('backend.network.edit', compact('network'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\Network\UpdateRequest $request, $id)
    {
        $network = Network::findOrFail($id);
        $network->update($request->all());
        $network->image()->updateOrCreate(
            ['type' => 'thumbnail', 'zone' => 'network'], 
            ['type' => 'thumbnail', 'zone' => 'network', 'link' => $request->thumbnail]
        );
        return redirect()
            ->route('admin.nha-mang.index')
            ->with('success' ,'Nhà mạng đã được cập nhật');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $network = Network::findOrFail($id);
        $network->delete($id);

        return redirect()
            ->route('admin.nha-mang.index')
            ->with('success' ,'Xóa tài nhà mạng thành công');
    }
}
