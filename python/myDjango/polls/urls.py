from django.urls import path
from . import views

urlpatterns = [
    path('', views.hello),
    path('hello/', views.home),
    path('<int:questionId>/', views.detail, name="detail"),
    path('<int:questionId>/results/', views.results, name="results"),
    path('<int:questionId>/vote/', views.votes, name="votes"),
]