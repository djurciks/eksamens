@extends('layouts.master')

@section('title')
	Larvel shoping cart
@endsection

@section('content')
	@foreach($products->chunk(1) as $productChunk)
		<div class="row">
			@foreach($productChunk as $product)
			<div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="{{$product->imagePath}}"  class="img-responsive">
		      <div class="caption">
		        <h3>{{$product->title}}</h3>
		        <p class="descripion">{{$product->description}}</p>
		        <div class="clearfix">
		        	<div class="pull-left price">${{$product->price}}</div>
		        	<a href="#" class="btn btn-success pull-right" role="button">Add to cart</a>
		        </div>
		      </div>
		    </div>
			@endforeach
		  
		  </div>
	@endforeach

@endsection
