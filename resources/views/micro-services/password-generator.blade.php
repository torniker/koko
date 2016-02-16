@extends('layouts.master')

@section('title', 'Password Generator')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>
                Password Generator
            </h1>
            <p>
                Generate password of your taste
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h3>
                    Generated Password
                </h3>
                <password-generator inline-template>
                <div class="col-xs-2">
                    <input type="number" class="form-control input-lg text-center" v-model="length">
                </div>
                <div class="col-xs-4">
                    <select class="form-control input-lg" v-model="strength">
                        <option value="1">Easy</option>
                        <option value="2">Medium</option>
                        <option value="3">Hard</option>
                        <option value="4">Very Hard</option>
                        <option value="5">Imposible</option>
                    </select>
                </div>
                <div class="col-xs-6">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-lg btn-default" type="button" v-on:click="generateNewPassword">
                                <i class="fa fa-refresh"></i>
                            </button>
                        </span>
                        <input type="text" class="form-control input-lg text-center" v-on:focus="onFocus" value="@{{ generatedPassword }}" readonly>
                        <span class="input-group-btn">
                            <copy-to-clipboard :value="generatedPassword"></copy-to-clipboard>
                        </span>
                    </div>
                </div>
                </password-generator>
            </div>
        </div>
    </div>
@endsection
