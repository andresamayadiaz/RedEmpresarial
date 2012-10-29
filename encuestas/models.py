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
    tipoempresa = models.CharField("1.- Que tipo de empresa es su negocio?".decode("utf8", "ignore"), max_length=250, choices=(('Moral', 'Moral'), ('Fisica', 'Fisica'), ('Otro', 'Otro')))
    tipoempresaotro = models.CharField('Otro tipo de empresa', max_length=250)
    estabes = models.CharField('2.- Este establecimiento es'.decode("utf8", "ignore"), max_length=250, choices=(('Unico', 'Unico'), ('Sucursal', 'Sucursal')))
    actividad = models.CharField('3.- Cual de las siguientes opciones describe mejor la actividad de este establecimiento?'.decode("utf8", "ignore"), max_length=250, choices=(('Comercio de Mercancias', 'Comercio de Mercancias'), ('Manufactura', 'Manufactura'), ('Preparacion de Alimentos', 'Preparacion de Alimentos'), ('Servicios', 'Servicio'), ('Transporte de Personas y/o Bienes', 'Transporte de Personas y/o Bienes'), ('Construccion', 'Construccion'), ('Credito o Ahorro', 'Credito o Ahorro'), ('Otras Actividades, especifique', 'Otras Actividades, especifique') ))
    actividadotro = models.CharField('Otra actividad', max_length=250)
    
    # General
    camara = models.CharField('4.- Pertenece su empresa a alguna Camara de la Entidad?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    camarasi = models.CharField('5.- Si contesto positivo, A que Camara pertenece?'.decode("utf8", "ignore"), max_length=250)
    camararecibido = models.CharField('6.- Si pertenece a una Camara, ¿A recibido algun curso / taller / servicio / apoyo de la misma?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    
    # Servicios Gratuitos
    creditos = models.CharField('7.- Le gustaria recibir de forma gratuita apoyo en gestiones de Creditos?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    enlaces = models.CharField('8.- Le gustaria recibir de forma gratuita apoyo en Enlaces de Negocios?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    becasestudio = models.CharField('9.- Le gustaria recibir de forma gratuita apoyo en Becas de Estudio para el personal que labora en tu empresa?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    basesdatos = models.CharField('10.- Le gustaria recibir de forma gratuita apoyo con Bases de Datos de interes? (Estudios de Mercado)'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    juridico = models.CharField('11.- Le gustaria recibir de forma gratuita servicio Juridico?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    ventanillaunica = models.CharField('12.- Le gustaria recibir de forma gratuita servicio de Ventanilla Unica?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    censo = models.CharField('13.- Le gustaria recibir de forma gratuita servicio del Censo Empresarial? (Pertenecer a la base de datos del unidades economicas del Municipio)'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    belleza = models.CharField('14.- Le gustaria recibir de forma gratuita cursos (Teorico / Empresarial ) de Belleza?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    modas = models.CharField('15.- Le gustaria recibir de forma gratuita cursos (Teorico / Empresarial ) de Diseño de Modas (Alta Costura)?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    appmoviles = models.CharField('16.- Le gustaria recibir de forma gratuita cursos de Desarrollo de Aplicaciones Moviles?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    salajuntas = models.CharField('17.- Le gustaria recibir de forma gratuita acceso a Salas de Juntas para tu empresa?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    cursoingles = models.CharField('18.- Le gustaria recibir de forma gratuita cursos de Ingles para el personal que labora en tu empresa?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    revista = models.CharField('19.- Le gustaria aparecer de forma gratuita en la Revista Electronica del Municipio? (revista digital para promocion de programas y empresas)'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    econoescala = models.CharField('20.- Le gustaria recibir de forma gratuita los servicio y apoyos para Economias de Escala? (union de varios compradores para recibir costros preferenciales de un proveedor)'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    desproveedores = models.CharField('21.- Le gustaria recibir de forma gratuita apoyo para Desarrollo de Proveedores?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    distintivos = models.CharField('22.- Le gustaria recibir de forma gratuita cursos y apoyo para Distintivo M y Distintivo H?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    
    # Costo de Recuperacion
    felectronica = models.CharField('23.- Le gustaria recibir asesoría de Facturacion Electronica?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    exportacion = models.CharField('24.- Le gustaria recibir asesoría en Exportacion?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    contabilidad = models.CharField('25.- Le gustaria recibir asesoría en Contabilidad?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    estudiosmercado = models.CharField('26.- Le gustaria recibir asesoría y apoyo con Estudios de Mercado para tu Inversion?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    incubadora = models.CharField('27.- Le gustaria recibir asesoria y apoyo bajo el programa Incubadora de Negocios?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    dispagweb = models.CharField('28.- Le gustaria recibir asesoría y apoyo en Diseño de Paginas Web?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    hosting = models.CharField('29.- Le gustaria recibir asesoria y apoyo en Hosting y Dominio en un Servidor?'.decode("utf8", "ignore"), max_length=20, choices=(('Si', 'Si'), ('No', 'No') ))
    
    # Observaciones
    observaciones = models.TextField('Observaciones')
    
    def __unicode__(self):
        return self.nombrenegocio