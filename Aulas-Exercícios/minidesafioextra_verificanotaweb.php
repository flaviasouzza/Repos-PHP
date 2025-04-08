<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verifica Nota</title>
</head>
<body>

<form method="get" action="">
    <label for="nota">Digite sua nota de 0 a 10:</label>
    <input type="number" name="nota" id="nota" step="0.1" min="0" max="10" required>
    <button type="submit">Verificar</button>
</form>

<?php
if (isset($_GET['nota'])) {
    $nota = floatval($_GET['nota']);

    if ($nota >= 7) {
        echo "<p>✅ Você foi <strong>APROVADO</strong>, divirta-se nas férias!</p>";
    } elseif ($nota >= 5 && $nota <= 6.9) {
        echo "<p>⚠️ Férias? Não, <strong>RECUPERAÇÃO</strong>, estude mais ano que vem!</p>";
    } else {
        echo "<p>❌ Xii, alguém vai ter que voltar para minha sala, <strong>REPROVADO</strong>!!</p>";
    }
}
?>

</body>
</html>


ANALISANDO LINHA POR LINHA

<!DOCTYPE html>      // Informando o navegador que estamos usando HTML5

<html lang="pt-br">  // Definindo o idioma 

  <head>
    <meta charset="UTF-8">     // Codificação de caracteres
    <title>Verifica Nota</title> //Nosso título 
</head>

  
<body>    // inicio do conteúdo que será visualizado na página 

<form method="get" action=""> // Envia os dados para a URL, no caso aqui estamos definindo notas então exemplo, envia 8 para URL, e confirma que a ação será enviada para mesma página

  <label for="nota">Digite sua nota de 0 a 10:</label>  //ficará visível para o usuário e posteriormente estamos vinculando o texto ao campo da nota
  
  <input type="number" name="nota" id="nota" step="0.1" min="0" max="10" required> 
/*  type="number" garante que só números possam ser inseridos.
name="nota" é o nome da variável que o PHP vai receber.
id="nota" é usado pra vincular com o <label>.
step="0.1" permite valores com casas decimais (como 6.9).
min="0" e max="10" limita a faixa da nota.
required: o campo é obrigatório pra enviar o formulário. */
  
    <button type="submit">Verificar</button> // Botão que envia os dados digitados no formulário.

</form>

<?php
if (isset($_GET['nota'])) {       // Anteriormente usamos readline(que é para terminal CLI) e o formulário WEB não utiliza, por isso usamos get, vamos verificar se a nota já foi enviada  
    $nota = floatval($_GET['nota']); // pegamos a nota e convertemos para float

                          // abaixo estabelecemos as condições, que já haviamos estipulado antes ṕr[e, só apontando algumas mudanças <p> é um paragrafo, <strong> usamos para destacar o texto 
    if ($nota >= 7) {
        echo "<p>✅ Você foi <strong>APROVADO</strong>, divirta-se nas férias!</p>";
    } elseif ($nota >= 5 && $nota <= 6.9) {
        echo "<p>⚠️ Férias? Não, <strong>RECUPERAÇÃO</strong>, estude mais ano que vem!</p>";
    } else {
        echo "<p>❌ Xii, alguém vai ter que voltar para minha sala, <strong>REPROVADO</strong>!!</p>";
    }
}
?>

// abaixo encerramos o html 
</body>
</html>
