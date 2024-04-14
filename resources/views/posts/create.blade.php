<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>

<style>
    body{
        background-color:black;
        background-image:
            radial-gradient(white, rgba(255,255,255,.2) 2px, transparent 40px),
            radial-gradient(white, rgba(255,255,255,.15) 1px, transparent 30px),
            radial-gradient(white, rgba(255,255,255,.1) 2px, transparent 40px),
            radial-gradient(rgba(255,255,255,.4), rgba(255,255,255,.1) 2px, transparent 30px);
        background-size: 550px 550px, 350px 350px, 250px 250px, 150px 150px;
        background-position: 0 0, 40px 60px, 130px 270px, 70px 100px;
        color:white;
        text-align: center;
    }

    h1{
        margin-top: 50px;
        color: #ebebeb;
        text-align: center;
        font-size: 30px;
        font-family: "Source Code Pro", "SFMono-Regular", Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    }

    form div{
        padding: 10px;
        font-size: 20px;
        font-family: "Source Code Pro", "SFMono-Regular", Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    }

    input{
        padding: 6px;
    }

    .submit{
        border-radius: 10px;
        padding: 12px;
        background-color: #7ec699;
        font-family: "Source Code Pro", "SFMono-Regular", Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    }

    .submit:hover{
        background-color: #20c997;
    }

</style>
<body>
    <h1>Create a post!</h1>

    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form method="post" action="{{ route('post.store') }}">
        @csrf
        @method('post')

        <div>
            <label>Name: </label>
            <input type="text" name="name" placeholder="Name">
        </div>

        <div>
            <label>Description: </label>
            <input type="text" name="description" placeholder="Description">
        </div>

        <div>
            <label>Date: </label>
            <input type="date" name="date" placeholder="Date">
        </div>

        <div>
            <input class="submit" type="submit" value="Create Post">
        </div>
    </form>
</body>
</html>
