grades = ['A', 'A', 'F', 'B', 'C', 'F']

gradesFiltered = []
for grade in grades:
    if grade != 'F':
        gradesFiltered.append(grade)

# print(gradesFiltered)

# print([ grade for grade in grades if grade != 'F' ])

def removeFails(grade):
    return grade != 'F'

print(list(filter(removeFails, grades)))