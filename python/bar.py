class Tab:
    menu = {
        "beer": 3000,
        "stake": 2000,
        "ice": 1200,
        "wine": 5000,
        "dessert": 4000,
    }

    def __init__ (self):
        self.total = 0
        self.items = []

    def add(self, item):
        self.items.append(item)
        self.total += self.menu[item]

    def bill(self):
        total = self.total

        print("Liva Cafe and Bar")
        for item in self.items:
            print(f"{item:20} shs{self.menu[item]}")
        print(f'{"Total":20} {total}')

    def customer(self, amount):
        amount -= self.total

        print(f'{"Change:":20} shs{amount}')
