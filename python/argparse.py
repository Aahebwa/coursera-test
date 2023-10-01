import argparse

parser = argparse.ArgumentParser(description="Meows N times")
paeser.add_argument("-n", default=1, help="number of times", type=int)
args = parser.parse_args()

for _ in range(args.n):
    print("meow")