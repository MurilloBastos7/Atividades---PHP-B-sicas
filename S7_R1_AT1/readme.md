# Cadastro de Funcionários em PHP

<img width="1509" height="683" alt="Captura de tela 2026-08-11 104246" src="https://github.com/user-attachments/assets/1ba81b51-82f3-4cda-8813-56448c9b98ef" />

## Sobre a atividade

Neste código foi criado um pequeno cadastro de funcionários utilizando **PHP**.

As informações de cada funcionário foram armazenadas dentro de um array, contendo:

* Nome;
* Cargo;
* Setor;
* Idade.

## Como funciona

O array `$funcionarios` guarda os dados de todos os colaboradores.

Exemplo:

```php
["nome" => "Murillo",
 "cargo" => "TI Junior",
 "setor" => "Adm",
 "idade" => "23"]
```

Depois, foi utilizado o `foreach` para passar por todos os funcionários e mostrar as informações de cada um na tela.

```php
foreach($funcionarios as $f) {
    echo "Nome do colaborador:". $f["nome"], "<br>";
    echo "Cargo do colaborador:". $f["cargo"], "<br>";
    echo "Setor do colaborador:". $f["setor"], "<br>";
    echo "Idade do colaborador:". $f["idade"], "<br>";
    echo "<hr>";
}
```

O `<br>` serve para quebrar a linha entre as informações e o `<hr>` cria uma linha para separar um funcionário do outro.

## O que foi aprendido

Com essa atividade foi possível praticar:

* Arrays em PHP;
* Uso do `foreach`;
* Exibição e organização de informações na tela.

## Como acessar o site

Para acessar o site, siga os passos abaixo:

1. Baixe ou clone este repositório.
2. Coloque a pasta do projeto dentro da pasta `htdocs` do XAMPP.
3. Abra o **XAMPP** e inicie o servidor **Apache**.
4. Abra o navegador.
5. Digite na barra de endereço:

```text
http://localhost/nome-da-pasta-do-projeto/
```

Depois disso, o site será carregado no navegador.

> Exemplo: se a pasta do projeto se chamar `Cena-Imobiliario`, acesse:

```text
http://localhost/Cena-Imobiliario/
```


## Conclusão

Essa atividade ajudou a entender melhor como guardar vários dados em um array e como utilizar o `foreach` para mostrar essas informações de forma simples e organizada.
