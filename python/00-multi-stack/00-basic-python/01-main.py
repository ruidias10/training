#Variaveis
nome_da_variavel = "Variavel"
print(nome_da_variavel)
print(type(nome_da_variavel))

nome_da_variavel = 5
print(nome_da_variavel)
print(type(nome_da_variavel))


#Constantes
NOME_DA_CONSTANTE = "Constante"
print(NOME_DA_CONSTANTE)


#Operadores matemáticos
print(5 + 5.1)


#Operadores comparação
print(5 >= 5.1)
print(10 == "10")


#Operadores lógicos
# not 
# or
# and 


#Estruturas condicionais
idade = 20

if idade < 18:
  print("Criança")
elif idade >= 18 and idade <=60:
  print("Adulto")
else:
  print("Sénior") 


#Estruturas repetição
#for
#while

for i in range(0,5):
  print(i)
else:
  print("O else é executado no final do for")

k = 0
while k <=5:
  print(k) 
  k+= 1
else:
  print("O else é executado no final do while") 


#Funções
def calcular_idade(idade):
  if idade < 18:
    return "Criança"
  elif idade >= 18 and idade <=60:
    return "Adulto"
  else:
    return "Sénior"

print(calcular_idade(10))
print(calcular_idade(20))   
print(calcular_idade(idade=90))