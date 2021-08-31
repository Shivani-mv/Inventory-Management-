from django.db import models

# Create your models here.
class stock(models.Model):
    id = models.BigAutoField(primary_key=True)
    ac = models.IntegerField(default="")
    cctv = models.IntegerField(default="")
    fire_alarm = models.IntegerField(default="")
    inverters = models.IntegerField(default="")
    counting_machine = models.IntegerField(default="")
    tv = models.IntegerField(default="")

class cctv(models.Model):
    id = models.BigAutoField(primary_key=True)
    company = models.CharField(max_length=100,default="")
    model = models.CharField(max_length=100,default="")
    price = models.IntegerField(default="")
    available = models.IntegerField(default="")
    sold = models.IntegerField(default="")

    def __str__(self):
        return self.model


class fire_alarm(models.Model):
    id = models.BigAutoField(primary_key=True)
    company = models.CharField(max_length=100,default="")
    model = models.CharField(max_length=100,default="")
    price = models.IntegerField(default="")
    available = models.IntegerField(default="")
    sold = models.IntegerField(default="")

class inverters(models.Model):
    id = models.BigAutoField(primary_key=True)
    company = models.CharField(max_length=100,default="")
    model = models.CharField(max_length=100,default="")
    price = models.IntegerField(default="")
    available = models.IntegerField(default="")
    sold = models.IntegerField(default="")

class ac(models.Model):
    id = models.BigAutoField(primary_key=True)
    company = models.CharField(max_length=100,default="")
    model = models.CharField(max_length=100,default="")
    price = models.IntegerField(default="")
    available = models.IntegerField(default="")
    sold = models.IntegerField(default="")

class tv(models.Model):
    id = models.BigAutoField(primary_key=True)
    company = models.CharField(max_length=100,default="")
    model = models.CharField(max_length=100,default="")
    price = models.IntegerField(default="")
    available = models.IntegerField(default="")
    sold = models.IntegerField(default="")

class counting_machine(models.Model):
    id = models.BigAutoField(primary_key=True)
    company = models.CharField(max_length=100,default="")
    model = models.CharField(max_length=100,default="")
    price = models.IntegerField(default="")
    available = models.IntegerField(default="")
    sold = models.IntegerField(default="")