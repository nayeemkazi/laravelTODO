@extends('layout.app');

@section('content')
    
    <div class="container justify-content-md-center d-lg-flex">

        
        <div class="card" style="width: 25rem;">
            <div class="card-header alert alert-light">
                <h3>Todo App</h3>
             </div>
             <div class="card-header alert alert-success">
                 <form action="/todos/create" method="post">
                    @csrf
                    <input type="text" class="form-control input-group-lg" name="todo" placeholder="Add Todos">
                 </form>
                 
             </div>
            <ul class="list-group list-group-flush">
            @foreach($todos as $todo)    
                <li class="list-group-item  d-flex justify-content-between">{{$todo->todo}}
                    <div class="inline-block">
                        
                        <a href="/todos/{{$todo->id}}" class="btn btn-danger">x</a>
                        <a href="/todos/update/{{$todo->id}}" class="btn btn-info">u</a>
                    </div>
                </li>
            @endforeach
           
             </ul>
        </div>
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