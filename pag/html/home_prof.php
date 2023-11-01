<?php
    include_once "../php/cad-usuario/professorHelper.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário: Professor</title>
    <link rel="stylesheet" type="text/css" href="../css/home_prof.css">
    <link rel="shortcut icon" type="imagex/png" href="../img/logo-scet.jpg">
</head>
<body>

    <div class="cont">
        <img src="../img/perfil.png"  width="32" height="32" left="20">
    </div>

    <!– Fíguras geométricas –>

    <div class="retangulo"></div>
      
    </div>
    <div class="retangulo5"></div>
    
    <div class="retangulo6">
        <img src="../img/sobre.png"  width="32" height="32" left="30">
    </div>

    <div class="menu"></div>

    <div class="lateral">
        <nav>
            <ul>
            <li><a href="#">Pendentes</a></li>
            <li><a href="#">Notificações</a></li>
            <li><a href="#">Estágio</a></li>
            <li><a href="#">TCC</a></li>
            </ul>
        </nav>
    </div>
    
    <div class="cabecalho"></div>
    
    <!– Títulos textuais –>
    <div class="titulo"></div> <!– Título –>
    <div class="user">Usuário Professor</div> <!– User do usuário–>
    
    <div class="sobre">Sobre</div>

    <!- Textos do cabeçalho ->
    <div class="Pendente">Olá,</div>
    <div class="mover">
            <fieldset>
                <legend>Dados do(a) Professor(a)</legend>
                <table>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <!--<th>Foto</th>-->
                        </tr>
            
                    <tbody>
                        <?php
                        $professores = getProfessor();
                        foreach($professores as $professor){
                        echo '<tr>';
                        echo '<td>'.$professor->nome.'</td>';
                        echo '<td>'.$professor->email.'</td>';
                        //<td><img src="../img/perfil.png" alt="Foto de Perfil"></td>
                        echo '</tr>';
                        }
                        ?>
                <table>
        </div>
            <fieldset>   

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script>
            const list = document.querySelectorAll('.list');
            function activeLink() {
                list.forEach((item) =>
                    item.classList.remove('active'));
                this.classList.add('active');
            }
            list.forEach((item) =>
                item.addEventListener('click', activeLink));
        </script>


</body>
</html>