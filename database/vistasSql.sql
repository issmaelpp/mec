/* Ejemplo de inner join y como moverse entre las tablas */
SELECT cla.id, 
		cla.persona_id, 
        cla.categoria_id, 
        per.apellido, 
        per.nombre, 
        cat.codigo,
        amb.descripcion
FROM mec.clasificaciones AS cla
INNER JOIN mec.personas AS per
	ON cla.persona_id = per.id
INNER JOIN mec.categorias AS cat
	ON cla.categoria_id = cat.id
INNER JOIN mec.subdominios AS sub
	ON cat.subdominio_id = sub.id
INNER JOIN mec.ambitos AS amb
	ON sub.ambito_id = amb.id
WHERE amb.descripcion = "Libros y Prensa";