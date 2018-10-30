<!--This conditional statement test if success is in the session. -->

@if(Session::has('success'))

    <div class="alert alert-success alert-role">
        <strong>Success:</strong> {{Session::get('success')}}
    </div>
@endif

<!-- This conditional statement get errors in the session and display them. -->
@if(count($errors) > 0)
    <div class="alert alert-danger alert-role">
        <strong>Error:</strong>
        <ul>
           @foreach($errors->all() as $error)
                <li>{{$error}}</li>
           @endforeach
        </ul>
    </div>
@endif