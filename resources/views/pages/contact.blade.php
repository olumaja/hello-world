



   @extends('main')

   @section('title', '| Contact')

   <link media="all" type="text/css" rel="stylesheet" href="css/parsley.css">

   @section('content')

   <script src="js/parsley.min.js"></script>

    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <h1>Contact</h1>
            <hr>
            <form data-parsley-validate>
                <div class="form-group">
                    <label id="lbName">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required maxlength="255" >
                </div>

                <div class="form-group">
                    <label id="lbemail" name="lbemail">email:</label>
                    <input type="text" id="email" name="email" class="form-control" required type="email" data-parsley-type="email" >
                </div>

                <div class="form-group">
                    <label id="lbmessage" name="lbmessage">Message:</label>
                    <textarea id="message" name="message" class="form-control" style="height: 200px" placeholder="Type your message" required ></textarea>
                </div>
                <input type="submit" name="send" value="Send Message" class="btn btn-success">

            </form>
        </div>

        <div class="col-xs-2"></div><!-- empty column -->
    </div>
@endsection
