@extends('layouts.app')

@section('content')
<div class="container">
    

    @foreach ($book as $item)
    
    <a href="{{route('show',$item->id)}}">
        <p>{{$item->title}}</p>
    </a>
      
    <a href="{{route('order',$item->id)}}">
        <button>Order</button>
    </a>
   @endforeach





   <h2>Add new book</h2>

   <form action="{{route('addBook')}}" method="post">
        @csrf
            <input type="text" name = "title" placeholder="Title">
            <input type="text" name = "description" placeholder = "Description">
            <input type="text" name = "authors" placeholder = "Author ">
            <input type="text" name = "price" placeholder = "Price">
            <input type="submit" value="Submit" >
   </form>
</div>
@endsection
