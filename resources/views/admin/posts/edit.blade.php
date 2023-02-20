@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Edit Post

                            <a href="{{ url('admin/posts') }}" class="btn btn-default pull-right">Go Back</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        {!! Form::model($post, ['method' => 'PUT', 'url' => "/admin/posts/{$post->id}", 'class' => 'form-horizontal', 'role' => 'form']) !!}
                            
                            <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                                {!! Form::label('user_id', 'Author', ['class' => 'col-md-2 control-label']) !!}
                            
                                <div class="col-md-8">
                                    {!! Form::select('user_id', $users, null, ['class' => 'form-control', 'required']) !!}
                                    
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                </div>
                            </div>
                            
                            @include('admin.posts._form')

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
