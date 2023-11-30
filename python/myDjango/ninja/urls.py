from django.urls import path
from django.urls import re_path
from . import views
from django.contrib.staticfiles.urls import staticfiles_urlpatterns
from django.conf.urls.static import static
from django.conf import settings

app_name = 'ninja'

urlpatterns = [
    path('home/', views.home),
    path('about/', views.articleList, name='list'),
    re_path(r'^(?P<slug>[\w-]+)/$', views.articleDetail, name='detail'),
]

urlpatterns += staticfiles_urlpatterns()

urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)