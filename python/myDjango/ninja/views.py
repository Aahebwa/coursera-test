from django.http import HttpResponse
from django.shortcuts import render
from .models import Article

# Create your views here.
def articleList(request):
    articles = Article.objects.all().order_by('date')
    return render(request, 'templates/index.html', { 'articles':articles })

def articleDetail(request, slug):
    # return HttpResponse(slug)
    article = Article.objects.get(slug=slug)
    return render(request, 'templates/articles/index.html', {'article':article})

def home(request):
    return render(request, 'baseIndex.html')