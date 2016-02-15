@extends('layouts.master')

@section('title', 'User Info')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>
                <i class="fa fa-server"></i>
                User Info
            </h1>
            <p>
                Know your IP and User Agent. You deserve this.
            </p>
        </div>
    </div>
    <user-info inline-template>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 text-center">
                    <h3>
                        IP Address
                    </h3>
                    <div class="input-group">
                        <input id="ipInput" class="form-control input-lg text-center" value="@{{ ip }}" readonly>
                        <span class="input-group-btn">
                            <copy-to-clipboard :value="ip"></copy-to-clipboard>
                        </span>
                    </div>
                </div>
                <div class="col-xs-12 col-md-8 text-center">
                    <h3>
                        User Agent
                    </h3>
                    <div class="input-group">
                        <input id="userAgentInput" class="form-control input-lg text-center" value="@{{ userAgent }}" readonly>
                        <span class="input-group-btn">
                            <copy-to-clipboard :value="userAgent"></copy-to-clipboard>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </user-info>
@endsection
