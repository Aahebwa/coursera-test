from django.urls import path
from . import views
from django.conf import settings
from django.conf.urls.static import static
from django.contrib.staticfiles.urls import staticfiles_urlpatterns

app_name = "playground"

urlpatterns = [
    path('about/', views.about),
    path('hello/', views.sayHello),
    path('register/', views.register_view, name="sigup"),
    path('login/', views.login_view, name="login"),
    path('create/', views.createView,name="create"),
]

if settings.DEBUG:
# urlpatterns += staticfiles_urlpatterns()
    urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)
