<?php

namespace App\Http\Controllers;

use DB;

use App\Product;
use App\Category;
use App\Properties;
use App\ProductProperties;
use Illuminate\Http\Request;
use App\CategoriesProperties;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
  protected $cat;
   protected $properties;
   protected $categories_properties;
   protected $products;
  

    public function __construct(Properties $Properties, Product $products, CategoriesProperties $categories_properties, Category $cat)
    {
      
        $this->properties = $Properties;
        $this->products = $products;
        $this->categories_properties = $categories_properties;
        $this->categories = $cat;
       
      
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
      $product = DB::table("products as p")->select("p.*","c.name as categories")
      ->join('categories as c', 'p.category_id', '=', 'c.id')
      ->get();
      
      
        return view('Product.product', compact('product'));
    }


    public function ChooseCategory(){

      $categories= Category::all();
       return view('Product.chooseCategory', compact('categories'));

      
    }


    // add product 

   public function addproduct(Request $request) {

    
     $category = Category::all();
     $category_id = $request->cid;
     $form = 'create';
     $props = CategoriesProperties::join('properties as p', 'p.id', '=', 'categories_properties.property_id')
     ->where('category_id', $request->cid)
     ->get();
     return view('Product.add-product', compact('form', 'category_id', 'props','category'));
   }

  public function create(Request $request)
   {
      $category_id = $request->cid;
       $form = 'create';
       $props = CategoriesProperties::join('properties as p', 'p.id', '=', 'categories_properties.property_id')
       ->where('category_id', $request->cid)
       ->get();
       return view("Products::create", compact('form', 'category_id', 'props'));
   }
  
public function storeproduct(Request $request)
   {
    $validator = Validator::make($request->all(), [
      'name'=> 'required',
      
    ]);
 
    if($validator->fails()){
    
      return back()->withErrors($validator)->withInput();
    }
      
       $name = $request->input('name');
      
       $product = new Product;

       $data = $request->except('_token','label','value');

      
       if ($p = $this->products->create($data)) {

           $ar = [];
         
           $labels = $request->label;
           $values =  $request->value;
           $pid = $p->id;

  
           for($i=0; $i < count($labels); $i++){
               array_push($ar, ['product_id'=>$pid, 'label'=> $labels[$i], 'value'=>$values[$i]]);

           }
           DB::table('products_properties')->insert($ar);
           return redirect('/');
       } else {
           $request->session()->flash('message', 'failed');
           return view("Products::create");
       }
   }

   // edit product

   public function editproduct($id) {
    $pp =ProductProperties::find($id);
  
    if(isset($pp)){
      return view('Properties.editproperties', compact('pp'));
      }
   }

   // update product 

   public function updateproduct(Request $request , $id) {

   }

   // delete product 

   public function deleteproduct($id) {
              
   }

 // Set the product details 
 
  public function viewproduct($id) {
    
    $productdetails = ProductProperties::whereProductId($id)->get();
    
    return view ('Product.product-details', compact('productdetails'));
    
  }

    // add properties 

    public function addproperties() {

        return view('Properties.properties');
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
  
   $create = $this->properties->create($data);
   if($create) {
    
        return redirect('properties');
    }
  } 

  // view all the properties

  public function viewproperties() {
   $properties = Properties::all();
   
   return view('Properties.view-properties', compact('properties'));
  }

  // edit the properties

  public function edit($id){
    $properties =Properties::find($id);
    if(isset($properties)){
      return view('Properties.editproperties', compact('properties'));
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
     
      return Redirect('properties');
    }
  }

  
  // delete the properties

  public function destroy($id) {
    $data = $this->properties->find($id);
   

    if(isset($data)){
        
        $destroy = $data->destroy($id);
        if($destroy) {
           
          return redirect('properties');
        }
      }
  }

// add new category form

 public function addcategory() {
  return view('Category.view-category');
} 

 //store category 

 public function storecategory(Request $request) {
        
  $validator = Validator::make($request->all(), [
    'name'=> 'required',
    
  ]);

  if($validator->fails()){
  
    return back()->withErrors($validator)->withInput();
  }

  $data = $request->only('name');
 
  $create = Category::create($data);

  if($create) {
    
       return redirect('view/category');
   }
 }

 //edit category 

 public function editcategory($id) {
  $category =Category::find($id);
  //dd($category);
  if(isset($category)){
    return view('Category.editcategory', compact('category'));
    }
 }

 // update category

 public function updatecategory(Request $request, $id) {
  $validator = Validator::make($request->all(), [
    'name'=> 'required',
  ]);

  if($validator->fails()){
  
    return back()->withErrors($validator)->withInput();
  }

  $data = $request->only(['name']);
  $find = $this->categories->find($request->id);

  $create = $find->update($data);
  if($create){
   
    return Redirect('view/category');
  }
 }


 // delete category

 public function deletecategory($id) {
  $data = $this->categories->find($id);
   

  if(isset($data)){
      
      $destroy = $data->destroy($id);
      if($destroy) {
         
        return redirect('view/category');
      }
    }
 }
 // view category name 

 public function viewcategory() {
    $category = Category::all();
   // dd($category);
  return view('Category.categories', compact('category'));
 }

 // Add Properties details 

 
 public function setproperties(Request $request, $id) {
   
  $properties = Properties::all();
  $old_props = CategoriesProperties::where('category_id',  $id)->get();
  $props = [];
  foreach($old_props as $p){
    array_push($props, $p->property_id);
  }
  
    return view('Properties.setproperties', compact('properties', 'id', 'props'));
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
      return Redirect ('view/category');
       
      
 }

 

}
