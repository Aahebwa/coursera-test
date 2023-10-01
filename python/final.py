import pyttsx3

engine = pyttsx3.init()
this = input("Whats this? ")
engine.say(this)
engine.runAndWait()