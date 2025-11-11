<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\About;
use App\Models\Inquiry;


use App\Models\ClientLogo;
use App\Models\News;
use App\Models\Menu;
use App\Models\Gallery;
use App\Models\Company;
use App\Models\SocialMedias;
use App\Models\Aboutdholar;
use App\Models\DholarCityImag;
use App\Models\Category;
use App\Models\Plot;
use App\Models\ProjectsImage;
use Illuminate\Support\Facades\Http;
use Mail;

class FrontendController extends Controller
{
    public function index(){
        $sliders = Slider::select('image','title','short_description','status','id')->limit(1)->get();
        $homeabouts = About::select('titel','shout_description','about_description','status','id','about_image')->where('onhome','0')->get()->take(1);
        $clientlogos = ClientLogo::select('image','status','id')->get();
        $news = News::select('title','description','status','id','image','long_description')->where('leatest','1')->limit(3)->get();
        $gallerys = Gallery::select('gallery_image','status','id','title')->limit(6)->get();
        $dholeras = DholarCityImag::select('image','status','id')->get();
        $companys = Company::select('company_name','footer_description','email1','address1','contact_no1','contact_no2','company_logo','footer_logo','status','id','scales','vind','ctype')->limit(1)->get();
        $socialmedias = SocialMedias::select('facebook','status','id','twitter','youtube','linkedin','instagram','pinterest')->limit(1)->get();
         $categorys = Category::select('category_name','status','id','category_themnail','menu_id')->get();
            // ✅ Show only categories where menu_id = 2
    $categoryshome = Category::select('category_name', 'status', 'id', 'category_themnail', 'menu_id')
        ->where('menu_id', 1)
        ->get();
        return view('frontend.index',compact('sliders','homeabouts','clientlogos','news','gallerys','companys','socialmedias','dholeras','categorys','categoryshome'));
    }

    public function aboutus(){
        $companys = Company::select('company_name','footer_description','email1','address1','contact_no1','contact_no2','company_logo','footer_logo','status','id','scales','vind','ctype')->limit(1)->get();
        $socialmedias = SocialMedias::select('facebook','status','id','twitter','youtube','linkedin','instagram','pinterest')->limit(1)->get();
        $abouts = About::select('titel','shout_description','about_description','status','id','about_image')->where('onhome','1')->get()->take(1);
        $categorys = Category::select('category_name','status','id')->get();
        return view('frontend.about_us',compact('companys','socialmedias','abouts','categorys'));
    }

    public function dholera(){
        $companys = Company::select('company_name','footer_description','email1','address1','contact_no1','contact_no2','company_logo','footer_logo','status','id','scales','vind','ctype')->limit(1)->get();
        $socialmedias = SocialMedias::select('facebook','status','id','twitter','youtube','linkedin','instagram','pinterest')->limit(1)->get();
        $dholeras = Aboutdholar::select('description','status','id')->get()->take(1);
        $categorys = Category::select('category_name','status','id')->get();
        return view('frontend.dholera',compact('companys','socialmedias','dholeras','categorys'));
    }

    public function gallery(){
        $companys = Company::select('company_name','footer_description','email1','address1','contact_no1','contact_no2','company_logo','footer_logo','status','id','scales','vind','ctype')->limit(1)->get();
        $socialmedias = SocialMedias::select('facebook','status','id','twitter','youtube','linkedin','instagram','pinterest')->limit(1)->get();
        $gallerys = Gallery::select('gallery_image','status','id','title')->get();
        $categorys = Category::select('category_name','status','id')->get();
        return view('frontend.gallery',compact('companys','socialmedias','gallerys','categorys'));
    }

