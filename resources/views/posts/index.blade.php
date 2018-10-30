@extends('main')

@section('title', '| All Posts')

@section('content')

       <!-- <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <h1>All Posts</h1>
                <hr>
            </div>
        </div> -->

        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <table class="table">
                    <thead>
                        <th><h1>Latest Gist</h1></th>
                    </thead>
                    <tbody>
                    @foreach($allpost as $mypost)
                        <tr>
                            <td>
                                <h4 class="topics"> {{$mypost->title}}</h4>
                                <?php echo substr($mypost->message, 0, 200);?>
                                 {{ strlen($mypost->message) > 200 ? "..." : "" }}
                                <!-- Sub-row for the button and date. -->
                                <div class="row">
                                    <div class="col-xs-12">
                                            <a href="{{route('posts.show', $mypost->id)}}" class="btn btn-primary btn-sm xs-btn">Read more</a>
                                            <span class="dateText">Created at:{{' '.date('M j, Y', strtotime($mypost->created_at))}}</span>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


<!-- This stop is the same as the endsection in laravel -->
@stop