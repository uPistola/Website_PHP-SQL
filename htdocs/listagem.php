<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"> 
        <meta charset="UTF-8">
        <script type="text/javascript" src="cod.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <title>TriviaCraft</title> 
    </head>

    <body>

        <header>
            <div class="container">  
                <h1>TriviaCraft</h1>   
                <img src="assets/grass_block.gif" width="75" height="75">   
                <nav>
                    <ul>
                        <li><a href="menu.html">Inicio</a></li>
                        <li><a href="imagens.html">Imagens</a></li>
                        <li><a href="videos.html">Videos</a></li>
                        <li><a href="cadastro.html">Cadastro</a></li>
                        <li><a href="listagem.html">Listagem de Dados</a></li>
                    </ul>
                </nav>
            </div>
        </header>     

    <body>
        
        <?php
           $conexao = mysqli_connect("localhost:3306", "root", "");
           $banco = mysqli_select_db($conexao, "triviacraft"); 
           
            if($conexao && $banco){
                $resultado = mysqli_query($conexao, "SELECT * FROM usuarios");
                
                echo("<div class='resultados'>");
                while($linha = mysqli_fetch_assoc($resultado)){
                    echo("<br>");
                    echo("<h1> Nome: ".$linha['nome']."</h1>");
                    echo("<h1> Idade: ".$linha['idade']." anos"."</h1>");
                };
                echo("</div>");
            }else{
                echo("<h1>Erro ao conectar ao banco de dados.</h1>");
            };
        
        ?>

       



    </body>
</html>