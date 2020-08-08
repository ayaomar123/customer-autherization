@extends('teams.content')

@section('content')
    <header class="d-flex flex-wrap mt-3 mb-5">
        <h1 class="mr-auto">Roles</h1>
        <div>
            <a href="{{route('roles.create')}}"class="btn btn-primary btn-sm ">Create Role</a>
        </div>
        <br>
    </header>
    <table  class="table" width="100px">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>permissions</th>
            <th></th>
        </tr>

        @forelse($roles as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name}} </td>
                <td>
                    @foreach($role->permissions as $value)
                        {{$value}},
                    @endforeach
                </td>
                <td> <a href="{{ route('roles.edit',[$role->id]) }}">Edit </a></td>
                <td> <form class="" action="{{ route('roles.destroy',[$role->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit"class="btn btn-danger" name="button">Delete</button>

                    </form> </td>
            </tr>

        @empty
            <tr colspan="5">
                <td >No Roles Found</td>
            </tr>
        @endforelse
    </table>
@endsection
