from turtle import *
vinkel = int(input("Hvor mange grader?"))
while True:
    forward(200 * vinkel / 360)
    left(vinkel)
