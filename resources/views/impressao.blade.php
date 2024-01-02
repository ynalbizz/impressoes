<Style>

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
</Style>

<div>
  <p>ID: {{$impressao->id}}</p>
  <p>Nome: {{$impressao->nome}}</p>
  <p>Criado em: {{$impressao->created_at}}</p>
  <p>Editado em: {{$impressao->updated_at}}</p>
</div>

<div>
  <a href="/impressoes/{{$impressao->id}}/deletar">
    Deletar
  </a>
  <a href="/impressoes/{{$impressao->id}}/editar">
    Editar
  </a>
</div>