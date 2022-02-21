@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>

        <h3>My Poly Phones</h3>

        @foreach($phones as $phone)
                <mgmt-device-info-fetch-component
                    urltofetch="https://{{$phone->ipaddress}}/api/v1/mgmt/device/info"
                    password="{{$phone->password}}"
                    id="{{$phone->id}}"
                >
                </mgmt-device-info-fetch-component>
        @endforeach
    </div>

@endsection
