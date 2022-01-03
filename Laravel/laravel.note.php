<?php 

//!how to upgrade and downgrape php version in xammp
/* 
*)download old php version xammp
*)rename php and apache to old file 
*)add your location of xamm into php.ini folder of your new version,
*/

// !How to clone laravel project and add into local work station 
/* 
Step:
1. download or clone project
2. Go to the folder application using cd 
3. Run composer install if not install otherwise composer update on your cmd or terminal
4. Copy .env.example file to .env on root folder. cmd = copy .env.example .env
    You can type copy .env.example .env if using command prompt Windows 
     or cp .env.example .env if using terminal Ubuntu
     *)create database and add in your env file,
5. Open your .env file and change the database name (DB_DATABASE) 
6. Run php artisan key:generate key will generate into your env file,
8.Run php artisan serve
7. Run php artisan migrate table will migrate,
9)php artisan db:seed --class=seederClassName 
*/


//!1) framwork , 

//!2) laravel install ,

// composer global requried laravel/installer,
// composer global remove laravel/installer, = laravel remove,
// laravel new projectName, = new project install,

// to find composer type : composer in cmd,
// cd..  = ek drive piche asbe 
//cd "laravel"; folder e dukbe jodi thake,
// go to your project directory and type =  php artisan serve = server create,
//laravel remove korte cmd theke remove krbo and project file delete krbo,

//resourse ->view->blade.php \ app->controller,\ route->web.php,
//composer and laravel version details in composer.json 

//!4) Route - --------------


//?basic Route By view Return
// Route::get('/', function () {
//     return view('welcome');
// });

//2)route with parameter 
// Routes in Laravel
// 00:00 Introduction to Route

//1) return and echo all can work  // 04:47 Route Returning String
Route::get('/', function () {
    echo "nice";
    return "hello";
});

// 05:29 Route Parameter // 08:18 Routes Multiple Parameter
Route::get('post_id/{post_id}/comment_id/{comment_id}', function ($post_id,$comment_id) {
    
    return "post id: $post_id | comment id: $comment_id";

    /* if($post_id ==4){
        return "post id: $post_id | comment id: $comment_id";
    }else{
        return "not found";
    } */
});

// 10:16 Optional Route Parameter

Route::get('users/{name?}', function ($name = null) {
    return "hello $name"; //null na dile error khabo,
});
Route::get('default/{name?}', function ($name = 'sonam') {
    return "hello $name";
});
// 14:20 Route Parameter and Regular Expression
Route::get('reg/{name}/{id}', function ($name,$id) {
    return "Name : $name Id: $id";
})->where(['id'=>'[0-9]+','name'=>'[a-zA-Z]+']);


// 18:49 Routes Parameter with Regular Expression helped Methods
//using regular explation method
Route::get('reg/{name}/{id}', function ($name,$id) {
    return "Name : $name Id: $id";
})->whereNumber('id')->whereAlpha('name');


// 20:09 Redirect Routes
Route::get('there', function () {
    return "there";
});

Route::redirect('here', 'there', 301); //by default 302 301 parmanent redirect,
Route::permanentRedirect('hello','ok');

// 22:14 Fallback Route
route::fallback(function(){
    // echo "Fallback";
    return "Fallback page";
});
// 23:25 Route Methods

Route::get('users/{id}', function ($id) {
    //run after hit url 
});

Route::post('users/{id}', function ($id) {
    // run after from submition 
});

//* put/patch/delete/options/

// 23:42 Using Multiple Methods

Route::match(['get', 'post','put'], '/user/profile', function () {
    //if need to run same route in 2methods like form submit and show,
});

Route::any('hello/{id}', function ($id) {
    //it will run in any method,
});

// 25:07 Coding

/* Routes in Laravel
00:00 Introduction to Route
04:47 Route Returning String
05:29 Route Parameter
08:18 Routes Multiple Parameter
10:16 Optional Route Parameter
14:20 Route Parameter and Regular Expression
18:49 Routes Parameter with Regular Expression helped Methods
20:09 Redirect Routes
22:14 Fallback Route
23:25 Route Methods
23:42 Using Multiple Methods
25:07 Coding */


// use Illuminate\Support\Facades\Route; namespace of laravel route class,

use Hamcrest\Arrays\IsArray;
use Illuminate\Routing\Route;

// 04:47 Route Returning String
Route::get('/',function(){
    return 'welcom Page';
});

Route::get('about/hello',function(){
    return 'hello';
});
// 05:29 Route Parameter
// 08:18 Routes Multiple Parameter
Route::get('about/{u_id}/{name}',function($id,$name){
    return $id;
});

//url e parameter pass krle seta function e define krte hobei, and option e null data detei hobe,
// 10:16 Optional Route Parameter
Route::get('optional/{name?}',function($name=null){
    return $name;
});
Route::get('optional/{name?}',function($name='arfan Khan'){
    return $name;
});

//option korle null dite hobe,
// 14:20 Route Parameter and Regular Expression
Route::get('number/{number?}',function($number=null){
    return $number;
})->where('number','[0-9]+');

Route::get('number/{number?}',function($number=null){ //override route
    return $number;
})->where('number','[a-z]+');

