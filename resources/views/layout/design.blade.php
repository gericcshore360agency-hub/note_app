<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Note App</title>

<style>
        body{
            margin:0;
            font-family: Arial, Helvetica, sans-serif;
            background:#f4f6f9;
        }

        header{
            background:#4CAF50;
            color:white;
            padding:15px 30px;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        header h1{
            margin:0;
            font-size:22px;
        }

        nav a{
            color:white;
            text-decoration:none;
            margin-left:20px;
            font-weight:bold;
        }

        nav a:hover{
            text-decoration:underline;
        }

        .container{
            width:80%;
            margin:auto;
            margin-top:30px;
        }
        .home-wrapper{
    height:80vh;
    display:flex;
    justify-content:center;
    align-items:center;
        }

        .start-card{
            width:350px;
            height:350px;
            background:white;
            border-radius:10px;
            box-shadow:0 4px 15px rgba(0,0,0,0.1);
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            text-align:center;
        }

        .start-card h2{
            margin-bottom:20px;
        }

        .start-btn{
            padding:10px 20px;
            border:none;
            border-radius:6px;
            background:#4CAF50;
            color:white;
            font-size:16px;
            cursor:pointer;
        }

        .start-btn:hover{
            background:#45a049;
        }
</style>
</head>

<body>

<header>
    <h1>📝 My Notes</h1>

    <nav>
        <a href="/">Home</a>
        <a href="/notes">All Notes</a>
        <a href="/notes/create">New Note</a>
    </nav>
</header>

<div class="container">
    @yield('content')
</div>

</body>
</html>