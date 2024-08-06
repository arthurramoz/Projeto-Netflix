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
				<a href=""><img src="img/logotipo.png"></a>
				<div class="menu-header">
					<ul>
						<li><a href="index.php">Início</a></li>
						<li><a href="adicionar.php">Adicionar & Vizualizar</a></li>
						<li class="this"><a href="#">Procurar & Editar</a></li>
						<li><a href="deletar.php">Deletar</a></li>
					</ul>
				</div><!--menu-header-->
			</div><!--header-left-->
			
			<div class="header-right">
				<div class="search">
					<i class="fa-solid fa-magnifying-glass"></i>
				</div><!--search-right-->
				<a href="">Perfil</a>
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
        <div class="texto-destaque3">

            <form class="form-left" id="meuForm" action="editar.php" method="post">

                <h2>PESQUISAR</h2>

                <div class="input-container3">
                    <label>Id do Filme</label>
                    <input type="number" name="id" autocomplete="off" placeholder="1" required>
                </div>
                <div class="input-container3">
                    <button type="submit">Pesquisar</button>
                </div>
            
            </form>

        </div><!--texto-destaque3-->

        <?php

        error_reporting(0);

        require_once 'conexao.php'; 

        $id = $_POST['id'];

        $sql = ("SELECT * FROM filmes where id ='$id'") or die(mysqli_error($conexao)); //caso haja um erro na consulta );

        $result = $conexao->query($sql); 

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($result->num_rows>0){
                $dados=$result->fetch_assoc();
                $nome=$dados['nome'];
                $duracao=$dados['duracao'];
                $produtor=$dados['produtor'];
                $id=$dados['id'];
                $nome2=$dados['nome'];
                $duracao2=$dados['duracao'];
                $produtor2=$dados['produtor'];
                echo '<div class="texto-editar"><h2>Encontrado com sucesso!</h2></div>';

            }else{
                echo '<div class="texto-editar"><h2>Não possuimos filme com esse ID!</h2></div>';
            }
        }

    ?>

        <form action="editar.php" id="meuForm" method="post">
    
        <table class="texto-destaque4">

        <tr>
        <th>Nome</th>
        <td><input type="text" name="nome" autocomplete="off" value="<?php echo $nome; ?>" require/></td></tr> 
        <th>Duração</th>
        <td><input type="text" name="duracao" autocomplete="off" value="<?php echo $duracao; ?>" require/></td></tr>
        <tr>
        <th>Produtora</th>
        <td><input type="text" name="produtor" autocomplete="off" value="<?php echo $produtor; ?>" require/></td></tr>
        <tr>
        <input type="hidden" name="id" value="<?php echo $dados['id']?>"/>
        <td><button type="submit" name="n2" value="n2">Desfazer</button></td>
        <div class="texto-editar2"><h2>Apertar a tecla <span>enter</span> desfaz as alterações</h2></div>
        <td><button type="submit" name="n1" value="n1">Salvar Alterações</button></td>


    </section><!--destaque3-->

    <?php
    session_start();

    if (!isset($_SESSION['dados_originais'])) {
    $_SESSION['dados_originais'] = array(
        'nome' => $nome2,
        'duracao' => $duracao2,
        'produtor' => $produtor2
    );
    }

require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['n2']) && $_POST['n2'] == 'n2') {
        $_POST['nome'] = $_SESSION['dados_originais']['nome'];
        $_POST['duracao'] = $_SESSION['dados_originais']['duracao'];
        $_POST['produtor'] = $_SESSION['dados_originais']['produtor'];
        header('Location: editar.php');
        exit();
    } elseif (isset($_POST['n1']) && $_POST['n1'] == 'n1') {

        $nome = $_POST['nome'];
        $duracao = $_POST['duracao'];
        $produtor = $_POST['produtor'];
        $id = $_POST['id'];

        $sql = "UPDATE filmes SET nome = '$nome', duracao = '$duracao', produtor = '$produtor' WHERE id = {$id}";

        if ($conexao->query($sql) === TRUE) {
            header('Location: editar.php');
            exit();
        } else {
            echo "Erro: " . $conexao->error;
        }
    }

    $conexao->close();
}
?>

</body>
</html>