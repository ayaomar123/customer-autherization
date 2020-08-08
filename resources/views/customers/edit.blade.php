@extends('teams.content')
@section('content')
    <h1>Customers</h1>
    <form class="" action="{{route('update',[$customer->id])}}" method="post">
        {{--<!--    --><?php=// csrf_token() ?>--}}
        <input type="hidden" name="_token" value=" {{csrf_token()}} ">
        <input type="hidden" name="_method" value="put">
        <div class="form-group">
            <label for="name">Name</label>

            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp"value="{{ $customer->name }}">
        </div>
        <div class="form-group">
            <label for="image">Choose Image</label>
            <input id="image" type="file" name="image">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email"class="form-control" id="email" aria-describedby="emailHelp"value="{{ $customer->email }}">
        </div>
        <div class="form-group">
            <label for="name">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone" aria-describedby="emailHelp"value="{{ $customer->phone }}" >
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password"name="password" class="form-control" id="password"value=" {{$customer->password }}">
        </div>
        <div class="form-group">
            <label for="password">Confirm Password</label>
            <input type="password"name="confpassword" class="form-control" id="conf-password"value=" {{$customer->confpassword }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
