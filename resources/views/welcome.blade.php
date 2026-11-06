<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<head>

<body>
    <h1>ini adalah welcome</h1>
    <a href="/dashboard">dashboard</a>
    <a href="/tentang">tentang</a>
    <a href="/candra">candra</a>


    @extends('masterlayout')
    @section('content')
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus voluptatum laborum iste quo in, unde aliquam
        inventore ipsum tempore iusto sint? Nobis aut, quam fugiat eligendi hic ipsa aperiam perspiciatis.
        <x-ui.card></x-ui.card>
        <x-ui.button>Button</x-ui.button>
        <x-ui.button variant="danger">wowo 2 periode</x-ui.button><br>
        <x-ui.button variant="warning">jokowi comeback</x-ui.button><br>

        <x-ui.button variant="success">gibran gakure</x-ui.button><br>



        <br>
    @endsection

</body>


</head>

<body>

</body>


</html>
