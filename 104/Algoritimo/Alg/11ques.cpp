#include<stdio.h>
#include<stdlib.h>
main(){
	float p1,p2,p3;
	printf("Preco do produto 1:");
	scanf("%f",&p1);
	printf("Preco do produto 2:");
	scanf("%f",&p2);
	printf("Preco do produto 3:");
	scanf("%f",&p3);
	if(p1<p2){
		printf("Produto 1 mais barato");
	}
	else if(p1<p3){
		printf("Produto 1 mais barato");
	}
	else if(p2<p1){
		printf("Produto 2 mais barato");
	}
	else if(p2<p3){
		printf("Produto 2 mais barato");
	}
	else if(p3<p1){
		printf("Produto 3 mais barato");
	}
	else{
		printf("Produto 3 mais barato");
	}
}
