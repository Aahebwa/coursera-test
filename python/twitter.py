import re

url = input("Enter Twitter URL: ").strip()

matches = re.search(r"^(https?://)?twitter\.com/(.+)$", url)

if matches:
    print(f"Username: {matches.group(2)}")