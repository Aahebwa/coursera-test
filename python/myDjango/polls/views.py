from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
def hello(request):
    return HttpResponse("Hello, world. This is our homepage!")

def home(request):
    return render(request, 'index.html', { 'user':'Tim' })

def detail(request, questionId):
    return HttpResponse("you are looking at question %s" % questionId)

def results(request, questionId):
    return HttpResponse("You are looking at the results of question %s" % questionId)

def votes(request, questionId):
    return HttpResponse("You are voting on question %s " % questionId)