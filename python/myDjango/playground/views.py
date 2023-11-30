from django.shortcuts import render, redirect
from django.http import HttpResponse
from .models import Game
from django.contrib.auth.forms import UserCreationForm, AuthenticationForm
from django.contrib.auth import login, logout
from django.contrib.auth.decorators import login_required
from . import forms
from .forms import CreateArticle

# Create your views here.
def sayHello(request):
    return HttpResponse('Hello, world')

def about(request):
    games = Game.objects.all().order_by('date')
    return render(request, 'templates/index.html', {'games':games} )

def register_view(request):
    if request.method == 'POST':
        form = UserCreationForm(request.POST)
        if form.is_valid():
            user = form.save()
            # log the user in
            login(request, user)
            # redirect the user
            return render(request, 'templates/index.html')

    else:
        form = UserCreationForm()

    return render(request, 'templates/form.html', { 'form':form }) 


def login_view(request):
    if request.method == 'POST':
        form = AuthenticationForm(data=request.POST)
        if form.is_valid():
            #log the user in
            user = form.get_user()
            login(request, user)

            if 'next' in request.POST:
                return redirect(request.POST['next'])
            else:
                return render(request, 'templates/index.html')

    else:
        form = AuthenticationForm

    return render(request, 'templates/login.html', {'form':form}) 

@login_required(login_url="/playground/login/")
def createView(request):
    if request.method == 'POST':
        form = CreateArticle(request.POST, request.FILES)
        if form.is_valid():
            # save to db
            instance = form.save(commit=False)
            instance.author = request.user
            instance.save()
            return render(request, 'templates/index.html')
    else:
        form = CreateArticle()
    return render(request, 'templates/create.html', { 'form':form })
    