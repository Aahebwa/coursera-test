def main():
    x = get_int()
    print(x)
    
def get_int():
    while True:
        try:
            return int(input("Whats x? "))

        except ValueError:
            #pass
            print("x is not an integer")

        # else:
        #     return x
        #     break

main()