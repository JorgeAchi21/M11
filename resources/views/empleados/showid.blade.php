@extends ('layouts.plantilla')

@section ('title', 'Index')

@section ('content')
<div class="jumbotron">
    
    <p class="text-center h3">Employee detail:</p>
    <p>id: <span class="text-primary">{{$people->id}}</span></p>
    <p>Name: <span class="bg-secondary text-light"> {{$people->name}}</span></p>
    <p>Surname: <span class="text-success">   {{$people->surname}}</p>
    <p>Date of bird:   {{$people->date_of_bird}}</p>
    <p>Phone number:  {{$people->phone_number}}</p>
    <p>Task:  {{$people->task}}</p>
    <p>Department:  {{$people->department}}</p>
    <p>Aditional info:  {{$people->aditional_info}}</p>
    
</div>
@endsection