@extends('layouts.master')
@section('content')
<div class="container-fluid">

  <div class="row">
  <div class="col-md-6 col-md-offset-3"><h1>{{ $property->address }}</h1></div>
  <div class="col-md-3 col-md-offset-3">

  <img src="/img/{{ $property->id }}.jpeg" class="img-thumbnail">
  </div>
  <div class="col-md-3">

<dl class="dl-horizontal">
    <dt>Address</dt>
    <dd>{{ $property->address }}</dd>
    <dt>Bedrooms</dt>
    <dd>{{ $property->bedrooms }}</dd>
    <dt>Rent</dt>
    <dd>{{ $property->rent }}</dd>
    <dt>Likes</dt>
    <dd>{{ $property->likes }}</dd>
</dl>




          </div>

  </div>
  <div class="row">
  <div class="col-md-3 col-md-offset-3">{{ link_to("/properties", 'Back', ['class' => 'btn btn-default']) }}</div>
  </div>
</div>

@stop
