from random import shuffle

def shuffled(word):
    wordList = list(word)
    shuffle(wordList)
    return ''.join(wordList)

words = ['potato', 'matooke', 'rice', 'flour']
anagram = []

#THE LOOP WAY
# for word in words:
#     anagram.append(shuffled(word))

# print(anagram)

#THE MAP WAY
# print(list(map(shuffled, words)))

#LIST COMPREHENSIONS
print([ shuffled(word) for word in words ])