import sys

print("Hello world")

#a = 5
#b = "string"
#c = True

# print(c)

# n = int(input("number: "))

# if n > 0:
#     print(f"{n} is positive")

# elif n < 0:
#     print(f"{n} is negative")

# else:
#     print(f"{n} is zero")

#list
# names = ["harry", "aaron", "luke", "licha"]

# names.append("victor")
# names.sort()
# print(len(names))

# print(names)

# #set
# s = set()
# s.add(1)
# s.add(2)
# s.add(4)

# s.remove(2)
# print(len(s))

# print(s)

# #loops
# for i in range(7):
#     print(i)

# for name in names:
#     print(name)

# def square(x):
#     return x*x

try:
    val1 = int(input("x: "))
    val2 = int(input("y: "))
except ValueError:
    print("Error: invalid input")
        
try:
    result = val1/val2
except ZeroDivisionError:
    print("error: cannot divide by zero")
    sys.exit(1)

print(f"{val1} / {val2} = {result}")