Route::get('newone/{U_name}/{U_id}',function($u_name,$u_id){
    return $u_name . $u_id;
})->where(['U_name'=>'[A-Za-z]+','U_id'=>'[0-9]+']); 

// 18:49 Routes Parameter with Regular Expression helped Methods
Route::get('newone/{U_name}/{U_id}',function($u_name,$u_id){
    return $u_name . $u_id;
})->whereNumber('U_id')->whereAlpha('U_name');



// 20:09 Redirect Routes
Route::redirect('/','there'); //route redirecting

// 23:25 Route Methods
// 23:42 Using Multiple Methods
Route::match(['get','post'],'multiple_method',null); //multiple method pass,

Route::any('any_method',function(){
    return 10;
});

//301 redirect from 302
Route::redirect('here','there',301);
Route::permanentRedirect('here','there');

// 22:14 Fallback Route
Route::fallback(function(){
    return "Page Is not found";
});


//!view ------------


// 00:00:00 Introduction to View
// 00:01:02 Creating a View = make name.blade.php in resource folder,
// 00:02:13 Create Route for View
Route::get('/', function () {
    return view('home');
});

// 05:29 Route Parameter pass into view // 08:18 Routes Multiple Parameter
// 00:25:20 Passing Data from Route to View
// 00:28:47 Accessing Data which is passed from Route to View {{$name}}
Route::get('post_id/{post_id}/comment_id/{comment_id}', function ($post_id,$comment_id) {
    return view('home')->with(['post_id'=>$post_id,'comment_id'=>$comment_id,'simple_pass'=>20]);
    return view('home',['post_id'=>$post_id,'comment_id'=>$comment_id,'simple_pass'=>'hello']);
});

// 00:07:25 Creating View File inside Folder and Creating Route 
Route::get('folder/file_1', function () {
    return view('folder.file_1');
});

Route::get('folder/subfolder/file_2', function () {
    return view('folder.subfolder.file_2');
});

//if need to see only view without pass parameter 
Route::view('onlyview', 'folder.file_1',['name'=>'arfan'])->name('routeName');

Route::get('redirect', function () {
    // return redirect(route('routeName'));
    return redirect()->route('routeName');
});

// return view('folderName.nameOfview',['dataName'=>$dataValue,'dataName2'=>$dataValue2]);
/* 00:00:00 Introduction to View
00:01:02 Creating a View
00:02:13 Create Route for View
00:07:25 Creating View File inside Folder and Creating Route 
00:11:05 Coding
00:25:20 Passing Data from Route to View
00:28:47 Accessing Data which is passed from Route to View
00:30:13 Coding */



// 00:01:02 Creating a View
// 00:02:13 Create Route for View
Route::get('viewpage',function(){
    return view('welcome'); //blade name
});

Route::view('direct_view','about'); //direct view without method,

// 00:07:25 Creating View File inside Folder and Creating Route 
Route::view('folderpage','folder.page'); //folder page accessing
Route::view('subfolderpage','folder.subfolder.page2'); //folder page accessing


// 00:25:20 Passing Data from Route to View
Route::view('pass_data','about',['name'=>'Arfan Khan is a good boy']);
Route::get('about',function(){
    return view('about')->with('name','Rename Shuvo khan'); //with method direct use hoi na
});
Route::get('path_view/{u_id}', function ($id) {
    return view('folder.viewFile',['dataName' => $id]);
});

//fallback e view pass,



//!contorleer --
// 00:00 Introduction to Controller
//app/http/controller,

// 05:05 Defining Controller Class
// php artisan make:controller studentController -r = resource soho,
//php artisan make:controller ShowController --invokable = for single function

// 06:20 Creating Route for Controller Class
Route::get('controller',[studentController::class,'show']);

// 10:00 Getting Parameter in Controller
route::get('controllerWithPara/{name}',[studentController::class,'showWithPara']);

// 20:15 Returning View from Controller Class
// 33:45 Getting URL Parameter in Controller Class and Passing to View
// 38:36 Passing Data from Controller to View

// 42:50 Multiple Methods inside Controller
route::get('controllerwithview/{name}',[studentController::class,'showByview']);

// 47:21 Single Action Controller
//jodi ektai function run er need hoi,
route::get('singleControler/{id}',ShowController::class);

/* 00:00 Introduction to Controller
05:05 Defining Controller Class
06:20 Creating Route for Controller Class
10:00 Getting Parameter in Controller
20:15 Returning View from Controller Class
33:45 Getting URL Parameter in Controller Class and Passing to View
38:36 Passing Data from Controller to View
42:50 Multiple Methods inside Controller
47:21 Single Action Controller */

//rout -> show direct , route->view->show, route->controller ->show direct, route->con->view->show,
//url theke data nite pari, and ?optional null kore krte pari, view te  url data pass krte pari {{$name}},
//route ->controller hobe just namespace use and class and function call krbo,


// 05:05 Defining Controller Class
//php artisan make:controller controllerName, php artisan make:controller controllerNameINvoked --invokable

//invoke e [] eita deya jabe na 

//controller banale controller folder e controller file create hobe,