    public function project(){
        $companys = Company::select('company_name','footer_description','email1','address1','contact_no1','contact_no2','company_logo','footer_logo','status','id','scales','vind','ctype')->limit(1)->get();
        $socialmedias = SocialMedias::select('facebook','status','id','twitter','youtube','linkedin','instagram','pinterest')->limit(1)->get();
//   $categorys = Category::select('category_name', 'status', 'id', 'category_themnail', 'menu_id')->get();
 $categorys = Category::select('category_name', 'status', 'id', 'category_themnail', 'menu_id')
        ->orderByRaw("CASE WHEN menu_id = 1 THEN 0 ELSE 2 END") // menu_id=2 will appear first
        ->latest('id') // newest first inside each group
        ->get();

        return view('frontend.project',compact('companys','socialmedias','categorys'));
    }
    public function projectdetails(request $id){
        $companys = Company::select('company_name','footer_description','email1','address1','contact_no1','contact_no2','company_logo','footer_logo','status','id','scales','vind','ctype')->limit(1)->get();
        $socialmedias = SocialMedias::select('facebook','status','id','twitter','youtube','linkedin','instagram','pinterest')->limit(1)->get();
        $categorys = Category::select('category_name','status','id')->get();
        $projects = ProjectsImage::select('category_id','title','status','id','gallery_image','status')->get();
        $categorypage = Category::select('category_name','status','id','category_themnail','category_description','brochure','map_link')->where('id',$id->id)->get();
        return view('frontend.projectdetails',compact('companys','socialmedias','categorys','categorypage','projects'));
    }
    public function dholerainsights(){
        $companys = Company::select('company_name','footer_description','email1','address1','contact_no1','contact_no2','company_logo','footer_logo','status','id','scales','vind','ctype')->limit(1)->get();
        $socialmedias = SocialMedias::select('facebook','status','id','twitter','youtube','linkedin','instagram','pinterest')->limit(1)->get();
        $news = News::select('title','description','status','id','image')->get();
        $categorys = Category::select('category_name','status','id')->get();
        return view('frontend.news',compact('companys','socialmedias','news','categorys'));
    }
    public function newsdetails(request $id){
        $companys = Company::select('company_name','footer_description','email1','address1','contact_no1','contact_no2','company_logo','footer_logo','status','id','scales','vind','ctype')->limit(1)->get();
        $socialmedias = SocialMedias::select('facebook','status','id','twitter','youtube','linkedin','instagram','pinterest')->limit(1)->get();
        $news = News::select('title','image','status','id','description','long_description')->where('id',$id->id)->get();
        $categorys = Category::select('category_name','status','id')->get();
        return view('frontend.newsdetails',compact('companys','socialmedias','news','categorys'));
    }
    public function disclaimer(){
        $companys = Company::select('company_name','footer_description','email1','address1','contact_no1','contact_no2','company_logo','footer_logo','status','id','scales','vind','ctype')->limit(1)->get();
        $socialmedias = SocialMedias::select('facebook','status','id','twitter','youtube','linkedin','instagram','pinterest')->limit(1)->get();
        $categorys = Category::select('category_name','status','id')->get();
        return view('frontend.disclaimer',compact('companys','socialmedias','categorys'));
    }

    public function contactus(){
        $companys = Company::select('company_name','footer_description','email1','email2','address1','address2','contact_no1','contact_no2','contact_no3','company_logo','footer_logo','status','id','scales','vind','ctype')->limit(1)->get();
        $socialmedias = SocialMedias::select('facebook','status','id','twitter','youtube','linkedin','instagram','pinterest')->limit(1)->get();
        $categorys = Category::select('category_name','status','id')->get();
        return view('frontend.contact_us',compact('companys','socialmedias','categorys'));
    }
    public function thankyou(){
        $companys = Company::select('company_name','footer_description','email1','address1','contact_no1','contact_no2','company_logo','footer_logo','status','id','scales','vind','ctype')->limit(1)->get();
        $socialmedias = SocialMedias::select('facebook','status','id','twitter','youtube','linkedin','instagram','pinterest')->limit(1)->get();
        $categorys = Category::select('category_name','status','id')->get();
        return view('frontend.thankyou',compact('companys','socialmedias','categorys'));
    }
    


    
    public function plot(){
        $companys = Company::select('company_name','footer_description','email1','address1','contact_no1','contact_no2','company_logo','footer_logo','status','id','scales','vind','ctype')->limit(1)->get();
        $socialmedias = SocialMedias::select('facebook','status','id','twitter','youtube','linkedin','instagram','pinterest')->limit(1)->get();
        $categorys = Category::select('category_name','status','id')->get();
        $response = Http::get('https://crm.rscrealtydholera.com/plots?companycode=E62D13E9');
    
    //    $jsonData = $response->json();
    //    dd($jsonData);
       $array = json_decode($response->getBody()->getContents(), true);
       $string=(array)$array;
    //    dd($string );
      $plots = Menu::select('id','menu_name','status')->get();
        return view('frontend.plots',compact('companys','socialmedias','categorys','string','plots'));
    }
   

