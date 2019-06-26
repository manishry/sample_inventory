<?php

namespace App\Http\Controllers;

use DB;
//use App\Categories;
use App\Category;
use App\Properties;
use Illuminate\Http\Request;
use App\CategoriesProperties;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
   protected $properties;
   protected $categories_properties;
   protected $category;

    public function __construct(
            Properties $Properties ,
            CategoriesProperties $categories_properties,
            Category $category
          )
    {
        $this->Properties = $Properties;
        $this->$categories_properties = $categories_properties;
        $this->$category = $category;
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }


    // add product 

    // add properties 

    public function addproperties() {

        return view('properties');
    }

    //store properties 

    public function storeproperties(Request $request) {
        
   $validator = Validator::make($request->all(), [
     'name'=> 'required',
     
   ]);

   if($validator->fails()){
   
     return back()->withErrors($validator)->withInput();
   }

   $data = $request->only(['name']);
   //dd($request->all());
  
   $create = $this->Properties->create($data);
   if($create) {
    
        return redirect('/');
    }
  } 

  // view all the properties

  public function viewproperties() {
   $properties = Properties::all();
   
   return view('index', compact('properties'));
  }

  // edit the properties

  public function edit($id){
    //dd($id);
    $properties =Properties::find($id);
    
    
    if(isset($properties)){
      return view('editproperties', compact('properties'));
      }
  }

  // update the properties 

  public function update(Request $request, $id){
    $validator = Validator::make($request->all(), [
      'name'=> 'required',
    ]);
 
    if($validator->fails()){
    
      return back()->withErrors($validator)->withInput();
    }

    $data = $request->only(['name']);
    $find = $this->properties->find($request->id);

    $create = $find->update($data);
    if($create){
     
      return Redirect('/');
    }
  }

  
  // delete the properties

  public function destroy($id) {
    $data = $this->Properties->find($id);
   

    if(isset($data)){
        
        $destroy = $data->destroy($id);
        if($destroy) {
           
          return Redirect('/');
        }
      }
  }

// add new category form

 public function addcategory() {
  return view('view-category');
} 

 //store category 

 public function storecategory(Request $request) {
        
  $validator = Validator::make($request->all(), [
    'name'=> 'required',
    
  ]);

  if($validator->fails()){
  
    return back()->withErrors($validator)->withInput();
  }

  $data = $request->only(['name']);
 // dd($request->all());
  $create = $this->category->create($data);

  if($create) {
   
       return redirect('viewcategory');
   }
 }

 // view category name 

 public function viewcategory() {
    $category = Category::all();
   // dd($category);
  return view('categories', compact('category'));
 }

 // Add Properties details 

 
 public function setproperties(Request $request, $id) {
   
  $properties = Properties::all();
  $old_props = CategoriesProperties::where('category_id',  $id)->get();
  $props = [];
  foreach($old_props as $p){
    array_push($props, $p->property_id);
  }
  
    return view('setproperties', compact('properties', 'id', 'props'));
}



 public function addpropertiesdetails(Request $request) {
  
    $validator = Validator::make($request->all(),
    [
      'cat_id'=>'required',
    ]);

    if($validator->fails()){
      return back()->withErrors($validator->errors())->withInput();
    }

      $data = $request->only(['properties_id']);

      if( CategoriesProperties::where('category_id',  $request->cat_id)->count() > 0){
        $sql = "delete from categories_properties where category_id=".$request->cat_id;
        DB::delete($sql);
      }
      
      
      $ar = [];
      
      foreach($data['properties_id'] as $d){
       
        array_push($ar, ['category_id'=>$request->cat_id, 'property_id'=> $d]);
        
      }
      
      if(CategoriesProperties::insert($ar)){
        Session::flash("message", "process success");
      }else{
        Session::flash("message", "process failed");
      }
      return redirect()->back();
       
      
 }

 

}
