from tkinter import *

janela= Tk()

def click1():
    if(str(ed1.get()).isnumeric()):
        numero = int (ed1.get())
        if numero!=0:
            lb2["text"]=numero

            
janela.geometry("500x500+300+300")
janela.title("Exemplo")
janela["bg"]="green"

lb=Label(janela,text="digite o valor:", bg="green")
lb.place(x=10,y=20)



ed1=Entry(janela, bg="blue")
ed1.place(x=155,y=20)

lb=Label(janela,text="o maior valor é igual a:", bg="orange")
lb.place(x=10,y=150)
lb2=Label(janela,text="", bg="orange")
lb2.place(x=120,y=150)

click1.mainloop()
