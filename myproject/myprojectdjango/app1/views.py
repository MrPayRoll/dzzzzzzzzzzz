from django.shortcuts import render
from .models import *
from django.contrib.auth.forms import AuthenticationForm

def index_page(request):
    qwerty = Otkyda.objects.all()
    return render(request,'index.html', {'kv':qwerty})


def about(request):
    return render(request,'sales.html',)

def vhod(request):
    return render(request,'vhod.html',)
