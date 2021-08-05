<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PRUEBA TECNICA</title>
        <link href="main/dist/css/core.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
  html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <header>
        <div class="container-fluid">
<nav class="navbar navbar-inverse navegacion navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle myToogle" data-toggle="collapse" data-target="#myNavbar">
            <img class="logo" src="img/lasa.png">
            </button>
            <a class="navbar-brand iden" href=""> PRUEBA TECNICA</a>
              
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        
            <ul class="nav navbar-nav navbar-right">
               
                <li class="pass"><a href="{{route('loguin.create')}}"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
                <li class="pass"><a href="{{route('index.home')}}"><span class="glyphicon glyphicon-floppy-save"></span> Registro</a></li>
               
            </ul>
            <!--<ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>-->
        </div>
    </div>
</nav>
</div>
</header>
    <div class="container">
    <div class="app-registro" style="margin-top: 70px;">
  <h1>REGISTRO</h1>
  
  </div>
  <div class="row">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

  </div>

  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
  <form method="post" action="{{route('registration.store')}}" name="formulario" id="formulario">
      @csrf
      <div class="input-group">
      <span class="input-group-addon"><strong>Nombre:</strong></span>
      <input id="name" type="text" class="form-control" name="name" placeholder="Escriba su nombre">
    </div>
    <br>
    @error('name')
        <div class="alert alert-danger" role="alert">
        <small class="menssage">{{$message}}</small>
        </div>
    @enderror
          
  
              <div class="input-group">
      <span class="input-group-addon"><strong>Apellido:</strong></span>
      <input id="lastname" type="text" class="form-control" name="lastname" placeholder="Escriba su apellido">
    </div>
    <br>
    @error('lastname')
        <div class="alert alert-danger" role="alert">
        <small class="menssage">{{$message}}</small>
        </div>
    @enderror

 
  <div class="input-group">
<span class="input-group-addon"><strong>Número de documento:</strong></span>
<input id="document" type="number" class="form-control" name="document" placeholder="Escriba su número de documento">
</div>
<br>
@error('documet')
        <div class="alert alert-danger" role="alert">
        <small class="menssage">{{$message}}</small>
        </div>
    @enderror

  
  <div class="input-group">
<span class="input-group-addon"><strong>Celular:</strong></span>
<input id="mobile" type="number" class="form-control" name="mobile" placeholder="Escriba su número de celular">
</div>
<br>
@error('mobile')
        <div class="alert alert-danger" role="alert">
        <small class="menssage">{{$message}}</small>
        </div>
    @enderror

  
  <div class="input-group">
<span class="input-group-addon"><strong>Email:</strong></span>
<input id="email" type="mail" class="form-control" name="email" placeholder="Escriba su correo electronico">
</div>
<br>
@error('mail')
        <div class="alert alert-danger" role="alert">
        <small class="menssage">{{$message}}</small>
        </div>
    @enderror

  
  <div class="input-group">
<span class="input-group-addon"><strong>Contraseña:</strong></span>
<input id="password" type="password" class="form-control" name="password" placeholder="Escriba su contraseña">
</div>
<br>
@error('password')
        <div class="alert alert-danger" role="alert">
        <small class="menssage">{{$message}}</small>
        </div>
    @enderror
                    <div align="center">
                
                      <button class="btn  btn-primary" type="submit" id="iniciar" name="iniciar" tabindex="-1">Registrar</button>

                    </div>

       </form>
  </div>
       <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

</div>
       </div>
</div>
    </body>
</html>
