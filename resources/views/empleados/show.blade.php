@extends ('layouts.plantilla')

@section ('title', 'Index')

@section ('content')

<div class="jumbotron">
  <p class="text-center h3">Employee list:</p>
<!--
  <ul>
    @foreach ($people as $item)
      <li>{{$item->name}}</li>
    @endforeach
  </ul>
-->
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