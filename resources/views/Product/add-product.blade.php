@extends('layouts.app')

@section('content')
 <form action="{{route('storeproduct')}}" method="POST">

    <div class="container">
            <div class="card-body">
        <h2> Add New Product</h2>
            <div class="card-body col-md-6">
                           
                @csrf
                   <div class="form-group">
                        <label for="exampleFormControlInput1"> Product Name * </label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Product Name">
                                <div class="" style="color:red"> @if($errors->first('name')) {{ $errors->first('name') }} @endif
                            </div>
                    </div>
                  
                 

                    <div class="body">
               <label for="image">Properties</label>
               <input type="hidden" name="category_id" value="{{$category_id}}" >
                    @foreach($props as $p)
                       <div class="form-group">
                       <label>{{ $p->name }}</label>
                       <input type="hidden" class="form-control" name="label[]" value="{{ $p->name }}">
                       <input type="text" class="form-control" name="value[]" value="">
                       </div>
                   @endforeach
       </div>
      </div>

    <input type="submit" value="submit"/>
                </form>
            </div>

    </div>
    </div>
@endsection