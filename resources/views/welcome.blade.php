@extends('layouts.master')
@section('content')
    <div style="width:50%" class="container my-3">
        @if (session()->has('success'))
        <div class="alert alert-primary" role="alert">
                {{ Session::get('success') }}
         </div>
        @endif
    <form action="{{url('/done')}}" method="post">
        {{ csrf_field() }}
                <div class="input-group mb-3">
                   <input type="text" class="form-control" placeholder="Add a new todo" name="todobody" aria-label="Recipient's username" aria-describedby="button-addon2">
                     <div class="input-group-append">
                       <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Todo</button>
                     </div>
                </div>
        </form>
        <table class="table">
          <thead>
            <tr>
              <th>Todo</th>
              <th>Options</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
               <td>{{ $item->body }} </td> 
               <td>
               <form action="{{url('/del/'.$item->id)}}" method="post">
                   {{method_field('DELETE') }}
                   {{ csrf_field() }}
                   <a href="{{url('/display/'.$item->id)}}" class="btn btn-warning">Edit</a>  
                   <button type="submit" class="btn btn-danger">Delete</button>
                 </form>
               
               
              </td>  
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
@endsection