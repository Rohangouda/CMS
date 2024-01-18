<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Mst_Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Session;
use Validator;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function get_category(Request $req)
    {
        $data = $req->all();
        $mst_query = Mst_Category::query();
        $mst_query = Mst_Category::where('page_status',0)->orWhere('page_status',1);
        if(!empty($data['search_text'])){
            $mst_query->where('ser_name','LIKE','%'.$data['search_text'].'%');
        }
        $mst_query->orderBy('id','DESC'); 
        $get_records = $mst_query->paginate($data['perPage']);
        if($get_records != null){
            $pagination = $get_records->links()->render();
            return response()->json(['status' => 200, 'category_list' => $get_records, 'pagination' => $pagination]);
        }else {
            return response()->json(['status' => 500, 'msg' => 'Record not found']);
        }
    }

    public function create_category(Request $req)
    {
      
        // dd(session::get('user_id'));
        // $name = strtolower($req->ser_name);
        // $req->ser_name = ucfirst($name);
        // $req->validate([
        //     'ser_name'=>'required|unique:mst_services'
        // ]);
        $validator = Validator::make($req->all(), [
            'ser_name'=>'required|unique:mst_services'
        ]);
          if($validator->fails()) {
                    // return Redirect::back()->withErrors($validator);
                    return Redirect::back()->with('messagered', $validator->errors());
        }
        $name = strtolower($req->ser_name);
        $ser_name = Str::slug($name, '-');
                $brand_name = new Mst_Category();
                $brand_name->ser_name=$ser_name;
                $brand_name->service_id=$req->service_id;
                $brand_name->tags=$req->tag;
                $brand_name->save();
        
        return redirect()->back()->with('message','Service has been created successfully!');

    }

    public function editCategory(Request $req){
        $id = $req->id;
        $res_json = Mst_Category::where('id',$id)->first();
        if($res_json != null){
            return response()->json(['status' => 200, 'data' => $res_json]);
        }else {
            return response()->json(['status' => 500, 'msg' => 'Record not found']);
        }
    }
    
    public function update(Request $req)
    {
        // $validator = Validator::make($req->all(), [
        //     'ser_name'=>'required|unique:mst_services',
        //     'tags'=>'required'
        // ]);
        //   if($validator->fails()) {
        // return Redirect::back()->withErrors($validator);
        // return redirect()->back()->with(['messagered'=> $validator->errors()]);
        //     // return Redirect::back()->with('messagered', 'Page URL is Already Taken Please Give Different page URL!');
        // }
        $id = $req->id;
        $oldPageName=Mst_Category::where('id',$id)->select('ser_name')->first();
        print_r('old page name = '.$oldPageName->ser_name);
        // print_r('<br/>');
        // print_r('page id ='.$id);
        // print_r('<br/>');
        // print_r('new page name ='.$req->ser_name);
        // print_r('<br/>');
        // print_r('tags ='.$req->tags);
        // print_r("https://betaservices.medfin.in/content/cms-page-uuid-update?oldURL=$oldPageName->ser_name&newURL=$req->ser_name");die;
        $name = strtolower($req->ser_name);
        $ser_name = Str::slug($name, '-');
        $tags=$req->tags;
        if (Mst_Category::find($id)->update([
          'ser_name'=>$ser_name,
          'tags'=>$tags
        ]))
        $response = Http::get("https://services.medfin.in/content/cms-page-uuid-update?oldURL=$oldPageName->ser_name&newURL=$req->ser_name");
        if($response != null)
        {
            return redirect()->back()->with('message', 'Service Name updated successfully!');
        }  
        else{
            return Redirect::back()->with('messagered', 'Service Name updation Failed!');
        } 
        
    }

    // public function delete_record(Request $request)
    // {
    //     if(Mst_Category::where('id', $request->id)->delete()){
    //         return response()->json(['status' => 200, 'msg' => 'Service deleted successfully!']);
    //     }else {     
    //         return response()->json(['status' => 500, 'messagered' => 'Something went wrong, try again after some time']);
    //     }
    // }
    public function clone_services(Request $req){
        $validator = Validator::make($req->all(), [
            'ser_name'=>'required|unique:mst_services'
        ]);
            if($validator->fails()) {
                return Redirect::back()->with('messagered', 'Page URL is Already Taken Please Give Different page URL!');
             }
            //  dd($req);
        $page_id = $req->page_id;
        $name = strtolower($req->ser_name);
        $ser_name = Str::slug($name, '-');
        // dd("https://betaservices.medfin.in/content/clone-cms-page?pageId=$page_id&newPageName=$ser_name");
        $response = Http::get("https://services.medfin.in/content/clone-cms-page?pageId=$page_id&newPageName=$ser_name");
        if($response != null){
            return redirect()->back()->with('message', 'Service Cloned successfully!');
        }else {
            return redirect()->back()->with('messagered',  'Failed , Please try again');
        }

    }
}
