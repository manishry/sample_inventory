@extends('layouts.app')

@section('content')
<div class="container">
 <button class="btn btn-success" ><a style="text-decoration:none; color:#fff;" href="{{route('properties')}}"> View Properties </a></button>
   <div class="card-header">
        <h2 style="font-weight:bold;"> Choose Properties</h2>
           
                 <form action="{{url('add/properties/details')}}" method="POST">

                 @csrf
                 <input type="hidden" name="cat_id" value="{{ $id }}" />
                  <div class="col-md-12">
                  <label for="exampleFormControlSelect2"><b>Select Properties *<b></label><br>
                  <div class="form-check form-check-inline">
                  @if($properties)
                  @foreach($properties as $p)
                  <div col-md-12>
                    <input style="margin-left: 18px; font-size:18px;" class="form-check-input" name="properties_id[]" value="{{$p->id}}" type="checkbox" id="inlineCheckbox1" {{ (in_array($p->id, $props))?"checked":'' }} >
                        <label class="form-check-label" for="inlineCheckbox1" style="font-size:18px; line-height:2rem;"> {{$p->name}} </label>
                      
                        @endforeach
                        @endif
                      </div>
                    </div>
                    </div>
                    <br><br>
                
                  
                   <button class="btn btn-primary" type="submit">Set Properties</button>
                </form>
            

    </div> 
</div>   




<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    {{-- $(document).ready(function() {
        $("button").click(function(){
            var favorite = [];
            $.each($("input[name='properties_id']:checked"), function(){            
                favorite.push($(this).val());
            });
            alert("You have selected these properties: " + favorite.join(", "));
        });
    }); --}}
</script>




@endsection