@extends('layouts.master')

@section('title', 'User Info')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>
                Date Converter
            </h1>
            <p>
                Convert date from any format to mysql datetime format and get the timestamp as a bonus.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <label for="dateInput" class="h5">
                    Convert Date from Any Format or Timestamp
                </label>
                <date-converter inline-template>
                <form v-on:submit="onSubmit($event)" action="">
                    <div class="input-group">
                        <input class="form-control input-lg text-center" v-model="date">
                        <span class="input-group-btn">
                            <button class="btn btn-lg btn-default" type="submit">
                                <i class="fa fa-caret-right"></i>
                            </button>
                        </span>
                        <input class="form-control input-lg text-center" on-focus="onFocus" v-model="timestamp">
                        <span class="input-group-btn">
                            <copy-to-clipboard :value="timestamp"></copy-to-clipboard>
                        </span>
                        <input class="form-control input-lg text-center" on-focus="onFocus" :value="calculatedDate" readonly>
                        <span class="input-group-btn">
                            <copy-to-clipboard :value="calculatedDate"></copy-to-clipboard>
                        </span>
                    </div>
                </form>
                </date-converter>
            </div>
        </div>
    </div>
@endsection
