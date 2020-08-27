<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <script src="https://use.fontawesome.com/fd2ae9c22d.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            footer {
              padding-top: 3rem;
              padding-bottom: 3rem;
            }

            footer p {
              margin-bottom: .25rem;
            }
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    Tienda TUL
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="">Inicio <span class="sr-only"></span></a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header><br>
        @if(isset($objProductos))
            <div class="row">
                <div class="col-9 flex-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="5"><h3>Productos</h3></th>
                            </tr>
                            <tr>
                                <th class="text-center">SKU</th>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Descripción</th>
                                <th class="text-center">Precio</th>
                                <th class="text-center">-</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($objProductos as $productos)
                                <tr>
                                    <td class="text-center">{{$productos->sku}}</td>
                                    <th class="text-left" scope="row">{{$productos->nombre}}</th>
                                    <td class="text-left">{{$productos->descripcion}}</td>
                                    <td class="text-center">$ 100.000</td>
                                    <td class="text-center"><button type="button" class="btn btn-primary" onclick="Adicionar('{{$productos->id}}')">Añadir <i class="fa fa-cart-plus"></i>   </button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-3" >
                    <table class="table" style="border-radius: 5px;box-shadow: 0px 0px 10px black;">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="5"><h3>Carrito de compras</h3></th>
                            </tr>
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Precio</th>
                                <th class="text-center">Cantidad</th>
                                <th class="text-center">-</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"> Camisa</td>
                                <td class="text-center"> Camisa</td>
                                <td class="text-center"> 20</td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="Adicionar()">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" colspan="5">Seleccione sus productos para agregarlos a la compra...</td>
                            </tr>
                        </tbody>
                        <tr>
                            <td class="text-center" colspan="5"><button type="button" class="btn-sm btn-primary" onclick="">Checkout <i class="fa fa-cart-plus"></i></button></td>
                        </tr>
                    </table>
                </div>
            </div>
        @endif
    </body>
</html>
<script type="text/javascript">
    function Adicionar(id){
        alert(id);
        $.ajax({
            type: 'POST',
            url: "{{route('AdicionarProducto')}}",
            data: {
                '_token': "{{ csrf_token() }}",
                'id': id,
            },
            success: function(data){
                data = JSON.parse(data);                        
                if(data == 'true'){
                    $("#consultar").show();
                }else{
                    $("#consultar").hide();
                }
            }
        });
    }
</script>