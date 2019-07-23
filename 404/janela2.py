Python 3.6.5 (v3.6.5:f59c0932b4, Mar 28 2018, 16:07:46) [MSC v.1900 32 bit (Intel)] on win32
Type "copyright", "credits" or "license()" for more information.
>>> from tkinter import *
>>> janela=Tk()
>>> maior=0
>>> def btn_click():
    global maior
    if (str(ed1.get()).isnumeric()):
       valor = int (ed1.get())
       if valor>maior:
           maior = valor
       if valor==0:
           janela.geometry("500x500+300+300")
           janela.title("Exemplo")
           janela["bg"]="green"
           lb=Label(janela, text="o maior é igual a ", bg="orange")
           lb.place(x=10,y=150)
           lb2=Label(janela, text=maior, bg="orange")
           lb2.place(x=120,y=150)

>>> janela.geometry("500x500+300+300")
''
>>> janela.title("EXEMPLO")
''
>>> janela["bg"]="green"
>>> lb=Label(janela,text="Digite o valor:", bg="green")
>>> lb.place(x=10,y=20)
>>> ed1=Entry(janela,bg="blue")
>>> ed1.place(x=155,y=20)
>>> bt=Button(janela,text="Digite o Numero",width=20,command=btn_click,bg="red")
>>> bt.place(x=175,y=90)
>>> 
>>> janela.mainloop()
