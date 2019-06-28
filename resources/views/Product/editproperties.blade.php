@extends('layouts.app')

@section('content')
 
    <div class="container">
    <div class="row">
        <div class="card-body">
           <form action="{{route('storeproduct')}}" method="POST">        
                @csrf
             <h1 style="font-weight:bold;"> Add New Product</h1>
             <div class="col-md-6">
                <div class="card-body">
                  
                   <div class="form-group">
                        <label for="exampleFormControlInput1"> Product Name * </label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Product Name">
                                <div class="" style="color:red"> @if($errors->first('name')) {{ $errors->first('name') }} @endif
                            </div>
                    </div>
                    </div> 
            </div>
            
            <div class="col-md-3">
               <h2 style="font-weight:bold;">Properties</h2>
               <input type="hidden" name="category_id" value="{{$category_id}}" >
                    @foreach($props as $p)
                       <div class="form-group">
                       <label>{{ $p->name }}</label>
                       <input type="hidden" class="form-control" name="label[]" value="{{ $p->name }}">
                       <input type="text" class="form-control" name="value[]" value="">
                       </div>
                   @endforeach
           </div>
      
               <input type="submit" value="submit"/>
            </form> 
        </div>
    </div>
</div>
    
@endsection