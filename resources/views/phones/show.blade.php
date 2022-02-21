@extends('layouts.app')

@section('content')
    <div class="container">
        <mgmt-device-info-fetch-component
            urltofetch="https://{{$phone->ipaddress}}/api/v1/mgmt/device/info"
            password="{{$phone->password}}"
            id="{{$phone->id}}"
        >
        </mgmt-device-info-fetch-component>

        <mgmt-device-runningconfig-fetch-component
            urltofetch="https://{{$phone->ipaddress}}/api/v1/mgmt/device/runningConfig"
            password="{{$phone->password}}"
            id="{{$phone->id}}"
        ></mgmt-device-runningconfig-fetch-component>
    </div>
@endsection
