<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mst_Category;
use App\User;
use App\Product;
use App\ProductHistory;
use App\ContactUsModel;
use App\MasterOrder;
use Illuminate\Support\Facades\Redirect;
use Mockery\Undefined;
use Session;
use App\App_Btn;
use App\ThemeSlider;
use App\Banner;
use App\FAQ;
use App\Overview;
use App\Testimonials;
use App\Treatment_Option;
use App\Causes_symptoms;
use App\Medfin_Advantages;
use App\Doctor;

class PageController extends Controller
{
    public function index()
    {
        $result['page_title'] = 'Medfin';
        return view('pages.landing.index',$result);
    }
    
   
    // public function all_list()
    // {
    //     $result['page_title'] = 'Medfin || Service-list';
    //     return view('pages.landing.all_list', $result);
    // }
    
    public function medfinpage($id)
    {
        $pn=str_replace("-", " ", $id);
        $result['tittle'] = $pn;
        $service_id=Mst_Category::where('ser_name',$id)->select('id')->first();
        $specialisation_id=Mst_Category::where('ser_name',$id)->select('service_id','page_status')->first();
        $result['page_title'] = 'Medfin || Service-list';
        $result['service'] = Mst_Category::where('ser_name',$id)->first();
        $result['banner'] = Banner::where('service_id',$service_id->id)->first();
        $result['overview'] = Overview::where('service_id',$service_id->id)->first();
        $result['btn'] = App_Btn::where('service_id',$service_id->id)->first();
        $result['faq'] = FAQ::where('service_id',$service_id->id)->first();
        $result['advantage'] = Medfin_Advantages::where('service_id',$service_id->id)->first();
        $result['testimonial'] = Testimonials::get();
        $result['treatment'] = Treatment_Option::where('service_id',$service_id->id)->first();
        $result['symptoms'] = Causes_symptoms::where('service_id',$service_id->id)->first();
        $result['doctor_status'] = Doctor::where('service_id',$service_id->id)->first();
        //request url
        $result['source']= Request('utm_source');
         $result['dynamic']=Request('dynamic');
        $result['req_city'] = Request('city');
        $result['whatsapp'] = Request('whatsappText');
        $city = Request('city');
        //doctor
        $url = "https://services.medfin.in/doctor/filter/admin";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        
        $headers = array(
           "Content-Type: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        $data = <<<DATA
         {
              "specialisation": "$specialisation_id->service_id",
              "city": "$city"
        }
        DATA;
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        
        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $resp = curl_exec($curl);
        curl_close($curl);
        $result['doctor'] = json_decode($resp, true); 
        return view('pages.landing.all_list', $result);
    }

    public function admin_panel()
    {
        // $result['page_title'] = 'Admin || Dashboard';
        return view('admin.dashboard');
    }

    public function adminDashboard() {
        $result['page_title'] = 'Admin || Dashboard';
        $result['service'] = Mst_Category::count();
        $result['overview'] = Overview::count();
        $result['banner'] = Banner::count();
        $result['doctor'] = Doctor::where('Deactivate',1)->count();
        $result['faq'] = FAQ::count();
        $result['treatment'] = Treatment_Option::count();
        $result['symptoms'] = Causes_symptoms::count();
        $result['testimonial'] = Testimonials::count();
        $result['archive_page'] = Mst_Category::where('page_status',2)->get();
        $result['user_list'] = User::whereNull('deleted_at')->get();
        $result['page'] = Mst_Category::where('page_status',0)->orWhere('page_status',1)->get();
        return view('admin/dashboard',$result);
    }

    public function content() {
        $result['page_title'] = 'Admin || Add Page';
        $result['service'] = Mst_Category::get();
        return view('admin/content',$result);
    }
    

    public function masterCategory() {
        $result['page_title'] = 'Category-list';
        $result['service'] = Mst_Category::get();
        return view('admin/management/category_list',$result);
    }

    public function enquiriesList() {
        $result['page_title'] = 'Enquiries-list';
        return view('admin/management/enquiry',$result);
    }

    public function profile() {
        if(Session::get('user_role') == "Admin" || Session::get('user_role') == "Staff"){
           $result['page_title'] = 'Medfin || Profile';
           $result['layout'] = 'login_layout';
           return view('admin/management/reset_password',$result);
        }
        else{
            $result['page_title'] = 'Medfin || Profile';
            $result['layout'] = 'home_layout';
            return view('admin/management/reset_password',$result);
        }

    }

    public function bannerList(){
        $result['page_title'] = 'Admin || Banner-list';
        $result['banner'] = Banner::get();
        return view('admin/management/banner_list',$result);
    }

    public function Page_List(){
        $result['page_title'] = 'Admin || All-Pages';
        $result['page'] = Mst_Category::get();
        return view('admin/management/page_list',$result);
    }

    public function testimonials()
    {
        $result['page_title'] = 'Admin || Testimonial-list';
        $result['customer'] = Testimonials::get();
        return view('admin/testimonial_list',$result);
    }    

    public function number()
    {
        $url = "https://services.medfin.in/web/marketing-info?source={$source}&city={$req_city}&service={$service->service_id}&dynamic={$dynamic}";
        // $url = "https://services.medfin.in/web/marketing-info?source=Google&city=Hydrabad&service=56&dynamic=123";
        dd($url);
        // $curl = curl_init($url);
        // curl_setopt($curl, CURLOPT_URL, $url);
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        
        
        // curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        
        // $resp = curl_exec($curl);
        //  $result = json_decode($resp, true);
        // $contact=$result['data']['contact'] ?? '7026200200';
        // curl_close($curl);
    }  

}
