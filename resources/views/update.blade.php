@extends('layout.app');

@section('content')
    
    <div class="container justify-content-md-center d-lg-flex">
    <form action="/todos/edit/{{$todo->id}}" method="POST">
            @csrf
            <label for="todo" class="h3">Edit Todo</label>
            <input type="text" value="{{$todo->todo}}" class="form-control input-lg" style="width: 50vw" name="todo">
        </form>
        
        
    </div>


   
@endsection

 {{-- <div class="row mt-5">
                @foreach($todos as $todo)    
                    <div class="col-6 offset-3 d-lg-flex justify-content-center">
                        <div class="h4 bold">
                            {{$todo->todo}}
                            <hr>
                        </div>
                                               
                    </div>
                @endforeach
                
            </div> --}}