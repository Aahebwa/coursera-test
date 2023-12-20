from django.shortcuts import render, redirect
from django.contrib.auth.forms import UserCreationForm, AuthenticationForm
from django.contrib.auth import login, logout
from django.contrib.auth.decorators import login_required
from django.http import HttpResponse
from .forms import CreateArticle
from . import models

# Create your views here.
def registerView(request):
    if request.method == 'POST':
        form = UserCreationForm(request.POST)
        if form.is_valid():
            user = form.save()
            # log the user in
            login(request, user)
            return render(request, 'templates/accounts/indexa.html')
        
        
    else:
        form = UserCreationForm

    return render(request, 'templates/accounts/index.html', { 'form':form })


def loginView(request):
    if request.method == 'POST':
        form = AuthenticationForm(data=request.POST)
        if form.is_valid():
            #log the user in
            user = form.get_user()
            login(request, user)
            if 'next' in request.POST:
                return redirect(request.POST['next'])
            else:
                return render(request, 'templates/accounts/indexa.html')
    else:
        form = AuthenticationForm

    return render(request, 'templates/accounts/login.html', { 'form':form })

def logoutView(request):
    if request.method == 'POST':
        logout(request)
        return render(request, 'templates/accounts/logout.html')
    
@login_required(login_url='/accounts/login/')
def createArticle(request):
    if request.method == 'POST':
        form = CreateArticle(request.POST)
        if form.is_valid():
            # save to db
            instance = form.save(commit=False)
            instance.author = request.user
            instance.save()
            victony = models.Victony.objects.all().order_by('date')
            return render(request, 'templates/accounts/home.html', { 'victonys':victony })
    else: 
        form = CreateArticle()
    return render(request, 'templates/accounts/create.html', {'form':form})