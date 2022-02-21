@extends('layouts.app')

@section('content')
    <div class="container">
        <mgmt-device-info-fetch-component
            urltofetch="https://{{$phone->ipaddress}}/api/v1/mgmt/device/info"
            password="{{$phone->password}}"
            id="{{$phone->id}}"
        >
        </mgmt-device-info-fetch-component>

        <mgmt-device-networkstats-fetch-component
            urltofetch="https://{{$phone->ipaddress}}/api/v1/mgmt/network/stats"
            password="{{$phone->password}}"
            id="{{$phone->id}}"
        ></mgmt-device-networkstats-fetch-component>
    </div>
@endsection
