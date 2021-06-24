<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @include('admin.layouts.estilos')
    @yield('estilos')

</head>

<body>
    <div class="grid1">
        <div class="container cero">
            <div class="row uno">
                <div class="col cuadro1">A</div>
            </div>
            <div class="row">
                <div class="col d-sm-none d-md-none d-lg-flex cuadro">B</div>
                <div class="col cuadro">C</div>
                <div class="col cuadro">D</div>
                <div class="col d-none d-xl-flex cuadro">E</div>
            </div>
            <div class="row">
                <div class="col-md cuadro2">F</div>
                <div class="col-md cuadro2">G</div>
            </div>
            <div class="row">
                <div class="col-xl-11 cuadro3">H</div>
                <div class="col-xl cuadro3">I</div>
            </div>
            <div class="row">
                <div class="col-xl cuadro4">j</div>
                <div class="col-xl-3"></div>
                <div class="col-xl cuadro4">k</div>
            </div>

        </div>
    
</body>

</html>
