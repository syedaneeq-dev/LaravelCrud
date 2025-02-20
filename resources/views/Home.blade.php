<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simple Crud</title>
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
        <h3 style="text-align:center;margin-top:15%;">Select Any Option From Given Below</h3>
        <div style="text-align:center;margin-top: 2%;">
            <button onclick="BlogRecord()" type="button" class="btn btn-primary btn-lg">Blog</button>
            <button onclick="ShowRecord()" type="button" class="btn btn-primary btn-lg">Users</button>
            <button onclick="LoginForm()" type="button" class="btn btn-primary btn-lg">Login</button>
            <button onclick="logout()" type="submitt" class="btn btn-primary btn-lg">Logout</button>

        </div>
   </body>
   <script>
        function ShowRecord()
        {
            window.location.href = "/ShowRecord";
        }
        function BlogRecord()
        {
            window.location.href = "/BlogRecord";
        }
        function LoginForm()
        {
            window.location.href = "/LoginForm";
        }
        function logout()
        {
            window.location.href = "/logout";
        }
   </script>
</html>
