students = [
    {"name":"Timo", "house":"Buddu"},
    {"name":"Alvo", "house":"Kyewi"},
    {"name":"George", "house":"Lwanga"},
    {"name":"Abby", "house":"Buddu"},
    {"name":"Petr", "house":"Kyewi"},
]

houses = set()
for student in students:
        houses.add(student["house"])

for house in sorted(houses):
    print(house)