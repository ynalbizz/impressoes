
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
        table, th, td {
            color: rgb(205, 205, 205);
            border: 1px solid;
        }
        table {
        border-collapse: collapse;
        border-color: rgb(205, 205, 205);
        width: 33%;
        }
        button {
        color: black;
        width: 100px;
        height: 20px;
        
        }


</style>
</head>

<body>

    <h1>Lista de impressões</h1>
    <p>Lista:</p>

    <table>
         <tr>
            <th>Id</th>
            <th>Nome</th>
        </tr>
        
        @foreach ($impressoes as $impressao)
        <tr>
        <td>{{$impressao['id']}}</td>
        <td>{{$impressao['nome']}}</td>
        </tr>
        @endforeach
  
    </table> 

</body>

<a href="/criar-impressao">
<button id='button' name='button'>CRIAR</button>
</a>
