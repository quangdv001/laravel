<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('helloworld', function () {
    return "hello world";
});
Route::get('test/{ten}', function ($ten) {
    return "hello world $ten";
});
Route::get('test1/{ten?}', function ($ten = "abc") {
    return "hello world $ten";
});

Route::get('call-view', function () {
    $ten = "quang";
    $ho = "do";
    return view('view', compact('ten','ho'));
});
Route::get('call-controller', 'WelcomeController@showInfo');
Route::get('hanoi',['as'=>'thanglong',function(){
    return "hanoi la thanglong";
}]);
Route::group(['prefix'=>'thuc-don'],function(){
    Route::get('bun-bo',function(){
        return "bun bo";
    });
    Route::get('bun-ngan',function(){
        return "bun ngan";
    });
    Route::get('bun-vit',function(){
        return "bun vit";
    });
});
Route::get("call-subview",function(){
    return view('layout.test');
});

//them bien cho moi view
View::share('title','anh quang');
//them bien cho view chi dinh, them n view vao mang,
View::composer(['layout.view','layout.test'],function($view){
    return $view->with('thongtin','ca nhan');
});

Route::get('check-view',function(){
    if(view()->exists('layout.test1')){
        return view('layout.test');
    } else {
        return "k tont ai";
    }
});
Route::get('test-view',function(){
   return view('views.layout');
});

Route::get('url/full',function(){
   return URL::full();
});

Route::get('url/asset',function(){
//    return URL::asset('css/mystyle.css');
    return asset('css/mystyle.css',true);
});

Route::get('url/to',function(){
    return URL::to('test',['quang'],true);
});

Route::get('url/secure',function(){
    return secure_url('test',['quang']);
});

Route::get('schema/create',function(){
    Schema::create('khoapham', function($table)
    {
        $table->increments('id');
        $table->string('tenmonhoc', 100);
        $table->integer('gia');
        $table->text('ghichu')->nullable();
        $table->timestamps();
    });
});

Route::get('schema/rename',function(){
    Schema::rename('khoapham','rpt');
});

Route::get('schema/drop',function(){
    Schema::dropIfExists('rpt');
});

Route::get('schema/change',function(){
    Schema::table('khoapham', function($table)
    {

        $table->string('tenmonhoc', 50)->change();

    });
});

Route::get('schema/create/foreignkey',function(){
    Schema::create('category', function($table)
    {
        $table->increments('id');
        $table->string('name');
        $table->timestamps();
    });
    Schema::create('product', function($table)
    {
        $table->increments('id');
        $table->string('name');
        $table->integer('price');
        $table->integer('cate_id')->unsigned();
        $table->foreign('cate_id')->references('id')->on('category')->onDelete('cascade');

        $table->timestamps();
    });
});
// php artisan make:migration create_quangdo_table --create=quangdo

Route::get('query/select-all',function(){
    $data = DB::table('product')->get();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});

Route::get('model/select-all',function(){
//    $data = App\Product::all()->toArray();
    $data = App\Product::find(3)->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});

Route::get('model/insert',function(){
//    $data = App\Product::all()->toArray();
    $data = new App\Product;
    $data->name = "ao ba lo";
    $data->price = "100000";
    $data->cate_id = 2;
    $data->save();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
Route::get('model/delete',function(){
//    $data = App\Product::all()->toArray();
    App\Product::destroy(3);

});

Route::get('relation/one-many',function(){
    $data = App\Product::find(2)->themes()->get()->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";

});
Route::get('relation/one-many1',function(){
    $data = App\Themes::find(2)->product()->get()->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";

});
Route::get('relation/many-many',function(){
    $data = App\Car::find(2)->color()->get()->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";

});
Route::get('form/layout',function(){
    return view('form.layout');

});
Route::post('form/test',['as'=>'testform',function(){
    return "hanoi la thanglong";
}]);
Route::get('form/dangky',function(){
    return view('form.dangky');

});
Route::post('form/xuly',['as'=>'xulythem','uses'=>'SinhVienController@them']);
//Route::any('{all?}','WelcomeController@showInfo')->where('all','(.*)');

Route::get('response/basic',function(){
    return "hello quang";
});

Route::get('response/json',function(){
    $arr = array(
        'mon hoc'=>'laravel',
        'giang vien'=>'quang',
        'thoi gian'=>'2 months'
    );
    return Response::json($arr);
});
Route::get('response/demo',['as'=>'resdemo',function(){
    return view('response.demo');
}]);
Route::get('response/redirect',function(){
//    return redirect('response/json');
    return redirect()->route('resdemo')->with([
        'level'=>'danger',
        'message'=>'chao cau, thong bao danger'
    ]);
});

Route::get('response/macro/cap',function(){
   return Response()->cap('khoa hoc larave');
});

Route::get('authen/login',['as'=>'getLogin','uses'=>'ThanhVienController@getLogin']);
Route::post('authen/login',['as'=>'postLogin','uses'=>'ThanhVienController@postLogin']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::resource('hocsinh','HocSinhController');
