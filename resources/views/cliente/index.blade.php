<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script>
            
    window.onload = function(){
        @if(session()->get('msg'))
            alert("{{session()->get('msg')}}");
        @endif
        
        };
        </script>
        
        
    </head>
    <body>
        <a href="{{route('cliente.create')}}">Adicionar Categoria</a>
        <table style="width:100%;">
            <thead>
                <tr>
                    <td>Cód</td>
                    <td>Nome</td>
                    <td>CPF</td>
                    <td>Endereço</td>
                    <td>Número</td>
                    <td>Bairro</td>
                    <td>Cidade</td>
                    <td>Estado</td>
                    <td>Telefone</td>
                    <td></td>  
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $c)
                <tr>
                    <td>{{$c->codcli}}</td>
                    <td>{{$c->nomcli}}</td>
                    <td>{{$c->cpfcli}}</td> 
                    <td>{{$c->endcli}}</td>
                    <td>{{$c->numcli}}</td>
                    <td>{{$c->baicli}}</td>
                    <td>{{$c->cidcli}}</td>
                    <td>{{$c->ufcli}}</td>
                    <td>{{$c->telcli}}</td>
                    <td>
                        
                        <button onclick="location.href='{{route('categoria.edit', $c->codcat)}}'" type="button">Editar</button>
                        
                        <form action="{{route('categoria.destroy', $c->codcat)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
    </body>
</html>
