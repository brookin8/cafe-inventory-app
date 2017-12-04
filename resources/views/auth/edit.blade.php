@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-xs-2">
        </div>
        <div class="col-xs-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col text-left">
                        Edit User
                        </div>
                        <div class="col text-right">
                        <a href="/users">
                            <button type="button" class="btn btn-default">
                                Discard
                            </button>
                        </a>
                        <button type="submit" class="btn btn-primary newitem">
                            Update
                        </button>
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/users/{{$user->id}}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-xs-4 control-label">Name</label>

                            <div class="col-xs-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-xs-4 control-label">E-Mail Address</label>

                            <div class="col-xs-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="accessLevel" class="col-xs-4 control-label">Access Level</label>

                            <div class="col-xs-6">
                                <select class="form-control" id="access_id" name="access_id" required>
                                    @foreach($accesslevels as $accesslevel)
                                        @if($user->access_id === $accesslevel->id)
                                            <option class="form-control" value="{{$accesslevel->id}}" selected>{{$accesslevel->access_level}}</option>
                                        @else
                                            <option class="form-control" value="{{$accesslevel->id}}">{{$accesslevel->access_level}}</option>
                                        @endif
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
                                        @if($user->store_id === $store->id)
                                            <option class="form-control" value="{{$store->id}}" selected>{{$store->name}}</option>
                                        @else
                                            <option class="form-control" value="{{$store->id}}">{{$store->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
