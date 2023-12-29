
<head>
    <style>

        body {
            background-color: rgb(25, 30, 34);
        }

        h1 {
            color: rgb(205, 205, 205);
            margin-left: 40px;
        }
        h4,p {
            color: rgb(205, 205, 205);
            margin-left: 20px;
        }

</style>
</head>

<body>

    <h1>Lista de impressões</h1>
    <p>Lista:</p>

    @foreach ($impressoes as $impressao)
        <h4> {{$impressao}} </h4>
    @endforeach

</body>

