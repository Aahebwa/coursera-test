from django.urls import path
from . import views

app_name = "accounts"

urlpatterns = [
    path('register/', views.registerView, name="signup"),
    path('login/', views.loginView, name="login"),
    path('logout/', views.logoutView, name="logout"),
    path('create/', views.createArticle, name="create"),
]