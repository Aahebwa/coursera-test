def main():
        display_menu()
        
def display_menu():
    while True:
        choice = input("Do you eat meat(y/n)? ")
        if choice == 'y':  
            print("Here is a meat menu:")
            break
        elif choice == 'n':
            print("Here is a vegeterian menu:")
            break
        else:
            continue
main()
