<?php
function conectar() {
    try {
        $db_file = "C:\\xampp\\htdocs\\ADO2-main\\transportadora.sqlite";
        
        return new PDO("sqlite:$db_file");
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
        throw $e;
    }
}
?>