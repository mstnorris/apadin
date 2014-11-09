@extends('layouts.master')
@section('content')
<div class="container-fluid">
<h1>All {{ $properties->count() }} Properties</h1>
  <div class="row">
  @foreach($properties as $property)

              <div id="property-{{ $property->id }}" class="col-md-3 prop">
                      <div class="panel panel-default">
                      <div class="panel-heading">{{ link_to("property/$property->id", $property->address) }}</div>

    				 <img src="img/{{ $property->id }}.jpeg" class="img-responsive" alt="Responsive image">

                          <div class="panel-footer">£{{ $property->rent }}pcm <span class="pull-right">{{ $property->bedrooms }}&nbsp;<i class="fa fa-user"></i>&nbsp;{{ $property->likes }}&nbsp;<i class="fa fa-heart"></i><i class="fa fa-trash-o"></i></span></div>
                      </div>
                  </div>


          @endforeach

  </div>
</div>

@stop
