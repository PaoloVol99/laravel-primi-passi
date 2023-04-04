<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-family: sans-serif
        }

        body {
            background-color: orange;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            max-width: 900px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
            background-color: #c98d26;
            padding: 40px;
            border-radius: 15px;
        }

        h1 {
            font-size: 70px;
            margin-bottom: 30px;
            color: green;
        }
        
        p {
            font-size: 42px;
        }

        span {
            color: purple;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Home</h1>
        <h2>Salve, questa è la mia <span>bellissima</span> home</h2>
    </div>
</body>
</html>