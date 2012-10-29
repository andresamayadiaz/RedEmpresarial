from encuestas.models import Puesto, Encuesta
from django.contrib import admin

class EncuestaAdmin(admin.ModelAdmin):
	#fields = ['nombrenegocio', 'creado']
	list_display = ('id', 'nombrenegocio', 'creado')
	list_filter = ['creado']
	search_fields = ['id']
	fieldsets = [
        ('Datos Generales',               {'fields': ['nombre', 'apepaterno', 'apematerno', 'nombrenegocio', 'Puesto']}),
        ('Cuestionario Inicial', {'fields': []}),
        ('Cuestionario General', {'fields': []}),
        ('Cuestionario Servicios Gratuitos', {'fields': []}),
        ('Cuestionario Servicios Costo Recuperacion', {'fields': []}),
        ('Observaciones', {'fields': ['creado']}),
    ]

admin.site.register(Puesto)
admin.site.register(Encuesta, EncuestaAdmin)