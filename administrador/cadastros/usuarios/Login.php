
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login 2</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="../../js/bootstrap/css/font-awesome.css" rel="stylesheet">

    <link href="../../js/bootstrap/css/animate.css" rel="stylesheet">
    <link href="../../js/bootstrap/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">


<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div id="resultado" class="alert-warning"></div>

        <h3>Biblioteca ADOA</h3>

        <form class="m-b-lg" role="form" action="Logar.php" method="get">
            <div class="form-group">
                <input type="text" class="form-control" id="usuarioLogin" name="usuarioLogin" placeholder="Usuario" required="">
            </div>
            <div class="form-group">
                <input type="password" name="senha"  id="senha" class="form-control" placeholder="Senha" required="">
            </div>
            <button type="submit"  id="verificar" class="btn btn-primary block full-width ">Login</button>

            <p class="text-muted text-center"><small>Não é cadastrado?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="http://localhost/biblioteca/cadastros/usuarios/FormCadastro.php">Cadastre-se</a>
        </form>

        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

        <script type="text/javascript">
            $(function(){ // declaro o início do jquery
                $("input(id='usuarioLogin'").on('change', function(){
                    var usuarioLogin = $(this).val();
                    $.get('validacao.php?usuarioLogin=' + usuarioLogin , function(data){
                        $('#resultado').html(data);
                    });
                });
            });

        </script>

    </div>
</div>

<!-- Mainly scripts -->
<script src="../../js/jquery-2.1.1.js"></script>
<script src="../../js/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
