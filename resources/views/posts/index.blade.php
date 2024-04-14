<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leafy - Laravel Final Project</title>

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
            text-align: center;
        }

        h1{
            color: #ebebeb;
            text-align: center;
            font-size: 44px;
            font-family: "Source Code Pro", "SFMono-Regular", Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }

        h2{
            font-family: "Source Code Pro", "SFMono-Regular", Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }

        h5{
            font-size: 16px;
            font-family: "Source Code Pro", "SFMono-Regular", Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }

        .intro{
            color:ghostwhite;
            margin-top: 10px;
            margin-right: 30px;
            margin-bottom: 50px;
            margin-left: 30px;
            font-family: "Source Code Pro", "SFMono-Regular", Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }

        #create{
            margin-bottom: 50px;
            text-align: center;
            color: #ebebeb;
            background-color: #218BC3;
            padding: 16px;
            text-decoration: none;
            border-radius: 10px;
            font-family: "Source Code Pro", "SFMono-Regular", Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            transition: transform .2s;
        }

        #create:hover{
            background-color: #005cbf;
            transform: scale(1.5);
        }

        .posts{
            text-align: left;
            margin-top: 50px;
            margin-right: 30px;
            margin-bottom: 40px;
            margin-left: 30px;
            padding: 20px;
            background-color: #ebebeb;
            color: black;
            box-shadow: #2d3748;
            border-radius: 20px;
        }

        .buttons{
            display: flex;
        }

        #delete{
            margin-left:8px;
            color: #ebebeb;
            background-color: #83122A;
            padding: 10px;
            font-size: 16px;
            text-decoration: none;
            border: black 2px solid;
            font-family: "Source Code Pro", "SFMono-Regular", Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }

        #delete:hover{
            background-color: #bd2130;
        }

        #edit{
            margin-right:8px;
            color: #ebebeb;
            background-color: #117a8b;
            padding: 10px;
            font-size: 16px;
            text-decoration: none;
            border: black 2px solid;
            font-family: "Source Code Pro", "SFMono-Regular", Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }

        #edit:hover{
            background-color: #0f6674;
        }

        #alert{
            text-align: center;
            color: #2ca02c;
            font-size: 16px;
            position: absolute;
            bottom: 0;
            display: none;

        }
    </style>
</head>
<body>

    <h1>Leafy</h1>
    <p class="intro">A space where you can post your own experiences and share it with everyone.</p>
    <a id="create" href="{{route('post.create')}}">Create your Post</a>

    <div id="alert">
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>

    <div id="post">
        @foreach($posts as $post)
            <div class="posts">
                <h2>{{ $post->name }}</h2>
                <p>{{ $post->description }}</p>
                <hr>
                <h5>Posted on: {{ $post->date }}</h5>
                <br>

                <div class="buttons">
                    <a id="edit" href="{{route('post.edit', ['post' => $post])}}">Edit</a>

                    <form action="{{route('post.destroy', ['post' => $post])}}" method="post">
                        @csrf
                        @method('delete')
                        <input id="delete" type="submit" value="Delete">
                    </form>

                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
