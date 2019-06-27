@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="card-body">
        <h2> Add Product Details</h2>
            <div class="card-body col-md-6">
                <form action="#" method="POST">
                @csrf
                @foreach($properties as $p)
                   <div class="form-group">
                        <label for="exampleFormControlInput1"> {{$p->name}} </label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Product Name">
                                <div class="" style="color:red"> @if($errors->first('name')) {{ $errors->first('name') }} @endif
                            </div>
                    </div>
                  
                 @endforeach

                  <button class="btn btn-primary">Add</button>
                </form>
            </div>

    </div>
    </div>
@endsection