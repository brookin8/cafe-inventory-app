@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-xs-2">
        </div>
        <div class="col-xs-8">
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col">
                        Register New User
                        </div>
                        <div class="col text-right">
                             <a href="/users">
                                <button type="button" class="btn btn-default">
                                    Discard
                                </button>
                            </a>
                            <button type="submit" class="btn btn-primary newitem">
                                Register
                            </button>
                        </div>
                    </div>
                 </div>
                <div class="panel-body">
                    
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-xs-4 control-label">Name</label>

                            <div class="col-xs-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-xs-4 control-label">E-Mail Address</label>

                            <div class="col-xs-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-xs-4 control-label">Password</label>

                            <div class="col-xs-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-xs-4 control-label">Confirm Password</label>

                            <div class="col-xs-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="accessLevel" class="col-xs-4 control-label">Access Level</label>

                            <div class="col-xs-6">
                                <select class="form-control" id="access_id" name="access_id" required>
                                    <option value="" disabled selected>Select Access</option>
                                    @foreach($accesslevels as $accesslevel)
                                        <option class="form-control" value="{{$accesslevel->id}}">{{$accesslevel->access_level}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="store_id" class="col-xs-4 control-label">Store</label>
                            <div class="col-xs-6">
                                 <select class="form-control" id="store_id" name="store_id" required>
                                 <option value="" disabled selected>Select Store</option>
                                    @foreach($stores as $store)
                                        <option class="form-control" value="{{$store->id}}">{{$store->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
