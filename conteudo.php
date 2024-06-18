<center><h1>Hugo Oliveira & Thiago Araujo</h1></center>
<div style="background-color: #CCCCCC; color:red; font-size: 43px; text-align: center;">Hand Academy</div>
<style>
        
        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $usuario_correto = "usuario";
    $senha_correta = "senha";

    if ($_POST["usuario"] == $usuario_correto && $_POST["senha"] == $senha_correta) {
        
        header("Location: sucesso.php");
        exit;
    } else {
        
        echo "<p>Usuário ou senha incorretos. Tente novamente.</p>";
    }
}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="usuario">Usuário:</label>
    <input type="text" id="usuario" name="usuario">

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha">

    <input type="submit" value="Login">
</form>