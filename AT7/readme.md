# Atividade de PHP — Arrays e Estruturas de Repetição

## Introdução

Esta atividade foi desenvolvida com o objetivo de praticar conceitos básicos da linguagem de programação **PHP**, principalmente a criação e manipulação de **arrays**, além da utilização das estruturas de repetição `for` e `foreach`.

Os arrays são utilizados para armazenar diversos valores dentro de uma única variável, facilitando a organização e o acesso às informações. Durante a atividade, também foram utilizados arrays associativos e multidimensionais para representar dados de colaboradores.

## Desenvolvimento

Inicialmente, foi criado um array simples contendo nomes de funcionários:

```php
$funcionarios = ['Murillo', 'Miguel', 'Nicollas'];
```

Esse tipo de array permite armazenar diferentes valores em posições numeradas, chamadas de índices.

Em seguida, foi utilizada a estrutura de repetição `for` para percorrer os elementos presentes no array e exibi-los na página.

```php
for ($i = 0; $i <= 2; $i++){
    echo "$funcionarios[$i]<br>";
}
```

O `for` funciona a partir de uma variável de controle, que permite acessar cada posição do array.

Também foi utilizada a estrutura `foreach`, que permite percorrer os elementos de um array de maneira mais simples.

```php
foreach($funcionarios as $funcionario){
    echo "$funcionario<br>";
}
```

Nesse caso, o `foreach` acessa diretamente cada valor presente no array, sem a necessidade de informar manualmente os índices.

## Array Associativo

Posteriormente, foi criado um array associativo chamado `$colaborador`.

```php
$colaborador = [
    "nome" => "Murillo",
    "cargo" => "Estudante"
];
```

Diferentemente de um array simples, o array associativo utiliza palavras como chaves para identificar os valores armazenados.

As informações foram exibidas utilizando o comando `echo`:

```php
echo "Nome do colaborador: ". $colaborador["nome"]. "<br>";
echo "Cargo do colaborador: ". $colaborador["cargo"]. "<br>";
```

Dessa forma, é possível acessar separadamente cada informação armazenada.

## Array Multidimensional

Na sequência, foi desenvolvido um array multidimensional chamado `$colab`.

Ele possui informações sobre diferentes colaboradores, contendo nome, idade e cargo.

```php
$colab = [
    [
        "nome" => "Nicollas",
        "idade" => "17",
        "cargo" => "Estudante"
    ],

    [
        "nome" => "Sophie",
        "idade" => "16",
        "cargo" => "Estudante"
    ],

    [
        "nome" => "Miguel",
        "idade" => "16",
        "cargo" => "Estudante"
    ],

    [
        "nome" => "Murillo",
        "idade" => "16",
        "cargo" => "Estudante"
    ]
];
```

Esse tipo de estrutura permite armazenar vários conjuntos de informações dentro de um único array.

Para percorrer todos os dados, foi utilizado novamente o `foreach`:

```php
foreach($colab as $c){
    echo "Nome: ". $c["nome"]. "<br>";
    echo "Idade: ". $c["idade"]. "<br>";
    echo "Cargo: ". $c["cargo"]. "<br>";
    echo "<hr>";
}
```

Assim, o programa percorre cada colaborador e apresenta suas respectivas informações na tela.

## Conceitos Trabalhados

Durante o desenvolvimento da atividade, foram utilizados os seguintes conceitos:

* Criação de arrays simples;
* Utilização de índices;
* Estrutura de repetição `for`;
* Estrutura de repetição `foreach`;
* Arrays associativos;
* Arrays multidimensionais;
* Acesso aos elementos de um array;
* Exibição de informações com `echo`;
* Organização de dados em PHP.

## Tecnologias Utilizadas

* PHP;
* HTML básico;
* Servidor local para execução do código, como XAMPP.

## Como Executar

Para executar o projeto, é necessário possuir um ambiente capaz de interpretar PHP.

1. Instalar um servidor local, como o XAMPP.
2. Colocar o arquivo `.php` dentro da pasta `htdocs`.
3. Iniciar o servidor Apache.
4. Abrir um navegador.
5. Acessar o projeto através de um endereço semelhante a:

```text
http://localhost/nome-do-arquivo.php
```

## Conclusão

A realização desta atividade permitiu compreender melhor o funcionamento dos arrays na linguagem PHP e sua importância para armazenar e organizar diferentes tipos de informações.

Além disso, foi possível praticar estruturas de repetição, principalmente `for` e `foreach`, facilitando a exibição e o acesso aos dados armazenados.

A atividade contribuiu para o desenvolvimento dos conhecimentos básicos de programação em PHP, demonstrando maneiras diferentes de trabalhar com conjuntos de dados de forma organizada e eficiente.
