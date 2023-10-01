quotes = [
    '\n All i see is python',
    '\n I dream in python',
    '\n Python is the real deal'
]

with open('names.txt', 'a') as write_file:
    write_file.writelines(quotes)