Algoritmo "semnome"
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : YAGO ESTEVO
// Data atual  : 23/06/2025
Var
// Seção de Declarações das variáveis 
NUMEROS: vetor[1..5] de inteiro
maior: inteiro
menor: inteiro
repeticoes: vetor[1..101] de inteiro
somarepetidos: inteiro
i: inteiro
j: inteiro
r: inteiro
num: inteiro
temp: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
i <- 1
maior <- -1
menor <- 101
somarepetidos <- 0
r <- 0

enquanto (i <= 5) faca
  escreval("digite um número entre 0 e 100: ")
  leia(num)
  se (num >= 0) e (num <= 100) entao
     numeros[i] <- num
     se (num > maior) entao
        maior <- num
     fimse
     se (num < menor) entao
        menor <- num
     fimse
     i <- i + 1
  senao
       escreval("número inválido. digite novamente")
     fimse
  fimenquanto
   para i de 1 ate 5 faca
    para j de 1 ate 5 - i faca
     se (numeros[j] > numeros [j + 1])entao
    temp <- numeros[j]
    numeros[j] <- numeros[j + 1]
    numeros[j + 1] <- temp
   fimse
   fimpara
    fimpara
    para i de 1 ate 5 faca
     para j de i + 1 ate 5 faca
      se (numeros[i] = numeros[j]) entao
      r <- r + 1
      repeticoes[r] <- numeros[i]
      somarepetidos <- somarepetidos + numeros[i]
      fimse
     fimpara
    fimpara
    escreval("numeros digitados:")
    para i de 1 ate 5 faca
      escreval(numeros[i])
  fimpara
      escreval("o maior numero digitado foi: ", maior)
      escreval("o menor numero digitado foi: ", menor)
  se (r > 0) entao
      escreval("numeros repetidos")
    para i de 1 ate r faca
      escreval(repeticoes[i])
    fimpara
    escreval("soma dos numeros repetidos ", somarepetidos)
      senao
        escreval("sem repetições")
      fimse
    
Fimalgoritmo