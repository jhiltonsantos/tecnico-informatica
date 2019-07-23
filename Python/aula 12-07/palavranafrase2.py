#forçando e transformando a frase e d em variaveis globais
def ler():
    #global frase
    frase = input("Digite uma frase: ")
    frase = frase.split()
    return frase

def inserir(frase):
    #global d
    d={}
    for p in frase:
        if p not in d:
            d[p]=1
        else:
            d[p] +=1

    print(d)

f=ler()
inserir(f)
