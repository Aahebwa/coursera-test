class Planet:

    def __init__(self):
        self.name = "Earth"
        self.radius = 3.14
        self.gravity = 200

    def orbit(self):
        return f"{self.name} is in {self.gravity}"

earth = Planet()
print(earth.name)
print(earth.radius)
print(earth.gravity)    
print(earth.orbit())