// 06:20 Creating Route for Controller Class
// web.php 
Route::get('about/{name?}',[AboutController::class,'show']); //data pass optional,
Route::get('about2/{name?}',[AboutController::class,'show1']); //2nd function in same controller,
// Route::get('newShow',[ShowController::class]); //error ase [] jonno,
Route::get('newShow',ShowController::class); //ok [] without it one function only invoked


//AboutController code, simple controller code 
class AboutController extends Controller
{
    public function show($name = null){
        $a = 10;
        return view('folder.subfolder.page2',['name'=>$name,'a'=>$a]);
    }
    public function show1($name = null){
        return view('folder.page',['name'=>$name]);
    }
}

// invoked controller showController code 
public function __invoke(Request $request)
{
   
        // return "invokable Function call from controller";
        return view('welcome');

        
 
}

//!Blade Tamplate ------------

// $loop->first can't run without foreach,

/* {{-- Blade Template Crash Course 
    00:00:00 Introduction to Blade
    00:01:37 Theory
    00:12:01 Creating Project
--}}

{{-- 00:15:17 Displaying Data --}}
{{ $name }}

{{-- 00:24:04 Calling Function --}}
{{ time() }}
{{ print_r(['arfad']) }}

<br><br>

{{-- 00:25:22 If Directive --}}

@if (true)
<h1>If Declarative Run</h1>
@endif

{{-- 00:27:04 If Else Directive --}}

@if (true)
<h2>If else run</h2>
@else
<h3>else part</h3>
@endif

{{-- 00:30:17 If Elseif Else directive --}}

@if (false)
if run
@elseif(true)
elseif run
@else
else run
@endif

{{-- 00:32:18 Unless directive --}}

@unless(false)
<br>unless run by false
@endunless

{{-- 00:34:02 isset directive --}}

@isset($name)
<br> isset
@endisset

{{-- 00:37:49 empty directive --}}

@empty($name1)
<br> can't run
@endempty

{{-- 00:39:40 production directive --}}
@production
production run
@endproduction

{{-- 00:40:23 specific env directive --}}
@env('local')

@endenv
{{-- 00:41:03 multiple env directive --}}
@env(['local', 'staging'])

@endenv

{{-- 00:41:52 switch directive --}}
@switch($name = 'arfan')
@case('arfan')
    arfan swith call <br>
@break
@case('adnan')
    adnan switch call <br>
@break
@default
    <br> default run
@endswitch

{{-- 00:45:25 for loop --}}

@for ($i = 0; $i <= 10; $i++)
{{ $i }} <br>
@endfor

{{-- 00:47:42 foreach loop --}}

@foreach (range(1, 10) as $item)
{{ $item }}
@endforeach

{{-- php code write --}}
@php
$collection = [];
$i = 0;
@endphp

{{-- 00:49:46 forelse empty loop --}}
@forelse ($collection as $item)

@empty
<br> no data found
@endforelse

{{-- 00:51:37 while loop --}}

@while (false)

@endwhile

{{-- 00:52:35 break and continue directives --}}
<br>
@for ($i = 0; $i < 5; $i++)
{{-- @if ($i == 3)
    @break;
@endif --}}

@break($i ==3)

{{ $i }}
@endfor

{{-- 00:56:40 loop variables --}}
@php
$collection = [2, 3, 4, 5, 6];
@endphp

@foreach ($collection as $item)
{{ $item }}
@if ($loop->first)
    first loop run
@endif

@endforeach

 */

/* Blade Template Crash Course 
00:00:00 Introduction to Blade
00:01:37 Theory
00:12:01 Creating Project
00:15:17 Displaying Data
00:24:04 Calling Function
00:25:22 If Directive
00:27:04 If Else Directive
00:30:17 If Elseif Else directive  
00:32:18 Unless directive
00:34:02 isset directive
00:37:49 empty directive
00:39:40 production directive
00:40:23 specific env directive
00:41:03 multiple env directive
00:41:52 switch directive
00:45:25 for loop
00:47:42 foreach loop
00:49:46 forelse empty loop
00:51:37 while loop
00:52:35 break and continue directives
00:56:40 loop variables */

// 00:15:17 Displaying Data
// 00:24:04 Calling Function
{{$name}} , {{print_r($name)}} 
//you can use php fun in {{}} 
{{--comment text of blade,--}}

//* if typing in blade tem. 

// 00:25:22 If Directive
// 00:27:04 If Else Directive
// 00:30:17 If Elseif Else directive  



@if(true)

html, or $name var etc can write here 

@endif

------------------
@if(true)

@else

@endif

-----------------

@if (false)


@elseif(false)

@else 


@endif


// 00:32:18 Unless directive

//* @unless condition - eita true hole run krbe na false hole run krbe,

@unless(false) 


@endunless


//* @isset($name) eita value check kore isset function,
// 00:34:02 isset directive
@isset($name)

{{$name}}

@endisset

// 00:37:49 empty directive
//* @empty($name) -- @endempty; eita empty check kre,

@empty($name)

{{$name}}

@endempty;


//* @auth('admin') endif;  @guest('') @endguest;

//*@production() -- @endproduction , @env() -- @endenv;

/* @switch($name= "arfan")
    @case ('adnan') 
    code 
    @break;

    @case ();
    
    @break ; 

    @defalut 

    @endswitch
    
    */


