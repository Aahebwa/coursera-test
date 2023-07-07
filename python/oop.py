# class item():
#     def total_price(self,x,y):
#         return x * y

# item1 = item()
# item1.name = "licha"
# item1.price = 60
# item1.quantity = 10
# print(item1.total_price(item1.price, item1.quantity))

# item2 = item()
# item2.name = "rapha"
# item2.price = 50
# item2.quantity = 9
# print(item2.total_price(item2.price, item2.quantity))

# print(type(item1))
# print(type(item1.price))
# print(type(item1.quantity))


#modified
class item():
    def __init__(self, name: str, price: float, quantity=0):
        
        #validation
        assert price >= 0, f"price {price} is not valid"
        assert quantity >= 0, f"quantity {quantity} is not valid"

        #assign values
        self.name = name
        self.price = price
        self.quantity = quantity

item1 = item("licha", 60, 10)

item2 = item("rapha", 50, 9)

item3 = item("victor", 30, 6)

print(item1.name)
print(item2.name)
print(item3.name)

print(item1.price)
print(item2.price)
print(item3.price)

print(item1.quantity)
print(item2.quantity)
print(item3.quantity)