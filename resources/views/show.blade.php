@extends('layouts.app')

@section('content')
<div class="container">
   

 
        
<h1>{{$book->title}}</h2>
<h2>{{$book->description}}</h2>
<h3>Published by : {{$book->authors}}</h3> 
<h2>{{$book->price}}</h2>    

<h1>Update the book details !</h1>

<form action="{{route('updateBook',$book->id)}}" method="post">
    @csrf
        <input type="text" name = "title" value="{{$book->title}}">
        <input type="text" name = "description" value = "{{$book->description}}">
        <input type="text" name = "authors" value = "{{$book->authors}} ">
        <input type="text" name = "price" value = "{{$book->price}}">
        <input type="submit" value="Submit" >
</form>

</div>
@endsection
