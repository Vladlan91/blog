<?php


namespace App\UseCases\Storage;


use App\Entity\Storage\Provider;
use App\Entity\User\Transaction\Wage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class ProviderService
{
    public function create($request){
        return DB::transaction( function () use ($request){
            $provider = Provider::create([
                'name_company' => $request['name_company'],
                'usreou' => $request['usreou'],
                'phone' => $request['phone'],
                'email' => $request['email'],
            ]);
            if ($request->hasFile('avatar')) {
                $image = $request->file('avatar');
                $filename = $image->getClientOriginalName();
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(300, 300);
                $image_resize->save(public_path('provider/' . $filename));
                $provider->avatar = 'provider/' . $filename;
                $provider->saveOrFail();
            }
        });
    }

    public function edit($request, $provider){
        return DB::transaction( function () use ($request, $provider){
            $provider->update([
                'name_company' => $request['name_company'],
                'usreou' => $request['usreou'],
                'phone' => $request['phone'],
                'email' => $request['email'],
            ]);
            if ($request->hasFile('avatar')) {
                $image = $request->file('avatar');
                if(isset($provider->avatar)){
                    unlink(public_path($provider->avatar));
                }
                $filename = $image->getClientOriginalName();
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(300, 300);
                $image_resize->save(public_path('provider/' . $filename));
                $provider->avatar = 'provider/' . $filename;
                $provider->saveOrFail();
            }
        });
    }
}
