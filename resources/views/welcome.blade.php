<!DOCTYPE html>
<html>

<style type="text/css">
.content {
    position: fixed;
    top: 50%;
    left: 50%;
    /* bring your own prefixes */
    transform: translate(-50%, -50%);
    box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
}

.button {
    background-color: darkcyan;
    /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s;
    /* Safari */
    transition-duration: 0.4s;
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
}
</style>

<body style="background-image:url({{url('./fundo2.jpg')}}); background-repeat: no-repeat;">

    <div class="content">
        <!--<img class="card-img-top" src="./assets/img/logoarquivaqui.jpeg" />-->
        <div class="card-body" style="background-color: white;">
            <h2>Bem-vindx ao sistema Arquivaqui!
            </h2>
            <h2>Faça seu login e continue</h2>
            <button class="button button2">
                <a style="color:white;" href="{{route('cheques.index')}}">Login
                </a></button>
            <!--Com isso vai ir para a tela de login, pois para acessar o cheque tem q estar logado-->
        </div>
    </div>

</body>

</html>