@for($i = 0; $i<5; $i++)

    @if($i == 4)
        @break;
    @endif;

    //code 

@endfor 

//* foreach loop  


@foreach($array as $value) 


@endforeach

//we can use nested loop or if stetment

@while()

@endwhile

@forelse();

@if($a = 4)
 @continue;
@endif


$array1 = ['arfan','adnan','shuvo',[1,2,3,4]];

@foreach($array1 as $value)

    @if(IsArray($value))

        @foreach($value)
            @if($loop->parent->first)
                // code.  fdfdsadsf 
            @endif dsf
        @endforeach ;

    @endif 

@endforeach;


//* forelse () - eita foreach er motoi kaj kore kintu array value na thakle empty ta run krbe,
// 00:49:46 forelse empty loop
@forelse('')

array thakle run krbe na thkle, 

@empty 

no array value found,


@endforelse;

//* break and continue direct write ,,

@break($a == 10); @continue($value == 5);

// 00:56:40 loop variables
//* $loop var ,  $loop->first/ last/ even / odd/ $loop->parent->first,

@forelse($student as $stu)

    if($loop->first)
    first e eita run krbe,
endif;

    @empty 

    no array value found;



@endforelse;




//!Include directive,

/* Include subview inside view in Laravel
00:00 include Directive
11:04 include Directive with Controller
21:30 includeIf Directive
23:38 includeWhen and includeUnless
29:45 each Directive
36:40 once Directive */

// welcome.blade.php \\ contact.blade.php  


// contact.blade.php file er bitor 
//contact blade e var banale seta welcome blade er vitor o access pabo, 
//kintu welcome er var contact e access pabo na,

//joto bar include krbo code toto bar cole asbe,

@include('welcome'); @include('folder.welcome'); //welcome blade er html tag soho sob cole asbe,

@include('welcome',['total_mobile' => 4]);

@includeif('product_page'); product page tkhle run krbe na thkle error asbe na, 

@includeWhen(true,'product_page',['time'=>10]); // eita true hole run krbe,
@includeUnless(true,'product_page',['time'=>10]); // false hobe run krbe,

@each('includeNAMe',$arrayname,'arrayValue','noArrayFound_include'); 

forelse($student as $stu)

    include('student'); //<h4>{{stu}}</h4>

    empty 

    include('nostudent') // <h4>no student found</h4>


endforelse;



// once directive  

@once 
//ekbar run krbe,
@endonce


//!php raw code in laravel,

/* 
@php 
code php
@phpend;
 */


 //!component in laravel, eita diye layout banano jai, 

 /* Component in Laravel
00:00 Introduction to Component
02:07 Class Based Component
06:44 Creating Project
08:00 Creating Component
10:05 Rendering Component
11:42 Creating Component inside folder
13:20 Rendering Component
14:50 Passing Data to Component
17:40 Defining Data in Component
19:54 Displaying Component Data
20:23 Casing
21:19 Practical of above 4 Topics
36:29 Component Method
38:41 Component Attributes
43:43 Merging Attributes */

 //component create, - php artisan make:component componentName;/ folder/componentName;
 //app->view->component->folder/component // only componnent file,
//resource->view->component .. <x-component-name/> slot text <x-slot title='title'><x-slot/>  <x-folder.component-name/> / {{$slot}} {{$title}}
// <x-card title='title 1' :description=$desc/ > ||  php = $desc = "component description";
// app er component e property define krte hobe, {{$title}};
//component file access krle seta jtai access krbo tar var seo pabe access,

//component attribute = eita j property component class er constructor e define kori nai oigulo asbe,
// class = 'myclass' / {{$attribute}} , = eita sob guloi asbe but ei class ta ektai asbe sudu,
// defalut class = {{$attribute->marge(['class'=>'Dclass'])}}

contactComponent.blade.php -> <h2 {{$attribute->marge(['class'=>'Dclass'])}} >Value</h2> sob guloi add hobe,

//app -> component ase tar bitor class e method lekhbo and eita direct componentName.blade e funName($var); kore see krbo,

//!Anonymous component,
//eita component banate hobe directly and kono class thkbe na , ekhn direct access krbe parbo,
// resource ->view er ->component (folder) ->card.blad.php -> <div>{{$tilte}}</div> || <x-card title="title 1"/>


//!slot = eita just simple component tag er bitor er data gulo show kothai krbo eita kaj kore,
<div class="alert_component">
    data
</div>

<x-alert>
    <x-slot name='title 1'>data of title slot</x-slot>
    <span>Hello Alert</span>
</x-alert>
// {{$slot}} == span er data cole asbe,
// {{$title}} == slot er bitor j attribute ase cole asbe,

//!Layout making , 

// slot er use korei code redundency er joonno use hoi,
// top code
<body>
    
</body>
// down code 

// tod and down code e compolent layout e rakhbo and section k slot or nameSlot e rakhbo,

//!layout Extend with inheritance, 

@yield('sectionName');

/* @section('sectionname')

@endSection; */

@section('secName','string');

/* @section('section')

@show; //sobar shese yield hobe, */

/* @section('override')

@parent

@section; */


// Create Layout using Template Inheritance in Laravel
// yield directive, section directive, parent directive and show directive

