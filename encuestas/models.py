# -*- coding: utf-8 -*-
from django.db import models

class Puesto(models.Model):
    nombre = models.CharField('Nombre', max_length=250)
    created = models.DateTimeField('Creado', auto_now_add=True)
    modified = models.DateTimeField('Modificado', auto_now=True)
    def __unicode__(self):
        return self.nombre

class Encuesta(models.Model):
	#Generales
    Puesto = models.ForeignKey(Puesto)
    otropuesto = models.CharField('Si es Otro Puesto', max_length=250)
    nombre = models.CharField('Nombre(s)', max_length=250)
    apepaterno = models.CharField('Apellido Paterno', max_length=250)
    apematerno = models.CharField('Apellido Materno', max_length=250)
    nombrenegocio = models.TextField('Nombre del Negocio')
    calle = models.CharField('Calle', max_length=250)
    entrecalles = models.TextField('Entre Calles')
    numero = models.CharField('Numero Exterior', max_length=250)
    interior = models.CharField('No. Interior,Exterior,Edificio', max_length=250)
    telefono = models.CharField('Telefono(s)', max_length=250)
    colonia = models.CharField('Colonia', max_length=250)
    email = models.CharField('E-Mail', max_length=250)
    pweb = models.CharField('Pagina Web', max_length=250)
    created = models.DateTimeField('Creado', auto_now_add=True)
    modified = models.DateTimeField('Ultima Modificacion', auto_now=True)
    
    # Inicial
    tipoempresa = models.CharField(b"1.- ¿Que tipo de empresa es su negocio?", max_length=250, choices=(('Moral', 'Moral'), ('Fisica', 'Fisica'), ('Otro', 'Otro')))
    # todo otro
    estabes = models.CharField(b'2.- Este establecimiento es', max_length=250, choices=(('Unico', 'Unico'), ('Sucursal', 'Sucursal')))
    actividad = models.CharField('3.- ¿Cuál de las siguientes opciones describe mejor la actividad de este establecimiento?', max_length=250, choices=(('Comercio de Mercancías', 'Comercio de Mercancías'), ('Manufactura', 'Manufactura'), ('Preparación de Alimentos', 'Preparación de Alimentos'), ('Servicios', 'Servicio'), ('Transporte de Personas y/o Bienes', 'Transporte de Personas y/o Bienes'), ('Construcción', 'Construcción'), ('Crédito o Ahorro', 'Crédito o Ahorro'), ('Otras Actividades, especifique', 'Otras Actividades, especifique') ))
    # todo otro
    
    # General
    camara = models.CharField('4.- ¿Pertenece su empresa a alguna Cámara de la Entidad?', max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    camarasi = models.CharField('5.- Si contesto positivo, ¿A que Cámara pertenece?', max_length=250)
    camararecibido = models.CharField('6.- Si pertenece a una Cámara, ¿A recibido algún curso / taller / servicio / apoyo de la misma?', max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    
    # Servicios Gratuitos
    creditos = models.CharField('7.- ¿Le gustaría recibir de forma gratuita apoyo en gestiones de Créditos?', max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    enlaces = models.CharField('8.- ¿Le gustaría recibir de forma gratuita apoyo en Enlaces de Negocios?', max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    becasestudio = models.CharField('9.- ¿Le gustaría recibir de forma gratuita apoyo en Becas de Estudio para el personal que labora en tu empresa?', max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    
    # Costo de Recuperacion
    
    # Observaciones
    
    def __unicode__(self):
        return self.nombrenegocio