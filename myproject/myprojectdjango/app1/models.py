from django.db import models
class Otkyda(models.Model):
    name = models.CharField(max_length=10)
    names = models.CharField(max_length=10)
    data_tyda = models.DateField()
    data_otyda = models.DateField()
    pas = models.IntegerField(max_length=5)
