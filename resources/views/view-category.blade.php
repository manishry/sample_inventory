@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="card-body">
        <h2> Add New Category</h2>
            <div class="card-body col-md-6">
                <form action="{{route('store')}}" method="POST">
                @csrf
                   <div class="form-group">
                        <label for="exampleFormControlInput1"> Category Name * </label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Properties Name">
                                <div class="" style="color:red"> @if($errors->first('name')) {{ $errors->first('name') }} @endif
                            </div>
                    </div>
                  

                  <button class="btn btn-primary">Add</button>
                </form>
            </div>

    </div>
    </div>
@endsection