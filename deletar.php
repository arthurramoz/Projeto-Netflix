<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/d586e6a03d.js" crossorigin="anonymous"></script>
	<title>Netflix Brasil</title>
</head>
<body>
	<header>
		<div class="center">
			<div class="header-left">
				<a href="index.php"><img src="img/logotipo.png"></a>
				<div class="menu-header">
					<ul>
						<li><a href="index.php">Início</a></li>
						<li><a href="adicionar.php">Adicionar & Vizualizar</a></li>
						<li><a href="editar.php">Procurar & Editar</a></li>
						<li class="this"><a href="#">Deletar</a></li>
					</ul>
				</div><!--menu-header-->
			</div><!--header-left-->
			
			<div class="header-right">
				<div class="search">
                <a href="editar.php"><i class="fa-solid fa-magnifying-glass"></i></a>
				</div><!--search-right-->
				<a href="index.php">Perfil</a>
				<div class="notifications">
					<div class="circle-notifications">
						<span>10</span>
					</div><!--circle-notifications-->
					<i class="fa-solid fa-bell"></i>
				</div><!--notifications-->
			</div><!--header-right--> 

			<div class="clear"></div>
		</div><!--center-->
	</header>

    <section class="destaque3">
        <div class="overlay2"></div><!--overlay2-->
        <div class="texto-destaque5">

        <form class="form4" id="meuForm" action="deletar.php" method="post" onsubmit="return confirmarExclusao();">
            <h2>DELETAR FILMES</h2>
                <div class="input-container">
                    <label>Selecione o filme que deseja deletar</label>
                        <select name="filme_id" required>
                            <?php
                                require_once "conexao.php";

                                $sql = "SELECT id, nome FROM filmes";
                                $result = $conexao->query($sql);

                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row["id"] . "'>" . $row["nome"] . "</option>";
                                    }
                                }
                            ?>
                        </select>
                    <button type="submit" name="deletar" value="deletar">Deletar</button>
                </div>
            </form>

        </div><!--texto-destaque3-->

    </section><!--destaque3-->
    
    <script>
        function confirmarExclusao(){
            return confirm('Tem certeza que deseja excluir esse filme?');
        }
    </script>

    <?php

        require_once "conexao.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $filme_id = $_POST['filme_id'];

            $sql = "DELETE FROM filmes WHERE id = '$filme_id'";

            if ($conexao->query($sql) === TRUE) {
                header('Location: deletar.php');
                exit();
            } else {
                echo "Erro: " . $conexao->error;
            }

            $conexao->close();
        }
?>

</body>
</html>
