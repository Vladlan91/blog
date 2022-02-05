<?php


namespace App\Http\Controllers\Admin\Client;


use App\Entity\Client\Client;
use App\Entity\Client\Company\Company;
use App\Entity\Region;
use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class ClientController extends \App\Http\Controllers\Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $client = Client::orderBy('name')->paginate(20);
        $company = Company::orderBy('id')->pluck('id','name');
        $regions = Region::orderBy('id')->pluck('id','name');
        $this->url = LocaleMiddleware::getLocale();
        if($this->url == 'ru'){
            return view('ru/admin/client/index', compact('client','company','regions'));
        }else{
            return view('uk/admin/client/index',compact('client','company','regions'));
        }
    }

    public function create(Request $request)
    {

        $client = Client::create([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'region_id' => $request['region_id'],
            'insta' => $request['insta'],
            'face' => $request['face'],
            'company_id' => $request['company_id'],
            'sex' => $request['sex'],
            'comments' => $request['comments'],
            'avtor' => Auth::id(),

        ]);
        if ($request->hasFile('avatar')) {

            $image = $request->file('avatar');
            $filename = $image->getClientOriginalName();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(300, 300);
            $image_resize->save(public_path('client/' . $filename));
            $client->avatar = 'client/' . $filename;
            $client->saveOrFail();
            return redirect()->route('admin.client.index');
        }
        return redirect()->route('admin.client.index');
    }

    public function show(Client $client)
    {
        $this->url = LocaleMiddleware::getLocale();
        if($this->url == 'ru'){
            return view('ru/admin/client/show', compact('client'));
        }else{
            return view('uk/admin/client/show',compact('client'));
        }
    }


    public function update(Request $request)
    {

    }
}
