from encuestas.models import Puesto, Encuesta
from django.contrib import admin

class EncuestaAdmin(admin.ModelAdmin):
	#fields = ['nombrenegocio', 'creado']
	list_display = ('id', 'nombrenegocio', 'created')
	list_filter = ['modified']
	search_fields = ['id']
	readonly_fields = ('created', 'modified')
	fieldsets = [
        ('Datos Generales',               {'fields': ['nombre', 'apepaterno', 'apematerno', 'nombrenegocio', 'Puesto']}),
        ('Cuestionario Inicial', {'fields': []}),
        ('Cuestionario General', {'fields': []}),
        ('Cuestionario Servicios Gratuitos', {'fields': []}),
        ('Cuestionario Servicios Costo Recuperacion', {'fields': []}),
        ('Observaciones', {'fields': []}),
    ]

admin.site.register(Puesto)
admin.site.register(Encuesta, EncuestaAdmin)