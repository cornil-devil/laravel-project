@extends('layouts.app')

@section('content')
<div class="container">
    
<h1>Your orders : </h1>
   @foreach ($order as $item)
       <h3>{{$item->book->title}}</h3>
       <h3>{{$item->book->price}}</h3>
   @endforeach
</div>
@endsection
