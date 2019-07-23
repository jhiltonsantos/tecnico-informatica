#include<stdio.h>
#include<stdlib.h>
main(){
	float vdolar,dolar;
	printf ("Digite o valor do dolar comercial hoje:");
	scanf ("%f",&vdolar);
	printf ("Digite o valor em dolar:");
	scanf ("%f",&dolar);
	float real=vdolar*dolar;
	printf("O valor em dolares e: %2.f",real);
	
}