// layout banabo and seta extend kore use krbo and @yield('page-name') er bitor section passs korbo,

// @extend('folder.adminLayout')
// @yield('page-name')  // section name ekhane asbe ,
// @section 
// html code will be here, 
// @endsection;

// @section('page-name','value of section');



//?defalut section with override,
/* @section('name')

@endsection // eita yield krte hobe show krte,

@section('default_sec')

@show //eita section o hobe and yield o hobe,

home.blade.php 
override section 

@section('default_sec')
@parent // eita dile parent er tao asbe, 
override code will be here;

@endsection */

//!css AND JS ADDING INTO LARAVEL 
/* How to add CSS and JavaScript in Laravel Project 
00:00 Internal CSS and JS
04:25 External CSS and JS = href = 'css/style.css'
05:39 Inside Public Folder = href = "{{asset('css/style.css')}}" url();
15:32 Inside Resources Folder */

// internal css and js will add in tag of style , <script></script>
//public and resourse folder e css and js add krte pari,
//public e simple external adding hobe taholei kaj krbe,
// {{asset('path')}} {{url('path')}}  href="{{asset('path')}}";
//asset method use krbo always
//sass or external kichu use krte caile resourse e use krbo,
//simple e css js public e use krbo,

    /* 
    ?process of resourse install by npn resourse folder,
    *)install node.js,
    *)after install node js install npm by [npm install] in your laravel project folder,
    *)make css and js file into your resource folder
    *)add your css and js file into webpace.mix.js file
    *)run [nmp run dev] / [npm run pro] [npm run watch]
    *)see your public folder css and file will be compiled.
    *)now if you change something in your resource file it will compiled to your public assets file,
    */

    mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/my.js', 'public/js')
    .js('resources/js/scripts.js', 'public/js')

    .postCss('resources/css/my.css', 'public/css')
    .postCss('resources/css/style.css', 'public/css')
    .postCss('resources/css/app.css', 'public/css',);

//!bootstrap adding 

/* How to Add Bootstrap in Laravel Project
00:00 Adding Bootstrap using CDN
06:56 Adding Bootstrap inside Public Folder
15:05 Adding Bootstrap inside Resources Folder/ Laravel Mix */

//!name route ................... 

// 1)full url link asbe 
// 2) kno view route url change krleo somosha hobe na,

route::get('/',function(){
    return view('home');
})->name('home_new');

<a href="{{route('home_new')}}">home_new</a>
<a href="{{redirect->view('home_new')}}">home_new</a>
// site domain+ home_new 

//old style e route url change krle blade er link o change krte hobe,

//data pass by name() method,

route::get('about/{category}',function($cat){
    return view('home',['cat' =>$cat]);
})->name('home_new');

<a href="{{route('home_new',['category'=>'mobileData'])}}">home_new</a>
<a href="{{route('home_new',['category'=>'mobileData','n'=>3])}}">home_new</a> 

// n=> 3 pass na krle ?n=3 asbe 


//!resume project 

/* Resume Project using Component Layout and Template Inheritance in Laravel
00:00:00 Resume Project using Component Layout
00:49:20 Resume Project using Template Inheritance */


//!middleware ,

// karnel.php moddhe middleware property te define krte hoi,
//under constructtion middleware e execption show,
//php artisan make:middleware MiddlewareName;
//view te errors folder e error page create kre show krte pari, 503.blade.php rakhbo name,
//middleware under construction sob request handle krbe,exeption auto define hoi,
//minimal.blade.php 

php artisan vendor:public --target=laravel-error

// kno ekta route er jonno middleware set=
// specific route e middle ware banabo property and oi name diye route e define krbo,

// 'construction' => middleware make in underconstruction 
// route()->middleware(['construction','2ndConstruction']);


//middle ware group banate middleware group property te jeye 
// 'ground' => [define one by one,]

//group middleware e ekta key tei ekadik middleware thake,

//route::middlewar(er bitor ektadik route lekhte pari,)

// route::middleware(['construction'])->group(function(){
//     route define here
// })
// dd() dump and die 

//role theke guest kore deshboard e redirect kre deya,


//!form in laravel.

/* Form in Laravel 
00:00 Introduction to Form
01:05 Creating Form
02:31 csrf directive
03:33 Accessing Form Data
19:16 Access All Input Data
20:50 Access All Input Data as Associative Array
21:34 Access Individual Input Data
24:02 Access via Dynamic Properties
25:42 Check Input Data Present 
27:16 Check Multiple Input Data Present
28:22 hasAny Method
29:20 filled Method
31:25 missing Method
32:40 whenHas Method
34:16 whenFilled Method
35:33 Form Old Data
37:02 Access Form Old Data
38:02 flashOnly Method
39:36 flashExcept Method
41:33 Redirect on Form Submission with old Data */

form e -> @csrf for protection,

fun->singup(Request $request){}

registration blade e form-> name,email.password
form e post method hole route o post krte hobe,
@csrf na dile page expire asbe,


// 1st e get and form submit e post hobe,

Route::get('registration', function () {
    return view('registration');
});
Route::post('registration', function () {
    return view('registration');
});

<form action="" method="POST">
        @csrf
        <input type="text" name='name'>
        <button type="submit"></button>
