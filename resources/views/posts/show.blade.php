@extends('main')

@section('title', '| View Post')

@section('content')

    <div class="row">
        <div class="col-xs-7 col-md-7 col-md-offset-1">
            <h1>Post Created.</h1><hr>
            <p class="lead topics">{{$postShow->title}}</p>
            <div><?php echo $postShow->message ?></div>
            {!! Html::linkRoute('posts.create', 'Create new post', array(), array('class' => 'btn btn-primary')) !!}
        </div>
        <div class="col-xs-5 col-md-4">

            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created at:</dt>
                    <dd>{{date('D, M jS Y h:ia', strtotime($postShow->created_at))}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{date('D, M jS Y h:ia', strtotime($postShow->updated_at))}}</dd>
                </dl>
                <hr>

                <div class="row">
                    <div class="col-md-6">
                        {!! Html::linkRoute('posts.edit', 'Edit', array($postShow->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::open(array('route' => array('posts.destroy', $postShow->id), 'method' => 'delete')) !!}

                        {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-block')) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection