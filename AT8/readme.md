# Atividade de PHP — Funções

## Sobre a atividade

Nesta atividade aprendemos a utilizar **funções em PHP**.

As funções servem para organizar melhor o código e evitar repetir várias vezes os mesmos comandos. Também aprendemos a usar **parâmetros**, **return** e a estrutura de decisão **if/else**.

## Função `mostraMsg()`

A função `mostraMsg()` foi criada para mostrar uma mensagem na tela.

```php
function mostraMsg(){
    echo "Sou uma função";
}
```

Depois, a função é chamada com:

```php
mostraMsg();
```

Assim, aparece a mensagem **"Sou uma função"** na tela.

## Função `msgFlex()`

A função `msgFlex()` recebe uma informação através de um **parâmetro**.

```php
function msgFlex($msg){
    echo "$msg";
}
```

Neste exemplo:

```php
msgFlex("Sou uma função com parametro");
```

A mensagem enviada para a função é exibida na tela.

## Função `somar()`

Essa função recebe dois números através dos parâmetros `$a` e `$b`.

```php
function somar($a,$b){
    echo "A soma é:". $a*$b;
}
```

Depois ela é chamada:

```php
somar(2,3);
```

No código atual, os números **2 e 3 são multiplicados**, resultando em **6**.

> Observação: apesar da função se chamar `somar`, foi utilizado o operador `*`, que significa multiplicação. Para fazer uma soma, seria necessário utilizar `$a + $b`.

## Função `subtrai()`

A função `subtrai()` recebe dois números e realiza uma subtração.

```php
function subtrai($a,$b){
    return $a-$b;
}
```

O comando `return` devolve o resultado da operação.

No exemplo:

```php
$resposta = subtrai(10,1);
```

O resultado é **9** e fica armazenado na variável `$resposta`.

## Função `verificaIdade()`

Essa função verifica se uma pessoa possui **18 anos ou mais**.

```php
function verificaIdade($idade){
    if ($idade >=18){
        return "Acesso concedido";
    } else {
        return "Acesso negado";
    }
}
```

Se a idade for maior ou igual a 18, aparece:

**Acesso concedido**

Caso a idade seja menor que 18, aparece:

**Acesso negado**

No exemplo do código foi utilizada a idade **19**, então o acesso é concedido.

## Conceitos aprendidos

Nesta atividade foram utilizados:

* Funções em PHP;
* Parâmetros;
* Variáveis;
* `echo`;
* `return`;
* Operações matemáticas;
* Estrutura `if/else`;
* Comparação de valores.

## Conclusão

Com essa atividade foi possível entender melhor como funcionam as **funções em PHP**. Aprendemos a criar funções simples, passar informações por parâmetros, realizar cálculos, retornar resultados e utilizar condições para tomar decisões dentro do programa.
