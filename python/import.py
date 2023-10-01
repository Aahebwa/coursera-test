import random

coin = random.choice(["Heads", "Tails"])
print(coin)

number = random.randint(1,10)
print(number)

cards = ["King", "Jack", "Ace", "Queen"]
random.shuffle(cards)
for card in cards:
    print(card)