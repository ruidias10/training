from cao import Cao
from gato import Gato

#cao = Cao("Pudim", 4, "Preto")
cao = Cao(nome="Pudim", idade=4, cor="Preto", trela=True)
print(cao.nome)
print(cao.idade)
print(cao.cor)
print(cao.fazer_barulho())

print(cao.trela) #get
cao.trela = False #set
print(cao.trela) #get

print("\n---\n")

gato = Gato(nome="Mimi", idade=1, cor="Branco")
print(gato.nome)
print(gato.idade)
print(gato.cor)
print(gato.fazer_barulho())