@extends('main')

@section('title', '| Update Post')

@section('content')

    <div class="row">
        {!! Form::model($editPost, array('route' => array('posts.update', $editPost->id), 'method' => 'PUT')) !!}
        <div class="col-xs-7 col-md-7 col-md-offset-1">
            <h1>Edit Post</h1><hr>
            {{Form::label('title', 'Title:')}}
            {{Form::text('title', null, ['class' => 'form-control input-lg'])}}
            {{Form::label('message', 'Post:', ['class' => 'spaceFormTop'])}}
            {{Form::textarea('message', null, ['class' => 'form-control'])}}

        </div>
        <div class="col-xs-5 col-md-4">

            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Create at:</dt>
                    <dd>{{date('D, M jS Y h:ia', strtotime($editPost->created_at))}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{date('D, M jS Y h:ia', strtotime($editPost->updated_at))}}</dd>
                </dl>
                <hr>

                <div class="row">
                    <div class="col-md-6">
                        {{ Form::submit('Save Changes', array('class' => 'btn btn-success btn-block')) }}
                    </div>
                    <div class="col-md-6">
                        {!! Html::linkRoute('posts.show', 'Cancel', array($editPost->id), array('class' => 'btn btn-danger btn-block')) !!}
                    </div>
                </div>
            </div>

        </div>
        {!! Form::close() !!}

    </div><!-- Row end here -->

@stop