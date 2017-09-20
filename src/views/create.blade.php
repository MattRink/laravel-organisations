
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Organisation Creation</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/app.css">
    </head>

    <body>

        <div class="container col-sm-4 p-3">

            <form class="form-signin" method="POST" action="{{ route('organisation.store') }}">
                {{ csrf_field() }}
                <h2 class="form-signin-heading">Organisation Creation</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group py-3">
                    <label for="name">Organisation Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Organisation Name" value="" required autofocus>
                </div>
                 
                <button class="btn btn-lg btn-primary btn-block" type="submit">Create</button>
            </form>

        </div> <!-- /container -->

        <script src="js/app.js"></script>
    </body>
</html>
