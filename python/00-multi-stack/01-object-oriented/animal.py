import abc

class Animal(abc.ABC): #abc.ABC torna class abstrata
  
  def __init__(self, nome, idade, cor):
    self._nome = nome #atributo protegido _
    self._idade = idade #atributo protegido _
    self._cor = cor #atributo protegido _   

  @property
  def nome(self):
    return self._nome

  @nome.setter
  def nome(self, nome):
    self._nome = nome



  @property
  def idade(self):
    return self._idade

  @idade.setter
  def idade(self, idade):
    self._idade = idade  



  @property
  def cor(self):
    return self._cor

  @cor.setter   
  def cor(self, cor):
    self._cor = cor 


  @abc.abstractmethod
  def fazer_barulho(self):
    pass #não implementa o metodo