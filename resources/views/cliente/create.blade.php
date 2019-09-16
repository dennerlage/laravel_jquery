<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body>
        <form action="{{route('cliente.store')}}" method="post">
            @csrf

            <label for="nomcli">Nome Cliente</label><br/>
            <input type="text" name="nomcli" id="nomcli"/><br/><br/>
            <label for="cpfcli">CPF</label><br/>
            <input type="text" name="cpfcli" id="cpfcli"/><br/><br/>
            <label for="endcli">Endereço</label><br/>
            <input type="text" name="endcli" id="endcli"/><br/><br/>
            <label for="numcli">Número</label><br/>
            <input type="text" name="numcli" id="numcli"/><br/><br/>
            <label for="baicli">Bairro</label><br/>
            <input type="text" name="baicli" id="baicli"/><br/><br/>
            <label for="cidcli">Cidade</label><br/>
            <input type="text" name="cidcli" id="cidcli"/><br/><br/>
            <label for="ufcli">Estado</label><br/>
            <input type="text" name="ufcli" id="ufcli"/><br/><br/>
            <label for="telcli">Telefone</label><br/>
            <input type="text" name="telcli" id="telcli"/><br/><br/>
            <button type="submit">Adicionar</button>
        </form>
    </body>
</html>

