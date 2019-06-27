@extends('layouts.app')

@section('content')

@foreach ($categories  as  $category)
  <div >
  <a href="{{ route('product', ['cid'=>$category->id])}}"  >
     <h5  class="card-title text-center" style="margin-top:20px; font-size:12px;">{{ $category->name }} </h5></a>
     </div>
     </a>
@endforeach
@endsection