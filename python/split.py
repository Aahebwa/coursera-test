import re

name = input("Enter Your Name:").strip().title()

if match := re.search(r"^(.+), ?(.+)$" ,name):
    name = match.group(2) + " " + match.group(1)

print(name)