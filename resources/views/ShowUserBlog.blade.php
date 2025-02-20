<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog - User Blog</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
   <body>
    <br><br>
    @if(session()->has('user_id') && session()->has('user_email'))
    <h6 style="text-align:right;">Active User: {{ session('user_email') }}</h6>
    @endif
   <br><br><h3 style="text-align:center;">All Blog Details</h3><br>
   <div style="padding-left:20%;margin-right:20%;">
    <br><br>
    @if($blogs->isEmpty())
    <p class="text-center">No blogs found for this user.</p>
    @else
    <h4>Editor: {{$user->fullname}}</h4>
    <h4>Email: {{$user->email}}</h4><br><br>
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $Item)
                <tr>
                    <td>{{$Item->title}}</td>
                    <td>{{$Item->description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
        <br><br>
        <button onclick="Home()" type="button" class="btn btn-primary btn-lg">Back</button>
    </div>
   </body>
   <script>
        function Home()
        {
            window.location.href = "/";
        }
   </script>
</html>
