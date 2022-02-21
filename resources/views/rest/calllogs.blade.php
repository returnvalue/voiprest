@extends('layouts.app')

@section('content')
    <div class="container">
        <mgmt-device-info-fetch-component
            urltofetch="https://{{$phone->ipaddress}}/api/v1/mgmt/device/info"
            password="{{$phone->password}}"
            id="{{$phone->id}}"
        >
        </mgmt-device-info-fetch-component>

        <mgmt-calllogs-fetch-component
            urltofetch="https://{{$phone->ipaddress}}/api/v1/mgmt/callLogs"
            password="{{$phone->password}}"
            id="{{$phone->id}}"
        ></mgmt-calllogs-fetch-component>
    </div>
@endsection
