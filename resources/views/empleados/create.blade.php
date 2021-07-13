@extends ('layouts.plantilla')

@section ('title', 'Index')

@section ('content')
<div class="jumbotron">
    
    <p class="text-center h3 text-primary">Create New Employee:</p>
    <small>Info: Ruta envio form por post: {{route('empleados.createStore')}}</small>

    <form action="{{route('empleados.createStore')}}" method="POST">
      @csrf

      <div class="form-group">
        <label for="name">Name: *(min 2, max 50)</label>
        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
        @error('name') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="surname">Surname: *(min 2, max 50)</label>
        <input type="text" class="form-control" id="surname" name="surname" value="{{old('surname')}}">
        @error('surname') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="Date of bird:">Date of bird:  *(fecha valida)</label>
        <input type="date" class="form-control" id="date_of_bird" name="date_of_bird" value="{{old('date_of_bird')}}">

        @error('date_of_bird') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="phone_number:">Phone number: *(9 carac.)</label>
        <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{old('phone_number')}}">
        
        @error('phone_number') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>
      
      <div class="form-group">
        <label for="task:">Task:  *(min 2, max 50)</label>
        <input type="text" class="form-control" id="task" name="task" value="{{old('task')}}">

        @error('task') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="department:">Department:  *(min 2, max 50)</label>
        <input type="text" class="form-control" id="department" name="department" value="{{old('task')}}">

        @error('department') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>
      
      <div class="form-group">
        <label for="info:">Aditional info:  *(min 0, max 100)</label>
        <input type="text" class="form-control" id="info" name="info" value="{{old('info')}}">

        @error('info') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="text-info">Fields with * are mandatory</div>

      <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
