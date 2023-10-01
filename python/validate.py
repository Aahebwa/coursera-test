import re
email = input("Whats your Email? ").strip()

if re.search(r"^[a-zA-Z0-9_]+@[a-zA-Z0-9_]+\.(com|edu|net)$", email):
    print("valid")
else:
    print("invalid")