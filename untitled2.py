# -*- coding: utf-8 -*-
"""
Created on Tue Jan  7 18:09:45 2020

@author: user
"""


class Telefon():
    name=''
    color=''
    size=0
    memory=0
   
    def __init__(self,n,c,s,m):
        self.name=n
        self.color=c
        self.size=s
        self.memory=m
       
    def display(self):
        print('Телефон: марка: {}; цвет: {}; размер: {} см; память: {} гб.'.format(self.name, self.color, self.size, self.memory))
       

newTelefon=Telefon('Samsung', 'Blue', 40, 32)
newTelefon.display()

newTelefon=Telefon('Sony', 'Black', 35, 16)
newTelefon.display()

class Apple(Telefon):
    hear=None
    def setHear(self, is_no=True):
        self.hear='no' if is_no else 'yes'
    def whichHear(self):
        return self.hear

Apple1=Apple('Iphone', 'малиновый', 30, 512)
Apple1.setHear()

print(f'Марка: {Apple1.name}\n'
      f'цвет: {Apple1.color}\n'
      f'размер: {Apple1.size}\n'
      f'Память: {Apple1.memory}\n'
      f'наушники есть: {Apple1.whichHear()}\n')


class Huawei(Telefon):
    two_sim=None
    def setTwo_sim(self, is_yes=True):
        self.two_sim='yes' if is_yes else 'no'
    def whichTwo_sim(self):
        return self.two_sim

Huawei1=Huawei('B500', 'Gold', 37, 256)
Huawei1.setTwo_sim()

print(f'Марка: {Huawei1.name}\n'
      f'цвет: {Huawei1.color}\n'
      f'размер: {Huawei1.size}\n'
      f'Память: {Huawei1.memory}\n'
      f'две сим карты: {Huawei1.whichTwo_sim()}\n')













