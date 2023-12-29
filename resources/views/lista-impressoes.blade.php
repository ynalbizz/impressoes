
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
        table {
        width: 33%;
        border-collapse: collapse;
        background-color: #333; /* Cor de fundo escura */
        color: #fff; /* Cor do texto branca */
        }
        td, th {
        border: 1px solid #555; /* Borda com cor mais clara */
        padding: 8px;
        text-align: left;
        }
        th {
        background-color: #555; /* Cor de fundo mais escura para o cabeçalho */
        }
        tr:nth-child(odd) {
        background-color: #444;
        }
        tr:hover {
        background-color: #666;
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
