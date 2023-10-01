def main():
    x = get_number()
    meow(x)

def get_number():
    while True:
        number = int(input("Whats x? "))
        if number > 0:
            return number
        
def meow(n):
    for i in range(n):
        print("Meow")

main()