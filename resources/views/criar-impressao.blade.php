<div>
    <form action="/impressoes" method="post">
        @csrf
        <label for="nome"> Nome:</label>
        <input name="nome" id="nome" type="text"/>
        <input type="submit"/>
    </form>
</div>
