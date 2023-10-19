from django.db import models

# Create your models here.
class Game(models.Model):
    title = models.CharField(max_length=100)
    Sport = models.TextField()
    captain = models.TextField()
    date = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return self.captain
