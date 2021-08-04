@php
$link = Request::route()->parameters['link'];
$card = App\Models\Card::where('link', $link)->firstOrFail();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$card->name}}</title>
</head>
<body>

</body>
</html>
