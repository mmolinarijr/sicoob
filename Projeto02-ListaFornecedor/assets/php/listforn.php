<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Relatorio</title>
</head>
<body>
    <div>
        <h1>Relatorio de Fornecedores</h1>
    </div>

    <table id="data"> 
        <caption>Listagem de Fornecedores</caption> 
        <tr> 
         <th>ID</th> 
         <th>Nome</th> 
         <th>Fone</th> 
         <th>Excluir</th> 
         <th>Alterar</th> 
        </tr> 
        
        <?php 
        include("assets/php/conn.php"); 
        $sql="select * from fornecedores"; 
        $query = mysql_query($sql); 
        while ($linha = mysql_fetch_array($query)) { 
        echo "<tr>"; 
        echo "<td>$linha[id]</td>"; 
        echo "<td>$linha[nome]</td>"; 
        echo "<td>$linha[telefone]</td>"; 
        echo "<td style='text-align:center'>"; 
        echo "<a href='javascript:delRecord(".$linha['id'].");'>X</a>"; 
        echo "</td>"; 
        echo "<td style='text-align:center'>"; 
        echo "<a href='altforn.php?cod=".$linha['id']."'>"; 
        echo "<img src='imagens/edit.png' border='0' width='16' height='16' /></a>"; 
        echo "</td>"; 
        echo "</tr>\n"; 
        } 
        ?> 
        </table> 

</body>
</html>