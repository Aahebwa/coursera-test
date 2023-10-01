nums = [50, 100, 150, 250, 750, 1000]

nums_multiplied = []

for num in nums:
    nums_multiplied.append(num*2)

print(nums_multiplied)

#comprehensions way
nums_multiplied = [ num*2 for num in nums ]
print(nums_multiplied)



vals = [1,2,3,4,5,6,7,8,9,10]

vals_squared = []
for val in vals:
    if val % 2 == 0:
        vals_squared.append(val**2)

print(vals_squared)

#comprehensions way
vals_squared = [val**2 for val in vals if (val % 2 == 0)]
print(vals_squared)
