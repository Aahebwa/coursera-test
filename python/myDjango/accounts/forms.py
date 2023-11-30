from django import forms
from .models import Victony

class CreateArticle(forms.ModelForm):
    class Meta:
        model = Victony
        fields = ['title', 'slug']
        exclude = ['creator']