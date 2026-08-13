# Empresa Cena Aprendiz

## Sobre o projeto

Nessa atividade, desenvolvi uma página usando **HTML e PHP** para mostrar as informações de um colaborador da empresa. Também criei funções para verificar se ele pode trabalhar e se pode fazer hora extra.

## Código

```php
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imobiliária</title>
</head>
<h2>Empresa Cena Aprendiz</h2>
<body>
    <?php
    // Coloquei o nome do colaborador e cargo.
    $colaborador = [
    "nome" => "<b>Murillo</b>",
    "cargo" => "<b>Jovem Aprendiz</b>"
    ];
    echo "Nome do colaborador:". $colaborador["nome"]."<br>";
    echo "Cargo do colaborador:". $colaborador["cargo"]."<br>";

    echo "<hr>";

    // Fiz uma função para verificar se pode .
    echo "Função na empresa.<br>";
    function verif($idade){
        if ($idade >=18){
            return "Tem a opção de ser <b>Jovem Aprendiz</b> mas pode ser efetivado dentro da empresa!";
        } elseif($idade >=16) {
            return "Pode ser aprendiz!";
        } else {
            return "Não pode trabalhar ainda.";
        };
    };
    echo verif(18);
    echo "<hr>";

   echo "<b>Jovem Aprendiz</b><br>";

   // Hora extra
    echo "Hora extra.<br>";
    function hora($horas){
        if ($horas >=44){
            return "Pode fazer hora extra! Você contem 44 horas semanais ou mais...";
        } else {
            return "<b>Não pode</b> fazer hora extra!";
        };
    };
    echo hora(40);
    echo "<hr>";
    
    // Coloquei o link do meu GitHub!
    $link = "https://github.com/MurilloBastos7";
    echo "<a href='".$link."'\">Meu perfil no GitHub</a>" , "<br>";
    ?>
</body>
</html>
```

## O que o código faz

O programa apresenta:

* Nome do colaborador;
* Cargo dentro da empresa;
* Verificação da idade para trabalhar;
* Verificação da carga horária;
* Link para o meu perfil no GitHub.

## Informações do colaborador

Usei um array para armazenar os dados:

* **Nome:** Murillo;
* **Cargo:** Jovem Aprendiz.

Depois, mostrei as informações na página usando o comando `echo`.

## Função de verificação da idade

A função `verif()` recebe a idade e mostra uma mensagem diferente para cada situação:

* Com 18 anos ou mais, pode ser Jovem Aprendiz ou ser efetivado;
* Entre 16 e 17 anos, pode trabalhar como aprendiz;
* Com menos de 16 anos, ainda não pode trabalhar.

No exemplo, usei a idade **18**.

## Função de hora extra

A função `hora()` verifica a quantidade de horas trabalhadas por semana:

* Com 44 horas ou mais, pode fazer hora extra;
* Com menos de 44 horas, não pode fazer hora extra.

No exemplo, coloquei **40 horas**, então aparece que o colaborador não pode fazer hora extra.

Nessa atividade, eu usei **HTML e PHP** para praticar a criação de funções. Fiz duas funções para realizar contas matemáticas, uma para verificar a idade de uma pessoa e também coloquei o link do meu GitHub no final da página.

## Funções criadas

### Função de adição

A função `adicao` recebe dois números e faz a soma entre eles. Nesse exemplo, usei os números 10 e 90, e o resultado foi **100**.

### Função de multiplicação

A função `multi` também recebe dois números, mas faz a multiplicação. Foram usados os números 100 e 9, resultando em **900**.

### Função de verificação de idade

A função `verif` verifica a idade da pessoa. Se ela tiver 15 anos ou mais, aparece a mensagem **“Pode jogar bola!”**. Se tiver menos de 15 anos, aparece **“Não pode jogar bola!”**.

No código, coloquei a idade 11, então a pessoa não pode jogar bola.

>>>>>>> 43078de9368eb81fe14e40e6a7f762a1b3733dc1
## Tecnologias utilizadas

* HTML;
* PHP;
* XAMPP.

## Como executar

1. Instale o XAMPP.
2. Salve o código em um arquivo chamado `index.php`.
3. Coloque a pasta do projeto dentro da pasta `htdocs`.
4. Abra o XAMPP e inicie o Apache.
5. Acesse pelo navegador:

```text
http://localhost/nome-da-pasta
```

## O que eu aprendi

Com essa atividade, pratiquei o uso de arrays, variáveis, funções, parâmetros e condições com `if`, `elseif` e `else`. Também aprendi a mostrar informações usando o `echo` e a misturar PHP com HTML.

## Autor

Feito por **Murillo Bastos Cena**.

[Meu perfil no GitHub](https://github.com/MurilloBastos7)
