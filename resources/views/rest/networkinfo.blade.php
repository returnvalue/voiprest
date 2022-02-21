@extends('layouts.app')

@section('content')
    <div class="container">
        <mgmt-device-info-fetch-component
            urltofetch="https://{{$phone->ipaddress}}/api/v1/mgmt/device/info"
            password="{{$phone->password}}"
            id="{{$phone->id}}"
        >
        </mgmt-device-info-fetch-component>

        <mgmt-device-networkinfo-fetch-component
            urltofetch="https://{{$phone->ipaddress}}/api/v1/mgmt/network/info"
            password="{{$phone->password}}"
            id="{{$phone->id}}"
        ></mgmt-device-networkinfo-fetch-component>
    </div>
@endsection
