<?php


namespace App\Http\Controllers\Admin\Client\Company;


use App\Entity\Client\Client;
use App\Entity\Client\Company\Company;
use App\Entity\Region;
use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class CompanyController extends \App\Http\Controllers\Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $company = Company::orderBy('name')->paginate(20);
        $regions = Region::orderBy('id')->pluck('id','name');
        $this->url = LocaleMiddleware::getLocale();
        if($this->url == 'ru'){
            return view('ru/admin/company/index', compact('company','regions'));
        }else{
            return view('uk/admin/company/index',compact('company','regions'));
        }
    }

    public function create(Request $request)
    {

        $company = Company::create([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'title' => $request['title'],
            'description' => $request['description'],
            'region_id' => $request['region_id'],
            'slug'=> str_slug($request['name']),
            'site' => $request['site'],
            'insta' => $request['insta'],
            'face' => $request['face'],
            'comments' => $request['comments'],
            'avtor' => Auth::id(),

        ]);
        if ($request->hasFile('avatar')) {

            $image = $request->file('avatar');
            $filename = $image->getClientOriginalName();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(300, 300);
            $image_resize->save(public_path('company/' . $filename));
            $company->logo = 'company/' . $filename;
            $company->saveOrFail();
            return redirect()->route('admin.company.index');
        }
    }

    public function show(Company $company)
    {
        $this->url = LocaleMiddleware::getLocale();
        if($this->url == 'ru'){
            return view('ru/admin/company/show', compact('company'));
        }else{
            return view('uk/admin/company/show',compact('company'));
        }
    }


    public function update(Request $request)
    {

    }
}
