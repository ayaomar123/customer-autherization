@extends('teams.content')
@section('content')
    <h1>Customers</h1>
    @if (count($errors) > 0)
        <div class = "alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="" action="{{route('store')}}" method="post">
        {{--<!--    --><?php=// csrf_token() ?>--}}
        <input type="hidden" name="_token" value=" {{csrf_token()}} ">
        <div class="form-group">
            <label for="name">Name</label>

            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label for="image">Choose Image</label>
            <input id="image" type="file" name="image">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email"class="form-control" id="email" aria-describedby="emailHelp" value="{{old('email')}}">
        </div>
        <div class="form-group">
            <label for="name">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone" aria-describedby="emailHelp"  value="{{old('phone')}}">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password"name="password" class="form-control" id="password" value="{{old('password')}}">
        </div>
        <div class="form-group">
            <label for="password">Confirm Password</label>
            <input type="password"name="confpassword" class="form-control" id="conf-password" value="{{old('confpassword')}}">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
