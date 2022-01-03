from animal import Animal

class Cao(Animal):

  def __init__(self, nome, idade, cor, trela):
    super().__init__(nome, idade, cor)
    self.__trela = trela #atributo privado __

  @property
  def trela(self): #getter
    return self.__trela

  @trela.setter
  def trela(self, trela): #setter
    self.__trela = trela

  def fazer_barulho(self):
    return "Au Au"