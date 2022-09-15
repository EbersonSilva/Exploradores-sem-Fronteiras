<?php
	
//Definições de Acesso ao Banco de Dados 
	
$host = "localhost:3306";
$dbusername = "alaein48_exploradores";
$dbpass = "@explorador123";
$dbname = "alaein48_exploradores_sem_fronteiras";
        
    /*$host = "localhost";
    $dbusername = "root";
    $dbpass = "";
    $dbname = "exploradores_sem_fronteiras";*/

//Realizar Conexão

$conn = new mysqli($host, $dbusername, $dbpass, $dbname);

if(mysqli_connect_error()){
    die('Connection error'. mysqli_connect_error() );
}else{
    //echo "Connection Sucessful :)";
}

// Mudar Caracteres para utf8
mysqli_set_charset($conn,"utf8");

//echo "Current character set is: " . mysqli_character_set_name($conn);

//$_POST - Capturar Dados do Formulário de Cadastro

$nomecompleto   = $_POST['name'];
$email  = $_POST['email'];
$telefone   = $_POST['phone'];
$cidade   = $_POST['city'];
$estado   = $_POST['state'];
$sexo   = $_POST['genre'];
$senha   = $_POST['pass'];
$confirm_dados   = "Política de Proteção de Dados Aceita";
$confirm_responsabilidade   = "Política de Responsabilidade Aceita";
$confirm_comunicacao   = "Política de Comunicação Aceita";

//$_POST - Verificar se conta já existe

$dupesql = "SELECT * FROM exploradores_users WHERE email = '$email'";
$duperaw = mysqli_query($conn, $dupesql);

if (mysqli_num_rows($duperaw) > 0) {
        
        $mgm = "Já existe um cadastro com este e-mail!";
        echo '
        <script>
        alert("Já existe um cadastro com este e-mail!");
        window.location.href = "registration.html";
        </script>';
        echo " <meta http-equiv='refresh' content='10;URL=registration.html'>";

} else {

//$_POST - Inserir Novo cadastro na Tabela de Contribuintes

$sql = "INSERT INTO exploradores_users (nomecompleto, email, telefone, cidade, estado, sexo, senha, confirm_dados, confirm_responsabilidade, confirm_comunicacao) VALUES ('$nomecompleto', '$email', '$telefone', '$cidade', '$estado', '$sexo', '$senha', '$confirm_dados', '$confirm_responsabilidade', '$confirm_comunicacao')";

if (mysqli_query($conn, $sql)) {

    $mgm = "O seu cadastro foi realizado com sucesso.";
    echo '
    <script>
    alert("O seu cadastro foi realizado com sucesso.");
    window.location.href = "registration.html";
    </script>';
    echo " <meta http-equiv='refresh' content='10;URL=registration.html'>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

die;
}

?>