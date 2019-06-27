@extends('layouts.app')

@section('content')
    <div class="container">
            
        <div class="body-section col-md-12">

            <button class="btn btn-primary"><a style="text-decoration:none; color:#fff;" href="chooseCategory"> Add Product </a></button>
            <button class="btn btn-primary" style="margin-left:800px;"><a style="text-decoration:none; color:#fff;" href="{{route('properties')}}">  Properties </a></button>
            <button class="btn btn-primary" style="margin-right:-850px;"><a style=" text-decoration:none; color:#fff;" href="view/category"> View Category </a></button>
    
     <center>
            <div style="margin-top:50px;">
                <h1> All Products</h1>
            </div>
    </center>
          <table class="table" style="margin-top:10px;"> 
             <th>#</th>
             <th>Product Name</th>
             <th>Category</th>
             <th>Action</th>
             <tbody>
             @php $id = 1; @endphp
             @if($product)
             @foreach($product as $p)
                <tr>
                   <td>{{ $id++ }}</td>
                   <td>{{ $p->name }}</td>
                   <td>{{ $p->category_id }}</td>
                    <td>

                    <a href="{{route('setproduct')}}" class="btn btn-sm btn-success">Set Product Details</a>
                    <a href="#" class="btn btn-sm btn-info">View Product Details</a>
                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                     <a href="#" class="btn btn-sm btn-danger">Del</a>
                   </td>
                </tr>
             @endforeach
             @endif
               
             </tbody>
          </table>
     </div>
    
    </div>
@endsection