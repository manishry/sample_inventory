@extends('layouts.app')

@section('content')
<div class="container">


 <div class="body-section col-md-12">
     <center>
        <h1>All Categories</h1>
    </cetnte>
    <br>
     <button class="btn btn-primary" style="margin-left:-900px;"><a style="text-aline:right; text-decoration:none; color:#fff;" href="{{route('add')}}"> Add Category </a></button>
          <table class="table" style="margin-top:20px;"> 
             <th>#</th>
             <th>Category Name</th>
             <th>Action</th>
             <tbody>
             <?php $i=1; ?>
             @if($category)
             @foreach($category as $c)
                <tr>
                   <td>{{$i++}}</td>
                   <td>{{$c->name}}</td>
                    <td>
                        <a href="{{url('set/properties/' .$c->id)}}" class="btn btn-sm btn-primary">Set Properties</a>
                        <a href="{{url('edit/category/' .$c->id)}}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{url('del/category/' .$c->id)}}" class="btn btn-sm btn-danger">Del</a>
                   </td>
                </tr>

               @endforeach
               @endif
             </tbody>
          </table>
     </div>
  
</div>    
@endsection