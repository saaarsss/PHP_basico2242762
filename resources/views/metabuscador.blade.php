<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha512-Dop/vW3iOtayerlYAqCgkVr2aTr2ErwwTYOvRFUpzl2VhCMJyjQF0Q9TjUXIo6JhuM/3i0vVEt2e/7QQmnHQqw==" crossorigin="anonymous" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--metodo de post y seguridad--->
<form class="form-horizontal"
      method="POST"
      action="{{url('buscar')}}">
      @csrf
<fieldset>

<!-- Form Name -->
<legend><center><h1 style="color:#2E98DE "><i>Buscador en diferentes motores de busqueda</i></h1></center></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="termino">1. Ingrese el termino a buscar</label>  
  <div class="col-md-5">
  <input id="termino" name="termino" type="text" placeholder="placeholder" class="form-control input-md">
    
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="motores">2. Seleccione motor de busqueda</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="motores-0">
      <input type="radio" name="motores" id="motores-0" value="1" checked="checked">
      Google
    </label>
	</div>
  <div class="radio">
    <label for="motores-1">
      <input type="radio" name="motores" id="motores-1" value="2">
      Bing
    </label>
	</div>
  <div class="radio">
    <label for="motores-1">
      <input type="radio" name="motores" id="motores-1" value="3">
      Duck Duck Go
    </label>
	</div>
  <div class="radio">
    <label for="motores-1">
      <input type="radio" name="motores" id="motores-1" value="4">
      Naver
    </label>
	</div>
  <div class="radio">
    <label for="motores-1">
      <input type="radio" name="motores" id="motores-1" value="5">
     Yahoo
    </label>
	</div>
  <div class="radio">
    <label for="motores-1">
      <input type="radio" name="motores" id="motores-1" value="6">
      wolframalpha
    </label>
    <div class="radio">
    <label for="motores-1">
      <input type="radio" name="motores" id="motores-1" value="7">
      boardreader
    </label>
	</div>
  <div class="radio">
    <label for="motores-1">
      <input type="radio" name="motores" id="motores-1" value="8">
      Aol
    </label>
	</div>
  <div class="radio">
    <label for="motores-1">
      <input type="radio" name="motores" id="motores-1" value="9">
      ecosia
    </label>
	</div>
  <div class="radio">
    <label for="motores-1">
      <input type="radio" name="motores" id="motores-1" value="10">
      qwant
    </label>
	</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button type ="submit" id="singlebutton" name="singlebutton" class="btn btn-info">Buscar</button>
  </div>
</div>
</div>

</fieldset>
</form>
</body>
</html>