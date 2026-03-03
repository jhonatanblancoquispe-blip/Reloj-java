hora = int(input("Ingrese Hora: "))
minuto = int(input("Ingrese Minuto: "))

if minuto == 0:
    hora_espejo = 12 - hora
    minuto_espejo = 0
else:
    minuto_espejo = 60 - minuto
    hora_espejo = 11 - hora

if hora_espejo < 0:
    hora_espejo += 12

print("L a hora es : ",hora_espejo, ":", minuto_espejo)
