name = input("Enter your Name: ")

match name:
    case "Timothy" | "Alvo" | "Mike" | "Jordan":
        print("Buddu")
    case "Harry":
        print("Mukudde")
    case "Draco":
        print("Kyewalya")
    case _:
        print("Who?")