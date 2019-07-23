d = {}
while True:
    while True:
        matricula = int(input("Matrícula: "))
        if(matricula in d):
            print("\n\n\nMatrícula já inserida\n\n\n")
            pass
        else:
            break
    nome = input("Digite o Nome: ")
    nota = float(input("Digite a Nota: "))
    d[matricula] = [nome, nota]

    resposta = int(input("\nDeseja continuar 1-S, 2-N? "))

    if(resposta == 2):
        break
procurar = int(input("\n\nDigite a matrícula: \n"))

if(procurar in d):
    print("\nDados: ", d[procurar])
    pass
else:
    print("\n\nMatrícula não encontrada!!!")
