from django import forms
from . import models

class CreateArticle(forms.ModelForm):
    class Meta:
        model = models.Game
        fields = ['title', 'Sport', 'captain', 'thumb']
        exclude = ['author']