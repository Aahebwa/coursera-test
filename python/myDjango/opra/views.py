from django.shortcuts import render
from .models import Opra 
# Create your views here.

# def hello(request):
#     return HttpResponse("Hello, world")

# def about(request):
#     return render(request, 'templates/index.html', {'name':'Tim'})

def opra(request):
     opras = Opra.objects.all()
     return render(request, 'templates/index.html')