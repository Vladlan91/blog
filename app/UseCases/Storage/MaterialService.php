<?php


namespace App\UseCases\Storage;


use App\Entity\Storage\Material;
use App\Entity\Storage\Provider;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class MaterialService
{
    public function create($request){
        return DB::transaction( function () use ($request){
            $material = Material::create([
                'name' => $request['name'],
                'unit' => $request['unit'],
                'limit' => $request['limit'],
                'related_goods' => $request['related_goods'],
                'category_id' => $request['category_id'],


            ]);
            if ($request->hasFile('avatar')) {
                $image = $request->file('avatar');
                $filename = $image->getClientOriginalName();
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(300, 300);
                $image_resize->save(public_path('material/' . $filename));
                $material->avatar = 'material/' . $filename;
                $material->saveOrFail();
            }
        });
    }

    public function edit($request, $material){
        return DB::transaction( function () use ($request, $material){

            $material->update([
                'name' => $request['name'],
                'unit' => $request['unit'],
                'limit' => $request['limit'],
                'related_goods' => $request['related_goods'],
                'category_id' => $request['category_id'],

            ]);
            if ($request->hasFile('avatar')) {
                $image = $request->file('avatar');
                if(isset($material->avatar)){
                    unlink(public_path($material->avatar));
                }
                $filename = $image->getClientOriginalName();
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(300, 300);
                $image_resize->save(public_path('material/' . $filename));
                $material->avatar = 'material/' . $filename;
                $material->saveOrFail();
            }
        });
    }
}
