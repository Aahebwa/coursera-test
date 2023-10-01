def main():
    x = int(input("Whats x? "))
    print_square(x)

def print_square(size):
    for i in range(size):
        for j in range(size):
            print("#", end="")
        print()

main()
