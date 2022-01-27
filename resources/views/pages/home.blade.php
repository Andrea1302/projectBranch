<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        @foreach ($employees as $item)
        <div>
            {{$item['name']}} {{$item['surname']}} --> salary : {{$item['salary']}}
        </div> 
        @endforeach
    </div>
</body>
</html>