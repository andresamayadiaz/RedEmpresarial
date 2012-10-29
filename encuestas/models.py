from django.db import models

# Create your models here.

class Puesto(models.Model):
    nombre = models.CharField(max_length=250)
    creado = models.DateTimeField('fecha de creacion')
    def __unicode__(self):
        return self.nombre

class Encuesta(models.Model):
    Puesto = models.ForeignKey(Puesto)
    nombre = models.CharField(max_length=250)
    apepaterno = models.CharField(max_length=250)
    apematerno = models.CharField(max_length=250)
    nombrenegocio = models.TextField()
    calle = models.CharField(max_length=250)
    entrecalles = models.TextField()
    numero = models.CharField(max_length=250)
    interior = models.CharField(max_length=250)
    telefono = models.CharField(max_length=250)
    colonia = models.CharField(max_length=250)
    email = models.CharField(max_length=250)
    pweb = models.CharField(max_length=250)
    def __unicode__(self):
        return self.id + " " + self.nombrenegocio