</form>


//run by controller, 
Route::get('registration',[registrationController::class,'show']);
Route::post('registration',[registrationController::class,'signup']);

// show , singup -> return view(reg);

submit e click e form post and 1st requste asbe get theke

// Request = class 

public function show(Request $request){
    // dd($request);
        print_r($request->all()['name']); //eita sob input value array asbe,
        echo "<br><br>";
        print_r($request->input()); // eita sob input anbe  
        echo "<br><br>";
        print_r($request->input('email'));
        echo "<br><br>";
        print_r($request->email); //individual call
        echo "<br><br>";
        if($request->has('email')) echo "yes found";
        if($request->has('email','password')) echo "yes found";
        if($request->hasAny('email','password')) echo "yes found";
        if($request->filled('email')) echo "yes found";

        if($request->missing('username')){ //username e input nai 
            echo "email missing";
        }
        if($request->whenHas('name')){ //empty check krbe,
            echo "email missing";
        }
        if($request->whenFilled('name')){ //empty check krbe,
            echo "email missing";
        }
        
        $request->flash();

        print_r($request->old('name'));
        $request->flashOnly('name','email');
        $request->flashExcept('name','email');

        // with input data flash krbe,
        return redirect('olddata')->withInput(); //input soho jabe  olddata route theke
        // {{old('email')}}

        return redirect()->route('old_name_method')->withInput();
        return redirect()->route('old_name_method')->withInput(
            $request->except('password') // only can use also,
        );

        echo "post method";
        return view('registration');
        return view('registration');
}


RegistrationController -> controller dara send 

// b:if = sob if snippit asbe,


//! crud - sql query builder

// request er data input data pass krbo 

// insert 
DB:table('student')->insert(
    'name' =>'arfan',
    'email'=> 'khan188993@gmail.com',
)

//retrive 

DB:TABLE('student')->get(); //get() = sob row, where = condition,first = firts row, value('single column'), find(id)

//edit 

DB:TABLE('student')->where('id'=>2)->get();

//update 
DB:TABLE('student')->where('id'=>2)->get();

//delete 

DB:TABLE('student')->where('id'=>2)->delete();

return redirect(route('home'))->with('status','student added');

if(session()->has('status')){
    echo session('status');
}

// seeder with faker.php, hash/str/ 

php artisan make::seeder StudentSeeder; 
php artisan db:seed --class=StudentSeeder; // individual
php artisan db:seed; //all in one 

// dbseed run e define 
$this->call([
    StudentSeeder::class,
])


run(
    DB::TABLE('student')->insert(

        $faker = faker::create();

        // 'name'=>str::(10),
        // 'email' => str::(5) . '@gmail.com',

        // 'name'=>Str::random(10),
        // 'email' => Str::random(5) . '@gmail.com',
        // 'password' => Hash::make('hellopass1934'),

        'name'=>$faker->name(),
        'email' =>$faker->uniqui()->safeEmail(),
        'password' =>$faker->password(),





    )
)

//! Eloquent ORM and Model in Laravel
/* 
00:00:00 Introduction Eloquent ORM
00:01:23 Query Builder or Eloquent which one better
00:03:08 Generating Model Class
00:06:15 Model Class and It's Properties
00:10:56 Retrieving Data from table
00:11:31 Creating Project
00:11:48 Creating Database
00:12:10 Database Configuration
00:13:28 Creating Model Class
00:14:36 Creating Model and Migration together
00:15:09 Creating Model Migration and Controller together
00:16:30 Creating Table and Its' Columns
00:18:50 Retrieving All Data from table
00:23:13 Model Class Properties
00:27:38 Building Queries
00:29:48 Chunking Result
00:33:08 Retrieving Single Data from Table
00:41:03 Retrieving or Creating Data from/into Table
00:45:06 Fillable Property
00:49:25 Aggregates
00:51:39 Insert Data into Table
00:57:47 Update Data into Table
01:06:26 Delete Data from Table
01:10:07 Delete All Data from Table */

php artisan make:model student -mc  = model con




