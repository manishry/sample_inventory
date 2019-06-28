@extends('layouts.app')

@section('content')

<div class="container">
            <div class="card-body">
              <button class="btn btn-success" ><a style=" text-decoration:none; color:#fff;" href="view/category"> View Category </a></button>
                 <center><h1 style="font-weight:bold;"> Choose Category</h1> </center>
            
                 @foreach ($categories  as  $category)
               
                    <a href="{{ route('product', ['cid'=>$category->id])}}">
                       <button class="btn btn-info" style="margin-top:30px;"> <h5>{{ $category->name }} </h5> </button>
                    </a>
                @endforeach
            </div>
         </div>
                
                
@endsection