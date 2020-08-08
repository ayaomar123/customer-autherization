@extends('teams.content')

@section('content')
    <header class="d-flex flex-wrap mt-3 mb-5">
        <h1 class="mr-auto">Create Role</h1>
    </header>

    <div>
        <form action="{{ route('roles.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>

            <div class="form-group">
                <h1 >Permissions</h1>
                <div>
                    @foreach(config('permissions') as $code => $label)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="permissions[]" value="{{$code}}">
                        <label for="">{{$label}}</label>
                    </div>
                    @endforeach
                </div>
            </div>
            <button type="submit" class="btn bg-primary">Create</button>
        </form>
    </div>



@endsection
