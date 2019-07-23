#include <stdio.h>
#include <stdlib.h>
main(){
	int n3;
	printf ("Digite o numero:");
	scanf ("%d",&n3);
	int c=n3/100;
	int r=n3%100;
	int d=r/10;
	int u=r%10;
	int resultado=c+d+u;
	printf ("A soma dos algarismos é: %d",resultado);
}
