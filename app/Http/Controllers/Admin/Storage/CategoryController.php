<?php

namespace App\Http\Controllers\Admin\Storage;

use App\Entity\Floor\Portfolio;
use App\Entity\Storage\Category;
use App\Entity\Storage\Material;
use App\Entity\Storage\Provider;
use App\Entity\Storage\Transaction\MaterialTransaction;
use App\Http\Middleware\LocaleMiddleware;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    private $url;
    private $parent;
    public function __construct(){
        $this->url = LocaleMiddleware::getLocale();
    }
    public function index(){

        $categories = Category::where('parent_id',null)->get();
        $parents = Category::defaultOrder()->withDepth()->get();
        $materials = Material::where('related_goods',null)->get();
        $materials2 = Material::orderBy('id')->get();
        $sum = Material::orderBy('id')->sum('sum');
        $providers = Provider::orderBy('id')->get();
        $transactions = MaterialTransaction::orderBy('id')->get();
        $portfolios = Portfolio::orderBy('id')->get();
        $written_off = MaterialTransaction::orderBy('id')->where('provider_id', null)->where('months', Carbon::now()->month)->sum('sum');
        $posted = MaterialTransaction::orderBy('id')->where('provider_id', '!=', null)->where('months', Carbon::now()->month)->sum('sum');
        $p = null;
        if($this->url == 'ru'){
            return view('ru.admin.storage.categories.index',compact('categories','parents', 'materials','materials2','sum','transactions','providers','portfolios','written_off','posted'));
        }else{
            return view('uk.admin.storage.categories.index',compact('categories','parents', 'materials','materials2','sum','transactions','providers','portfolios','written_off','posted'));
        }
    }

    public function more(Category $category = null){
            $categories = Category::where('parent_id',$category->id)->get();
            $p = $category->parent()->getParent();
            $parents = Category::defaultOrder()->withDepth()->get();
            $materials = Material::where('related_goods',null)->get();
            $materials2 = Material::orderBy('id')->where('category_id', $p->id)->get();
            $portfolios = Portfolio::orderBy('id')->get();
            $sum = Material::orderBy('id')->where('category_id', $p->id)->sum('sum');
            $query = MaterialTransaction::orderByDesc('created_at');
            $query1 = MaterialTransaction::orderByDesc('created_at');
            $query2 = MaterialTransaction::orderByDesc('created_at');
            $written_off = $query1->forCategory($p)->where('provider_id', null)->where('months', Carbon::now()->month)->sum('sum');
            $posted = $query2->forCategory($p)->where('provider_id', '!=', null)->where('months', Carbon::now()->month)->sum('sum');
            $transactions = $query->forCategory($p)->get();
            $providers = Provider::orderBy('id')->get();
            if($this->url == 'ru'){
                return view('ru.admin.storage.categories.show',compact('categories','p','parents', 'materials','materials2','sum','transactions','providers','portfolios','written_off','posted'));
            }else{
                return view('uk.admin.storage.categories.show',compact('categories','p','parents', 'materials','materials2','sum','transactions','providers','portfolios','written_off','posted'));
            }
    }

    public function create(){

        $parents = Category::defaultOrder()->withDepth()->get();
        if($this->url == 'ru'){
            return view('ru.admin.storage.categories.create',compact('parents'));
        }else{
            return view('uk.admin.storage.categories.create',compact('parents'));
        }
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'name' => 'required|string|max:255',
            'parent' => 'nullable|integer|exists:floor_categories,id',
        ]);

        $category = Category::create([
            'name' => $request['name'],
            'slag' => str_slug($request['name']),
            'parent_id' => $request['parent'],
        ]);
        return redirect()->route('admin.storage.categories.index');
    }

    public function show(Category $category)
    {
        return view('admin.storage.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        $parents = Category::defaultOrder()->withDepth()->get();

        return view('admin.storage.categories.edit', compact('parents','category'));
    }

    public function update(Request $request, Category $category)
    {

        $this->validate($request,[
            'name' => 'required|string|max:255',
            'slag' => 'required|string|max:255',
            'parent' => 'nullable|integer|exists:floor_categories,id',
        ]);

        $category->update([
            'name' => $request['name'],
            'slag' => $request['slag'],
            'price' => $request['price'],
            'parent_id' => $request['parent'],
        ]);

        return redirect()->route('admin.storage.categories.show', $category);
    }

    public function destroy(Category $category){

        $category->delete();

        return redirect()->route('admin.storage.categories.index');
    }

    public function first(Category $category){

        if($first = $category->siblings()->defaultOrder()->first()){
            $category->insertBeforeNode($first);
        }
        return redirect()->route('admin.storage.categories.index');

    }

    public function up(Category $category){

        $category->up();

        return redirect()->route('admin.storage.categories.index');
    }

    public function down(Category $category){

        $category->down();

        return redirect()->route('admin.storage.categories.index');
    }

    public function last(Category $category){

        if($first = $category->siblings()->defaultOrder('desc')->first()){
            $category->insertAfterNode($first);
        }
        return redirect()->route('admin.storage.categories.index');

    }
}
