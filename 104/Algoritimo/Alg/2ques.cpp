#include<stdio.h>
#include<stdlib.h>
main(){
	int horas,minutos;
	printf("Digite o valor em horas: ");
	scanf("%d",&horas);
	printf("Digite o valor em minutos: ");
	scanf("%d",&minutos);
	int mt=horas*60+minutos;
	printf("O valor total em minutos é: %d",mt);
}
