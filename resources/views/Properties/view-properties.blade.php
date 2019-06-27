@extends('layouts.app')

@section('content')
    <div class="container">
            
         <div class="body-section col-md-8">
            <center>
                  <h1>All Properties</h1>
            </cetnte>
        <br>
            <button class="btn btn-primary" style="margin-left:-600px;"><a style="text-decoration:none; color:#fff;" href="add/properties"> Add Properties </a></button>
      
          <table class="table" style="margin-top:10px;"> 
             <th>#</th>
             <th>Properties Name</th>
             <th>Action</th>
             <tbody>
             <?php $i=1; ?>
             @if($properties)
             @foreach($properties as $p)
                <tr>
                   <td>{{$i++}}</td>
                   <td>{{$p->name}}</td>
                    <td>
                   <a href="{{url('properties/edit/' .$p->id)}}" class="btn btn-sm btn-primary">Edit</a>

                     <a href="{{url('properties/del/' .$p->id)}}" class="btn btn-sm btn-danger">Del</a>
                   </td>
                </tr>

               @endforeach
               @endif
             </tbody>
          </table>
     </div>
    
    </div>
@endsection