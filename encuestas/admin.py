from encuestas.models import Puesto, Encuesta
from django.contrib import admin

class EncuestaAdmin(admin.ModelAdmin):
	#fields = ['nombrenegocio', 'creado']
	list_display = ('id', 'nombrenegocio', 'created')
	list_filter = ['modified']
	search_fields = ['id']
	readonly_fields = ('created', 'modified')
	fieldsets = [
        ('Datos Generales',               {'fields': ['nombre', 'apepaterno', 'apematerno', 'nombrenegocio', 'Puesto'], 'classes': ['wide']}),
        ('Cuestionario Inicial', {'fields': ['tipoempresa', 'tipoempresaotro', 'estabes', 'actividad', 'actividadotro'], 'classes': ['wide']}),
        ('Cuestionario General', {'fields': ['camara', 'camarasi', 'camararecibido'], 'classes': ['wide']}),
        ('Cuestionario Servicios Gratuitos', {'fields': ['creditos', 'enlaces', 'becasestudio', 'basesdatos', 'juridico', 'ventanillaunica', 'censo', 'belleza', 'modas', 'appmoviles', 'salajuntas', 'cursoingles', 'revista', 'econoescala', 'desproveedores', 'distintivos'], 'classes': ['wide']}),
        ('Cuestionario Servicios Costo Recuperacion', {'fields': ['felectronica', 'exportacion', 'contabilidad', 'estudiosmercado', 'incubadora', 'dispagweb', 'hosting'], 'classes': ['wide']}),
        ('Observaciones', {'fields': ['observaciones'], 'classes': ['wide']}),
    ]

admin.site.register(Puesto)
admin.site.register(Encuesta, EncuestaAdmin)