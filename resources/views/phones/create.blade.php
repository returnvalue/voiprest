@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add A Phone</h1>
        <form method="post" action="{{ route('phones.store') }}">
            @csrf
            <div class="form-group">
                <label for="phoneip">IP address</label>
                <input name="ipaddress"
                       type="text"
                       class="form-control @if($errors->has('ipaddress')) is-invalid @endif" id="phoneip"
                       placeholder="Enter IP address of phone"
                       value="{{ old('ipaddress') }}"
                >
                <small id="ipHelp" class="form-text text-muted">Enter the IP address of a Poly phone.</small>
            </div>
            <div class="form-group">
                <label for="phonepass">Password</label>
                <input name="password"
                       type="text"
                       class="form-control @if($errors->has('password')) is-invalid @endif"
                       id="phonepass"
                       placeholder="Admin Password"
                       value="{{ old('password') }}"
                >
                <small id="passwordHelp" class="form-text text-muted">Enter admin password here.</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
