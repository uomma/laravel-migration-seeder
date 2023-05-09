
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <h1>Template Classe 89</h1>
        <ul>
            @foreach ($trains as $train)
            <li>
                {{$train->code_train}} - {{$train->from_time}} -{{$train->to_time}}

            </li>
                
            @endforeach
        </ul>
    </div>
</body>
</html>

   

