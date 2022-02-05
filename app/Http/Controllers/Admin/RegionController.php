<?php


namespace App\Http\Controllers\Admin;


use App\Entity\Region;
use App\Http\Requests\Auth\UpdateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegionController extends Controller
{

    public function index()
    {
        $regions = Region::where('parent_id',null)->orderBy('id')->get();
        return view('admin.region.index', compact('regions'));
    }

    public function create()
    {
        $parent = null;
        return view('admin.region.create',compact('parent'));
    }
    public function createtwo($id)
    {
        if ($id){
            $parent = Region::findOrFail($id);
        }

        return view('admin.region.create',compact('parent'));
    }

    public function store(Request $request)
    {

        $region = Region::create([
            'name'=> $request['name'],
            'slag'=> str_slug($request['name'] , "-"),
            'parent_id'=> $request['parent'],
        ]);
        return redirect()->route('admin.region.show', $region);
    }

    public function show(Region $region)
    {
        $regions = Region::where('parent_id',$region->id)->orderBy('name')->get();
        return view('admin.region.show', compact('region','regions'));
    }

    public function edit(Region $region)
    {
        return view('admin.region.edit', compact('region'));
    }

    public function update(Request $request, Region $region): \Illuminate\Http\RedirectResponse
    {
        $region->update($request->only(['name']));
        return redirect()->route('admin.region.show', $region);
    }

    public function destroy(Region $region): \Illuminate\Http\RedirectResponse
    {
        $region->delete();
        return redirect()->route('admin.region.index');
    }
}