//!session 

    /* 
            session data put, get, get default, default value return cluser fun,
            get e name default value asbe na jodi put e thake, session all value collect,
            session value show as array, $request->session()->forget(['name','name1']);, $request->session()->flash('key', $value);
            */
            //! storing session 

            
            // $request->session()->put('name','arfan khan');
            // $request->session()->put('name1','adnan khan');

            // echo $request->session()->forget('name'); 

            //!Session get after destroy 
            /* echo $request->session()->get('name');
            $request->session()->forget('name');
            dd($request->session()->get('name')); */

            //!delete multiple 

            /* $request->session()->forget(['name','name1']);
            dd($request->session()->all()); */

            //!remove all items 

            /* $all_items = $request->session()->flush();
            dd($all_items); */

            // retrieveing VLAUE and deleting Session items 

            /* $value = $request->session()->pull('name','fahim');
            ECHO $value; */
             


            /* //get session data same name will replace,
            echo $request->session()->get('name',);
            echo $request->session()->get('name1',);
            
            // value less key will not give error get will not store in session, same name will not show which is store in session,
            // echo $request->session()->get('name2'); 
            // echo $request->session()->get('name','fahim');
            echo $request->session()->get('name2','fahim');
            // echo $request->session()->get('name1','arfan');

            // clouser function  if price name kisu na thka tahole run krbe,
            echo $request->session()->get('price',function(){
                return 101;
            });

            // retrive all session data 
            $all_data = $request->session()->all(); */
            // dd($all_data);
            
            
        //    foreach ($all_data as $value) {
        //        print_r($value);
        //        echo "<br>";
        //    }

        //! key exist check true if has

        // if($request->session()->has('name')){
        //     dd('yes');
        // }

        //!key does'n exist 
        // if($request->session()->missing('name')){
        //     dd('yes');
        // }


        //!global session 

        // session(['name','sonam']); //numaric array,
        session(['name'=>'russel']); //assoc array,
        // echo session('name','adnan khan'); //session with defalut value,

        //! storing session 

            
            // session(['name'=>'arfan khan']);
            // session(['name2'=>'adnan khan']);

            // echo session()->forget('name'); 

            //!Session get after destroy 
            /* echo session('name');
            session()->forget('name');
            dd(session()->get('name')); */

            //!delete multiple 

            /* session()->forget(['name','name1']);
            dd(session()->all()); */

            //!remove all items 

            /* $all_items = session()->flush();
            dd($all_items); */

            // retrieveing VLAUE and deleting Session items 

            /* $value = session()->pull('name','fahim');
            ECHO $value; */
             


            /* //get session data same name will replace,
            echo session('name',);
            echo session('name1',);
            
            // value less key will not give error get will not store in session, same name will not show which is store in session,
            // echo $request->session()->get('name2'); 
            // echo $request->session()->get('name','fahim');
            echo session('name2','fahim');
            // echo $request->session()->get('name1','arfan');

            // clouser function  if price name kisu na thka tahole run krbe,
            echo session('price',function(){
                return 101;
            });

            // retrive all session data 
            $all_data =session()->all(); */
            // dd($all_data);
            
            
        //    foreach ($all_data as $value) {
        //        print_r($value);
        //        echo "<br>";
        //    }

        //! key exist check true if has

        // if(session()->has('name')){
        //     dd('yes');
        // }

        //!key does'n exist 
        // if(session()->missing('name')){
        //     dd('yes');
        // }
        

        //redirect page ekbar e dekhabe,
        $request->session()->flash('status','login success');

        return redirect(route('login'));
        // return redirect()->route('profile');




//log out er por fun hobe,
{{Session('status')}}

@if(session()->has('name'))
    {{session()->flush()}}
@endif

//config er vitor session e defalut setting ase, storage er vitor session file,


// laravel ecommerce project basic, 
1)
install project, serve, blade create master,login and expand, 
bootstarap and jquery integrate

2)view::make baad hoye gese, header,footer create and add,
*)login form add, css add,

3)database create, add column and table my migration,
*)env setup , data insert by seeder,
// php artisan db:seed --class UserSeeder 

4)user controller create,

public function show(){
    return view('login');
}

public function login(Request $request){
    $input_data = $request->input();
    // dd($input_data);

    return $input_data;
}

 //submiting login page,
 function login(Request $req)
 {
     $user= User::where(['email'=>$req->email])->first();
     if(!$user || !Hash::check($req->password,$user->password))
     {
         return "Username or password is not matched";
     }
     else{
         $req->session()->put('user',$user);
         return redirect('/');
     }
 }

 product controlder return in (/);

 5)make middleware for login session 
 \App\Http\Middleware\UserAuth::class,
 \Illuminate\Session\Middleware\StartSession::class,
// j page search dibo middle ware e oitai asbe,
 return $next($request);

//  middle userAuth 

public function handle(Request $request, Closure $next)
    {
        
        // dd(($request->session()->get('user')));
        if( ($request->path()=='login') && ($request->session()->has('user')) ){
            return redirect('/');
        }

        return $next($request);
    }

6)seeding data lots of 

DB::table('product')->truncate();
        // DB::table('product')->insert([
        //     'name' => 'afadsfadf',
        //     'price' => 'afadsfadf',
        //     'category' => 'afadsfadf',
        //     'gallery' => 'afadsfadf',
        //     'description' => 'afadsfadf',
        
        // ]);


7) 
<div class="carousel-inner">

        @foreach ($product_data as $item)
        <div class="carousel-item {{$item['id']==1?'active':''}}">
            <img src="{{$item['gallery']}}" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>{{$item['name']}}</h5>
                <p>{{$item['description']}}</p>
              </div>
          </div>
        @endforeach
    </div>

    //product controller
    public function index(){
        // dd(product::all());

        $product_all = product::all();

        return view('product',['product_data'=>$product_all]);
    }

    <a href="{{asset('/')}} arfan">Go Back</a>


    //! 7)log in and log out function

    *)bootstarp log in and out btn copy 
    *)if(session[user]) find - log out and username show 
    *)else - log in btn show 
    *)logout funciton e session user flash kore log in page e redirect kore disi,
    //log out balde code,
    @if (session()->has('user'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-expanded="false">{{session()->get('user')['name']}}</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{asset('/logout')}}">Log Out</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset(/cartlist'')}}">cart({{ $items }})</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('login')}}">Log In</a>
                    </li>
                @endif


    //function 
    // user controller function  site/logout path e hit krle eita run krbe,
    function logout(){
        session()->forget('user');
        return redirect('/login');
    }


    //!cart product listing 
    *)eita join er maddho me ber korbo,
    *)cartList route e show krbo cartList method er bitor functionality,
    *)join diye ber kore product gulo view te send kore dibo and foreach kore show krbo,
    *)site/cartlist e hit krle sob product show krbe and 

    //cartitem code
 @extends('master')
