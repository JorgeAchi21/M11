@extends ('layouts.plantilla')

@section ('title', 'Index')

@section ('content')

<div class="jumbotron">
  <p class="text-center h2">Find employee by task:</p>

  <form action="{{route('empleados.find')}}" method="GET" class="form-inline">
    @csrf
    
    <div class="form-group mx-sm-3 mb-2">
      <label for="task" >Task: </label>
      <input type="text" class="form-control" id="task" name ="task" placeholder="...">
    </div>

    <button type="submit" class="btn btn-primary mb-2">find...</button>
  </form>

  <p>Searched by: {{$task}}</p>
  <p><a href="{{route('empleados.find')}}" class="btn btn-primary">Clear search</a></p>
  
  </label>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name:</th>
          <th scope="col">Surname:</th>
          <th scope="col">Date of bird:</th>
          <th scope="col">Phone number:</th>
          <th scope="col">Task:</th>
          <th scope="col">Department:</th>
          <th scope="col">Detail:</th>
          <th scope="col">Edit:</th>
          <th scope="col">Delete:</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($people as $item)
          <tr>
            <td class="text-white bg-secondary">
              {{$item->id}}
            </td>
            <td>
              {{$item->name}}
            </td>
            <td>
              {{$item->surname}}
            </td>
            <td>
              {{$item->date_of_bird}}
            </td>
            <td>
              {{$item->phone_number}}
            </td>
            <td>
              {{$item->task}}
            </td>
            <td>
              {{$item->department}}
            </td>

            <td>
              <a href='{{route('empleados.showid', $item->id)}}' class='btn btn-success'>Show</a>
            </td>

            <td>
              <a href='{{route('empleados.editStore', $item->id)}}' class='btn btn-info'>Edit</a>
            </td>

            <td>
              <form method="POST" action="{{route("empleados.destroy", $item->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection