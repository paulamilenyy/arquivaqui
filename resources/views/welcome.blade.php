
<!DOCTYPE html>
<html>
<title>Arquivaqui</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset(  'https://www.w3schools.com/w3css/4/w3.css')}}">
<link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Raleway')}}">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url({{url('./fundo2.jpg')}});
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  
  <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top"><a style="color:white;" href="{{route('cheques.index')}}">Login
                </a></h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center"> Faça seu login e continue</p>
  </div>
 
</div>

</body>
</html>