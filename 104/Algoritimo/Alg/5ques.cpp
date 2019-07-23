#include<stdio.h>
#include <stdlib.h>
main(){
	float kh;
	printf ("Digite a velocidade em k/h:");
	scanf ("%f",&kh);
	float ms=kh/3.6;
	printf ("A velocidade em m/s e: %3.f",ms);
	
}