    public function plotstore(Request $request){
        
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'phone_no'=>'required',
            'plot_no'=>'required',
            'plot_area_sqy'=>'required',
            'name'=>'required',
            'name'=>'required',
            'name'=>'required',
         ]);
      $plots= new Plot();
      $plots->name = $request->input('name');
      $plots->email = $request->input('email');
      $plots->phone_no = $request->input('phone_no');
      $plots->plot_no = $request->input('plot_no');
      $plots->plot_area_sqy = $request->input('plot_area_sqy');
      $plots->plot_area_sqf = $request->input('plot_area_sqf');
      $plots->plot_price_sqy = $request->input('plot_price_sqy');
      $plots->plot_price_sqf = $request->input('plot_price_sqf');
      $plots->advance_payment= $request->input('advance_payment');
      $plots->total_payment = $request->input('total_payment');
      $plots->save();
  
       return redirect('thankyou');
   }
   public function nofound(){
    return view('frontend.404');
}

public function store(Request $request)
{
    // dd($request);
    // $this->validate($request,[
    //     'name'=>'required',
    //     'email'=>'required',
    //     'location'=>'required',
    //     'phone'=>'required',
    //     'mes'=>'required',
    //     'captcha'=>'required|same:kcaptcha',
    //  ],[
    //     'name'=> 'Name is required.',
    //     'email'=> 'Email is required.',
    //     'location'=> 'Location is required.',
    //     'phone'=> 'Phone is required.',
    //     'mes'=> 'Message is required.',
    //     'captcha'=>'Validation code not match.',
    // ]
    // );

    
    Inquiry::insert([
        'name' => $request->name,
        'email' => $request->email,
        'location' => $request->location,
        'phone' => $request->phone,
        // 'subject' => $request->subject,
        'mes' => $request->mes,
        // 'category_slug' => strtolower(str_replace(' ', '-',$request->category_name)),
       
    ]);

   $notification = array(
        'message' => 'testimonial Inserted Successfully',
        'alert-type' => 'success'
    );
    
    $contacts=['name'=> $request->input('name'),'email'=> $request->input('email'),'location'=>  $request->input('location'),'phone'=>  $request->input('phone'),'mes'=>  $request->input('mes')];
    $user['to']='dharmendrasinh@indiantradebird.com';
    Mail::send('mail',$contacts,function($messages) use ($user){
        $messages->to($user['to']);
        $messages->subject('Inquiry');
    });

    // $contacts=new Inquiry();
    // $contacts->name=$request->input('name');
    // $contacts->email=$request->input('email');
    // $contacts->location=$request->input('location');
    // $contacts->phone=$request->input('phone');
    // $contacts->subject=$request->input('subject');
    // $contacts->message=$request->input('message');

    // dd($contacts);

    // $contacts->save();
    
    // $contacts=['name'=>$contacts->name = $request->input('name'),'email'=> $contacts->email = $request->input('email'),'location'=> $contacts->location = $request->input('location'),'phone'=> $contacts->phone = $request->input('phone'),'subject'=> $contacts->subject = $request->input('subject')];
    // $user['to']='bhargav.goadsindia@gmail.com';
    // Mail::send('mail',$contacts,function($messages) use ($user){
    //     $messages->to($user['to']);
    //     $messages->subject('Inquiry');
    // });

    return redirect('thankyou.html');

}
}
