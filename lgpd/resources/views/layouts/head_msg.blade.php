<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Fonte Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> 

    <style>
        * {
            margin: 0;
            padding: 0;
        }
        div {
            size: content;
            margin-left: auto;
            margin-right: auto;
            margin-top: 30vh;
            margin-bottom: 40vh;
            text-align: center;
            text-shadow: rgb(185, 185, 185) 2px 2px;
        }
        p {
            font-size: larger;
            font-family: 'Roboto', sans-serif;
            text-shadow: rgb(185, 185, 185) 1px 1px;
        }
    </style>

</head>
<body>

    @yield('msg')

    <script src="js/backForm.js"></script>

</body>
</html>