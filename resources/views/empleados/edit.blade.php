@extends ('layouts.plantilla')

@section ('title', 'Index')

@section ('content')

<div class="jumbotron">
  
  <p class="text-center h3 text-primary">Edit an employee:</p>
  <p>Ruta envio form por post: {{route('empleados.editStore', $people->id)}}</p>

  <form action="{{route('empleados.editStore', $people->id)}}" method="POST">
    @csrf
    @method('PUT')

    <p>Employee ID: <span class="text-primary">{{$people->id}}<span></p>

      <div class="form-group">
        <label for="name">Name: *(min 2, max 50)</label>
        <input type="text" class="form-control" id="name" name="name" 
          value="{{old('name', $people->name)}}">

        @error('name') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="surname">Surname: *(min 2, max 50)</label>
        <input type="text" class="form-control" id="surname" name="surname"
          value="{{old('surname', $people->surname)}}">
        
        @error('surname') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="Date of bird:">Date of bird:  *(fecha valida)</label>
        <input type="date" class="form-control" id="date_of_bird" name="date_of_bird"
          value="{{old('date_of_bird', $people->date_of_bird)}}">

        @error('date_of_bird') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="phone_number:">Phone number: *(9 carac.)</label>
        <input type="text" class="form-control" id="phone_number" name="phone_number"
          value="{{old('phone_number', $people->phone_number)}}">
        
        @error('phone_number') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>
      
      <div class="form-group">
        <label for="task:">Task:  *(min 2, max 50)</label>
        <input type="text" class="form-control" id="task" name="task"
          value="{{old('task', $people->task)}}">

        @error('task') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="department:">Department:  *(min 2, max 50)</label>
        <input type="text" class="form-control" id="department" name="department"
          value="{{old('department', $people->department)}}">

        @error('department') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>
      
      <div class="form-group">
        <label for="aditional_info:">Aditional info:  *(min 0, max 100)</label>
        <input type="text" class="form-control" id="aditional_info" name="aditional_info"
          value="{{old('aditional_info', $people->aditional_info)}}">

        @error('aditional_info') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="text-info">Fields with * are mandatory</div>

    <button type="submit" class="btn btn-primary">Save</button>
  </form>

</div>
@endsection
