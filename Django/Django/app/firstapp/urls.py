from django.urls import path

from . import views

urlpatterns = [
    path('', views.vistaIndex, name='index'),
    path('cotizador', views.vistaCotizador, name='cotizador'),
    #path('uno',views.vista,name='vista'),
    #path('dos',views.vista2,name='vista2'),
]
