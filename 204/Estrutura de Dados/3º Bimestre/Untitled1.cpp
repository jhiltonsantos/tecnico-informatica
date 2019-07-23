#include <stdio.h>
typedef struct lista_casamento{
int      codigo_convidado;
char     nome_convidado[30]  ;
int      qt_convidados;
} Tipo_Lista_casamento;
const int maximo= 50; /* Limite máximo de convidados*/
int qtd_convidados;
int escolha;
Tipo_Lista_casamento lista[50]; /* Vetor da Lista de Casamentos*/
/* Preenche Linha */
void imprimirLinha() {
int i;
for (i=1;i<=50;i++)
printf(“_”);
printf(“\n”);
}
/* Cabeçalho */
void imprimeCabecalho() {
system(“cls”);
printf(“Implementando Lista de Casamento\n”);
imprimirLinha();
}
/* Método de procura */
int procuraPorCodigoConvidado(int Cdconvidado) {
int i; /* Variável contador*/
int posicao;
posicao = -1;
for(i = 0; i<qtd_convidados; i++) {
/* retornar a posição do código informado*/
if (Cdconvidado==lista[i].codigo_convidado){
posicao = i;
break;
}
}
return posicao; /* retorna o número da posição*/
}
void mostre(int posicao) {
printf(“\n\nCodigo    Nome                  Acompanhantes                “);
printf(“\n————————————————————–“);
printf(“\n%9d         %-20s     %9d                “,
lista[posicao].codigo_convidado,
lista[posicao].nome_convidado,
lista[posicao].qt_convidados);
printf(“\n—————————————————————“);
}
/* Método inserir */
void inserir(){
int op; /* Controla opção selecionada pelo usuário*/
do{
imprimeCabecalho();
printf(“\nInforme o Convidado\n\n”);
/* Máximo é a constante, limite de convidados*/
if (qtd_convidados<maximo){
printf(“\nCodigo do Convidado: “);
scanf(“%d”,&lista[qtd_convidados].codigo_convidado);
printf(“\nNome do Convidado: “);
fflush(stdin);   /* Limpa o buffer do teclado*/
gets(lista[qtd_convidados].nome_convidado);
printf(“\nInforma a quantidade de Convidados que ira levar: “);
scanf(“%d”,&lista[qtd_convidados].qt_convidados);
qtd_convidados++;
printf(“\n\nConvidado Inserido com Sucesso!!!\n\n”);
}else /* Lista de Convidados cheia */{
printf(“\n\n\aLista de Casamentos Lotada!!!\n\n”);
getche();
break;
}
printf(“\n\nInserir outro convidado(1-sim/2-nao)? “);
scanf(“%d”,&op);
}while (op == 1); /* Enquanto usuário escolher 1 ficar repetindo*/
}
/* Consultar convidado por código*/
void consultarConvidado()
{ int i, codigoConsultar, achou, cont;
do
{ imprimeCabecalho();
printf(“\nInforme o codigo do convidado\n\n”);
printf(“\nCodigo: “);
scanf(“%d”,&codigoConsultar);
achou = procuraPorCodigoConvidado(codigoConsultar); /* Utiliza a função de procura*/
if (achou != -1)
mostre(achou);  /* Código procurado, método declarado lá em cima*/
else // produto nao foi encontrado
printf(“\n\n\aTalvez o codigo esteja incorreto, informar novamente!!!!!!\n”);
printf(“\n\nConsultar outro convidado(1-sim/2-nao)? “);
scanf(“%d”,&cont);
} while (cont == 1);
}
// Remover Convidados
void remover()
{  int codigoRemover, i, cont, achou, confirmaRemocao;
do{
imprimeCabecalho();
printf(“\nRemover Convidado\n\n”);
printf(“\nCódigo do Convidado: “);
scanf(“%d”,&codigoRemover);
achou = procuraPorCodigoConvidado(codigoRemover);
if (achou != -1)
{
mostre(achou);
printf(“\nExcluir este convidado da Lista (1-sim/2-nao)? “);
scanf(“%d”,&confirmaRemocao);
if (confirmaRemocao==1) // verifica se quer remover
{
lista[achou] = lista[qtd_convidados];
qtd_convidados–;
printf(“\n\nConvidado banido da festa!!!\n”);
system(“pause”);
}else {
printf(“\n\n\aO convidado nao pode ser excluido!!!\n”);
system(“pause”);
break;
}
system(“pause”);
}
else  // Convidado nao foi encontrado
printf(“\n\naTalvez o codigo informado esteja incorreto, informar outro\n”);
printf(“\n\nRemover outro(1-sim/2-nao)? “);
scanf(“%d”,&cont);
}while (cont == 1);
}
/* Lista os convidados*/
void listagem()
{ int i;
imprimeCabecalho();
printf(“\nLista de Convidados\n”);
printf(“\n\nCodigo    Nome                      Acompanhantes                “);
printf(“\n————————————————————–“);
for(i = 0; i < qtd_convidados ; i++)
printf(“\n%9d         %-20s     %9d                “,
lista[i].codigo_convidado,
lista[i].nome_convidado,
lista[i].qt_convidados);
printf(“\n—————————————————————“);
printf(“\n\nDigite qualquer tecla para sair… “);
getche();
}
/* Dúvida*/
int main(int argc, char *argv[])
{
qtd_convidados =0;
do // tela com o menu do opcoes
{ imprimeCabecalho();
printf(“Opcoes:\n\n”);
printf(”      1- Inserir novo Convidado\n\n”);
printf(”      2- Listagem de Convidados\n\n”);
printf(”      3- Consulta convidado por codigo\n\n”);
printf(”      4- Remover convidado por codigo\n\n”);
printf(”      0- Sair do Programa\n”);
imprimirLinha();
printf(“\n      Informe a Opcao desejada: “);
scanf(“%d”,&escolha);  /* Declarado lá em cima*/
switch(escolha)
{ case 1: inserir(); break;
case 2: listagem(); break;
case 3: consultarConvidado(); break;
case 4: remover(); break;
case 0: break;
default : printf(“\n\a      Opcao Invalida! Tecle enter…”);
getche(); break;
}
} while (escolha != 0); /* opção de saída*/
return 0;
}
