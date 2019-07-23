
def ler():
frase = input("Digite uma frase: ")
frase = frase.split()

def inserir():
d={}
for p in frase:
    if p not in d:
        d[p]=1
    else:
        d[p] +=1

print(d)

ler()
inserir()
