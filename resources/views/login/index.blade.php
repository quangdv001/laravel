
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Signin Template for Bootstrap</title>

  </head>

  <body>

    <div class="container">
        @if($errors)
            @foreach($errors->all() as $error)
            <p>{!! $error !!}</p>
            @endforeach
        @endif
      <form class="form-signin" action="" method="post">
        {{--<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>--}}
        {{ csrf_field() }}
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="user" name="user" ><br/>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


  </body>
</html>
