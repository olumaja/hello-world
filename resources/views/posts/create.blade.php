@extends('main')

@section('title', '| Create New Post')

@section('stylesheet')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection

@section('content')

    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <h1>Create New Post</h1>
            <hr>

            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
              {{Form::label('title', 'Title:')}}
              {{Form::text('title', null, array('class'=>'form-control', 'required' => '', 'maxlength' => '255'))}}

              {{Form::label('message', 'Post Message:')}}
              {{Form::textarea('message', null, array('class'=>'form-control', 'required' => ''))}}
              {{Form::submit('Create Post', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top: 10px;'))}}
            {!! Form::close() !!}
        </div>
        <div class="col-xs-3">

        </div>

    </div>
@endsection