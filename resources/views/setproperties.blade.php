@extends('layouts.app')

@section('content')
<div class="container">
   <div class="card-body">
        <h2> Choose Properties</h2>
            <div class="card-body">
                

                 <form action="{{url('add/properties/details')}}" method="POST">

                 @csrf
                 <input type="hidden" name="cat_id" value="{{ $id }}" />
                  <div class="col-md-12">
                  <label for="exampleFormControlSelect2">Select Properties *</label><br>
                  <div class="form-check form-check-inline">
                  @if($properties)
                
                  @foreach($properties as $p)
                    <input class="form-check-input" name="properties_id[]" value="{{$p->id}}" type="checkbox" id="inlineCheckbox1" {{ (in_array($p->id, $props))?"checked":'' }} >
                        <label class="form-check-label" for="inlineCheckbox1" style="font-size:18px; line-height:2rem;"> {{$p->name}} </label>
                      
                        @endforeach
                        @endif
                    </div>
                    <br><br>
                
                  
                   <button class="btn btn-primary" type="submit">Get Values</button>
                </form>
            </div>

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