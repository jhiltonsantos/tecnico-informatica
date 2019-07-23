#include <stdio.h>

void alo(){
	printf("Nova função");
}

int soma(int n1, int n2) {
	return (n1+n2);
	}

main(){
	printf("\nExecutando tarefa!");
	int v1,v2;
	printf("\nDigite N1:");
	scanf ("%d",&v1);
	printf("Digite N2:");
	scanf ("%d",&v2);
	
	int r = soma (v1,v2);
	
	printf("O Resultado da soma eh %d",r);
}
