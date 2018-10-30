
@extends('main')

@section('title', '| HOME')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="jumbotron">
                <h1>Welcome To My Blog!</h1>
                <p class="lead">Thank you so much for visiting. This is Nigeria number one blog, where you get the latest gist.</p>
                <p><a class="btn btn-primary btn-default" href="#" role="button">Popular Post</a></p>
            </div>
        </div>
    </div> <!-- End of welcome row -->

    <div class="row">
        <div class="col-xs-6 col-sm-8">

            <div class="post" style="padding-left: 10px;">
                <h3>Pastor Mike and Gloria Bamiloye celebrate 30th wedding anniversary</h3>
                <p>Founders of Mount Zion ministries, Evangelist Mike and Gloria Bamiloye recently celebrated their 30th wedding anniversary at RCCG House on the Rock parish, Grand Prairie Texas....</p>
                <a href="#" class="btn btn-primary">Read more</a>

            <hr>
            <div class="post" style="padding-left: 10px;">
                <h3>Serena Williams celebrate followers</h3>
                <p>Tennis champion, Serena Williams, who surpassed 10 million followers on her Instagram feed on Monday, celebrated the milestone with her one-year-old daughter Alexia Olympia.

                    Sharing an adorable photo of herself and her daughter...</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>

            <hr>
            <div class="post" style="padding-left: 10px;">
                <h3>Serena Williams celebrate followers</h3>
                <p>Tennis champion, Serena Williams, who surpassed 10 million followers on her Instagram feed on Monday, celebrated the milestone with her one-year-old daughter Alexia Olympia.

                    Sharing an adorable photo of herself and her daughter...</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
        </div>
        <div class="col-xs-5  col-xs-offset-1 col-sm-3 col-sm-offset-1">

            <h2>SideBar</h2>
        </div>
    </div>
@endsection