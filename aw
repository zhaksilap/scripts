from pynput.mouse import Button, Controller

import time

import webbrowser

import random



m = Controller()


while True:

    #push "Mine" button

 m.position = (763, 758)

 m.press(Button.left)

 m.release(Button.left)

 m.press(Button.left)

 m.release(Button.left)

 time.sleep(random.uniform(120, 135))

    #push "Claim" button

 m.position = (625, 546)

 m.press(Button.left)

 m.release(Button.left)

 m.press(Button.left)

 m.release(Button.left)

 time.sleep(random.uniform(20, 30))

    #push "approve" button

 m.position = (366, 742)

 m.press(Button.left)

 m.release(Button.left)

 m.press(Button.left)

 m.release(Button.left)

 time.sleep(random.uniform(45, 55))

    #push "Mining hub" button

 m.position = (438, 695)

 m.press(Button.left)

 m.release(Button.left)

 m.press(Button.left)

 m.release(Button.left)

 time.sleep(random.uniform(135, 145))
