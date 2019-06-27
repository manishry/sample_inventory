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
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Del</a>
                   </td>
                </tr>

               @endforeach
               @endif
             </tbody>
          </table>
     </div>
   <!-- <div class="card-body">
        <h2> Choose Categories</h2>
            <div class="card-body">
                <form>
                 <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect2">Select Categories * </label>
                            <select multiple class="form-control" id="exampleFormControlSelect2">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                        </select>
                    </div>
                  <div class="col-md-6">
                  <label for="exampleFormControlSelect2">Select Properties *</label><br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">1 </label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">5</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">6</label>
                    </div>
                   </div> <br>

                  <button class="btn btn-primary">Add</button>
                </form>
            </div>

    </div> --> 
</div>    
@endsection