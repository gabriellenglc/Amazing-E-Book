<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__("page.title")}}</title>
    <style>
        body{
            margin: 0%;
        }

        footer{
            background-color: #ADD8E6;
            height: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        .box{
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
        }
    </style>
</head>
<body>
    @include('components.navbar')
    <div class="container-fluid">
        @yield('content')
    </div>
    <footer>
        <div>
            <div>
                <p>&copy; 2301893985 - {{__("page.footer")}}</p>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>