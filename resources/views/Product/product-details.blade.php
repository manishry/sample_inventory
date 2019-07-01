
@extends('layouts.app')
@section('content')

<div class="container"> 
    <div class="card-header" style="text-align:center; font-weight:bold; font-size:18px;">Product Details</div>
        <div class="card-body">
            <div class="table">
                <table class="table">
                
                
                    <tbody>
                     @if($productdetails)
                     @foreach($productdetails as $pd)
                        <tr>
                            <td style="font-weight:bold; font-size:16px;">{{$pd->label}}</td>
                            <td>{{$pd->value}}</td>
                        </tr>
                        @endforeach
                        @endif
                        
                    </tbody>
                    
                </table>
            </div>
        </div>
</div>

@endsection