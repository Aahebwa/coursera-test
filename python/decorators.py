def shame(func):
    def func_wrapper():
        #code before the main code
        print("*cough*")
        func()
        #code after the main code
        print("*cough*")   
    return func_wrapper     


@shame
def question():
    print("can i have some of that")

question()