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
						<li class="this"><a href="#">Adicionar & Vizualizar</a></li>
						<li><a href="editar.php">Procurar & Editar</a></li>
						<li><a href="deletar.php">Deletar</a></li>
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

    <section class="destaque2">

        <div class="overlay2"></div><!--overlay2-->

            <div class="texto-destaque2">

                <form class="form-left" id="meuForm" action="adicionar.php" method="post">

                    <h2>ADICIONAR FILMES</h2>

                    <div class="input-container">
                        <label>Nome do Filme</label>
                        <input type="text" name="nome" autocomplete="off" placeholder="Shrek 2" required>
                    </div>
                    <div class="input-container">
                        <label>Duração do Filme</label>
                        <input id="duracao" type="text" name="duracao" autocomplete="off" placeholder="2:00:00 Obrigatório usar :" required>
                    </div>
                    <div class="input-container">
                        <label>Nome da Produtora do Filme</label>
                        <input type="text" name="produtor" autocomplete="off" placeholder="Universal Studios" required>
                        <button type="submit">Adicionar</button>
                    </div>
                
                </form>

            </div><!--texto-destaque2-->

            <form class="form-right" id="meuForm" action="adicionar.php" method="post">

                <div class="input-container2">
                    <h2>FILMES DISPONÍVEIS</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Duração</th>
                                <th>Produtora</th>
                            </tr>
                        </thead>
                </div>

            </form>

    </section><!--destaque2-->

    <script src="js/style.js"></script>

    <?php

        require_once "conexao.php";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $duracao = $_POST['duracao'];
            $produtor = $_POST['produtor'];
 
        if ($nome != "" && $duracao != "" && $produtor != "") {
            $sql = "INSERT INTO filmes(nome, duracao, produtor) VALUES ('$nome', '$duracao', '$produtor')";

            if ($conexao->query($sql)) {
                header('Location: adicionar.php');
                exit();
            } else {
                echo "Erro: " . $sql . ' ' . $conexao->connect_error;
            }
        }

            $conexao->close();
        }

        $sql = mysqli_query($conexao, "SELECT * FROM filmes") or die(mysqli_error($conexao));

        while ($row = mysqli_fetch_assoc($sql)) {
            echo "<tr>
                    <td><h3>".$row['id']."</h3></td>
                    <td><h3>".$row['nome']."</h3></td>
                    <td><h3>".$row['duracao']."</h3></td>
                    <td><h3>".$row['produtor']."</h3></td>";
        }

    ?>



</body>
</html>