@section('content')
<section class='product'>
    <div class="container">
        <h3 class="mb-5">Cart Product List:</h3>
        <div class="row">
            @forelse ($cart_porduct as $item)
                <div class="col-3">
                    <div class="single-product-box">
                        <div class="p-img">
                            <img src="{{ $item->gallery }}" alt="...">
                        </div>
                        <h2>{{ $item->name }}</h2>
                        <h5>{{$item->category}}</h5>
                        <p>{{$item->description}}</p>
                        <a href="{{asset('detail/'.$item->id)}}">See Details</a>
                    </div>
                </div>
            @empty
            <div class="col-6 offset-3">
                <h2>No Product Found</h2>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection

//product controller code site/cartlist route e ei method run krbe,
function cartList(){

    $user_id = session()->get('user')['id'];
    
    $cart_product =  DB::table('cart')
    ->join('product','cart.product_id','=','product.id')
    ->where('cart.user_id',$user_id)
    ->select('product.*')
    ->get();

    return view('cartlist',['cart_porduct'=>$cart_product]);

    
}

//!remove cart product form list 
*)remove/id asbe eita collect kre cart table dore destoy kore dibo, site/remove/id route e hit kore,
<a href="{{asset('remove/'.$item->cart_id)}}" class="btn btn-danger">Remove Cart</a>

function cartList(){

    $user_id = session()->get('user')['id'];
    
    $cart_product =  DB::table('cart')
    ->join('product','cart.product_id','=','product.id')
    ->where('cart.user_id',$user_id)
    ->select('product.*','cart.id as cart_id')
    ->get();

    return view('cartlist',['cart_porduct'=>$cart_product]);

    
    
}

// remove/2 asche remove btn hit kore,
function removeCart($id){
    cart::destroy($id);
    return redirect('cartlist');
}

//!order page making 

*)oder btn bitor click e sum krbo cart er sob product gulor,
*)sum result gulo order page e show krbo tax shoho,

// order page 
<thead>
      <tr>
        <th>Amount</th>
        <th>$ {{$order_price}}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tax</td>
        <td>10</td>
      </tr>
      <tr>
        <td>Total:</td>
        <td>${{$order_price+10}}</td>
      </tr>

    //   product controller e funciton 
    // site/order e hit krle run hobe eita, and value order view te return krbo,
    function orderNow(){

        $user_id = session()->get('user')['id'];
        
        $order_price =  DB::table('cart')
        ->join('product','cart.product_id','=','product.id')
        ->where('cart.user_id',$user_id)
        ->sum('product.price');

        return view('order',['order_price'=>$order_price]);
    }


    //FORM ADD IN ORDER PAGE,
    // adding form with payment method 

    //!order table create and migrate with column and 


    //!order placement
    *)delete cart table all data on using user id ,
    *)form submit er value gulo orders table e add korbo 
    *)redirect krbo orderplace er bitor,
    *)order model create for insert data in order table,

    // productController e orderplace function 
    function orderPlace(Request $request){
        $user_id = session('user')['id'];
        $Allcart = cart::where('user_id',$user_id)->get();

        foreach ($Allcart as $cart) {
            $order = new order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = 'pending';
            $order->payment_status = 'pending';
            $order->payment_method = $request->payment_method;
            $order->address = $request->address;
            $order->save();
            cart::where('user_id',$user_id)->delete();
        }

        return redirect('/');
        
    }

    //route 
    Route::redirect('orderplace', '/', 301); //get request e 
    route::post('orderplace',[ProductController::class,'orderPlace']);

    //! my order  show in  myorder view,
    *)order view te order join data pass kore oita show koriye dibo,

    function myOrder(){
        $user_id = session()->get('user')['id'];
        
        $order_list =  DB::table('orders')
        ->join('product','orders.product_id','=','product.id')
        ->where('orders.user_id',$user_id)
        ->get();

        return view('myorder',['order_list'=>$order_list]);
    }

    @foreach ($order_list as $item)
    <div class="col-3">
        <div class="single-product-box">
            <div class="p-img">
                <img src="{{ $item->gallery }}" alt="...">
            </div>
            <h2>{{ $item->name }}</h2>
            <h5>{{$item->category}}</h5>
            <p>{{$item->description}}</p>
            <a href="{{asset('detail/'.$item->id)}}">See Details</a>
        </div>
    </div>
    @endforeach


    // search product in laravel 
    // search form e hit korle sei data request er dara 
    // collect kore product databese thkeke find kore show krbo,
    function search(Request $request){
        // return $request->all();

        $search_product_list =  product::where('name','like','%'.$request->input('query').'%')->get();
        
        return view('search',['search_product_list'=>$search_product_list]);
    }
    // function in product controller ,



?>


