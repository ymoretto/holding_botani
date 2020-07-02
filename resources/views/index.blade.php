<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo/folha.png') }}">
    <title>Em Breve - Botani</title>
</head>
<body>

<section>

    <div>
        <img src="{{ asset('images/logo/logo-black.png') }}" alt="Botani" class="img-block">
    </div>

    <div class="bloco">
        <h1 class="title">A semente já vai brotar. Aguarde.</h1>
    </div>

</section>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

body {
    background-image: url('images/seeds.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}

div.bloco {
    position: fixed;
    left: 376px;
    top: 190px;
    padding-right:10%;
}

h1.title {
    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    font-size: 40px;
    line-height: 60px;
    color: #FFFFFF;
}

img.img-block{
    max-width: 15vw;
    padding-left: 5vw;
    padding-top: 5vh;

}

@media (max-width: 1120px) {
    body {
        background-size:auto;
    }
}

@media (max-width: 700px) {
    h1.title {
        font-size:30px;
    }

    div.bloco {
    position: fixed;
    left: 15vh;
    top: 25vh;
    padding-right: 10%;
    }

    img.img-block{
    width: 100px;
    padding-left: 5px;
    padding-top: 5px;
    }
}


</style>
    
</body>
</html>