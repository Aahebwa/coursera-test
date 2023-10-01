def house_count(dictionary):
    houses = list(dictionary.values())
    for house in set(houses):
        count = houses.count(house)
        print(f"There is {count} member(s) {house} house")

my_dict = {}

while True:
    ky = input("Enter your name: ")
    val = input("Enter your house: ")

    my_dict[ky] = val
    another = input("Enter more values?(y/n): ")
    if another == 'y':
        continue
    else:
        break

for i in my_dict:
    print(my_dict[i])

house_count(my_dict)