import csv

with open("favorites.csv", 'r') as file:
    reader = csv.reader(file)
    for row in reader:
        favorite = row[2]
        python, c, scratch = 0,0,0
        if favorite == 'Python':
            python += 1
        elif favorite == 'C':
            c += 1
        elif favorite == 'Scratch':
            scratch += 1
        #print(favorite)

print(f'python:{python}')
print(f'c:{c}')
print(f'Scratch:{scratch}')





# with open("favorites.csv", "r"):
#     reader = csv.DictReader(file)
#     for row in reader:
#         favorite = row["language"]
#         print(favorite)