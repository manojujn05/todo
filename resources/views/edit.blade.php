@extends('layouts.master')
@section('content')
    @foreach ($data as $item)
    <div class="container my-3" >
     <div class="input-group mb-3">
     <form action="{{url('/up/'.$item->id)}}" method="post">
             {{ csrf_field() }}
             <input type="hidden" name="_method" value="PUT">
         <input value="{{$item->body}}" type="text" class="form-control" placeholder="Add a new todo" name="todobody" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Update</button>
            </div>
         </div>
        </form>
    </div>
     @endforeach     
@endsection