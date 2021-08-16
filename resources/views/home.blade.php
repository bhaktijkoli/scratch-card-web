<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Chewable</title>
</head>

<body class="home">
    @include('assets.animated')
    <div class="container mx-auto">
        <div class="flex items-center justify-center pt-24 flex-col">
            <h1 class="text-4xl">Congratulations!</h1>
            <p class="mt-2">Here is your Scratch Card</p>
        </div>
        <div class="flex items-center justify-center mt-10 flex-col">
            <div id="card-container" class="bg-white shadow-sm rounded">
                <div id="card-contient">
                    <h1>Hello</h1>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center mt-24 flex-col">
            <p class="mt-2">Scratch the above card by swiping on it</p>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>

</html>
