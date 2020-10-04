<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Belle Lingerie | Página Inicial</title>
    <link rel="stylesheet" href="css/style.css" media="all" />
</head>
<body>
    <div class="main_wrapper">
        <div class="header_wrapper">
        <img src="images/logomarca.png" alt="Logomarca" id="logo">
        </div>
        
        <!--Cabeçalho -->
        <div class="menubar">
            <ul id="menu">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Todos Produtos</a></li>
                <li><a href="#">Minha Conta</a></li>
                <li><a href="#">Carrinho</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
            <div id="form"> 
                <form action="result.php" method="get" enctype="multpart/form-data">
                <input type="text" name="user_query" id="" placeholder="Pesquisar Produtos">
                <input type="submit" value="Pesquisar" name="search">
                </form>
            </div>
        </div>

        <div class="content_wrapper">
            <div id="sidebar">
                <div id="sidebar_title"> Categorias </div>
                    <ul id="cats">
                        <li><a href="#">Calcinha</a></li>
                        <li><a href="#">Sutiã</a></li>
                        <li><a href="#">Body</a></li>
                        <li><a href="#">Conjunto</a></li>
                        <li><a href="#">Baby Doll</a></li>
                        <li><a href="#">Camisolas</a></li>
                        <li><a href="#">Cueca Box</a></li>
                        <li><a href="#">Samba Canção</a></li>
                    </ul>

                    <div id="sidebar_title"> Marcas | Modelos </div>
                        <ul id="cats">
                            <li><a href="#">Valisere</a></li>
                            <li><a href="#">Darling</a></li>
                            <li><a href="#">Liz</a></li>
                            <li><a href="#">Plie</a></li>
                            <li><a href="#">Duloren</a></li>
                            <li><a href="#">Giorge</a></li>
                            <li><a href="#">Hope</a></li>
                            <li><a href="#">Lupo</a></li>
                            <li><a href="#">Skala</a></li>
                        </ul>
                    </div>
                </div>
            <div id="content_area">content area</div>
            <div id="footer">rodape</div>
        </div>
    </div>
</body>
</html>