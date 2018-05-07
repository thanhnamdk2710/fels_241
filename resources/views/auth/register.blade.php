@extends('user.layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('lang.register.title')</div>

                <div class="panel-body">
                    {{ Form::open(['route' => 'register', 'method' => 'POST', 'class' => 'form-horizontal']) }}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {{ Form::label('name', trans('lang.register.name'), ['class' => 'col-md-4 control-label']) }}

                        <div class="col-md-6">
                            {{ Form::text('name', '', ['class' => 'form-control', 'id' => 'name', 'required', 'autofocus']) }}

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {{ Form::label('email', trans('lang.register.email'), ['class' => 'col-md-4 control-label']) }}

                        <div class="col-md-6">
                            {{ Form::email('email', '', ['class' => 'form-control', 'id' => 'email', 'required']) }}

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        {{ Form::label('password', trans('lang.register.password'), ['class' => 'col-md-4 control-label']) }}

                        <div class="col-md-6">
                            {{ Form::password('password', ['class' => 'form-control', 'id' => 'password', 'required']) }}

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('password-confirm', trans('lang.register.re_password'), ['class' => 'col-md-4 control-label']) }}

                        <div class="col-md-6">
                            {{ Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password-confirm', 'required']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {{ Form::submit(trans('lang.register.title'), ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
