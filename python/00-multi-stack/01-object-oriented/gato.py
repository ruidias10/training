from animal import Animal

class Gato(Animal):

  def __init__(self, nome, idade, cor):
    super().__init__(nome, idade, cor)

  def fazer_barulho(self):
    return "Miau"