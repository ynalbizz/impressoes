
<head>

    <link href="css/lista-impressoes.css" rel="stylesheet" >
    <title>Lista de impressões</title>
</head>

<body>

    <h1>Lista de impressões</h1>
    <a href="/ajuda">
    <button id='button' name='button'>Ajuda</button>
    </a>

    <p>Lista:</p>

    <table>
         <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        
        @foreach ($impressoes as $impressao)
            <tr>
                <td>{{$impressao['id']}}</td>
                <td>{{$impressao['nome']}}</td>
                <td>
                    <a href="/impressoes/{{$impressao->id}}">
                        Ver mais
                    </a>
                </td>
            </tr>
        @endforeach
  
    </table> 
    <a href="/criar-impressao">
        <button id='button' name='button'>CRIAR</button>
    </a>
</body>
{{$impressoes->links()}}

