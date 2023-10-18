<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

mysqli_select_db($db,'moviesite') or die(mysql_error($db));

$query = <<<ENDSQL
INSERT INTO reviews
    (review_movie_id, review_date, reviewer_name, review_comment,
        review_rating)
VALUES 
    (2, "2023-09-28", "Perico Martin", "Es una emocionante película de ciencia ficción 
	que te llevará a un viaje a través de las estrellas", 3),
    (2, "2023-09-29", "Laura Rodríguez", "Una obra maestra del cine que te dejará sin aliento", 5),
    (2, "2022-10-11", "Iker Casillas", "Una película de aventuras llena de acción y adrenalina", 5),
    (3, "2023-09-28", "Perico Martin", "Un drama épico que te transportará a otro mundo", 1),
    (3, "2023-10-23", "Carlos Sánchez", "Un thriller emocionante con giros inesperados en cada esquina", 2),
    (3, "2023-10-11",  "Ana Pérez", "Una conmovedora historia de amor que te hará llorar", 5),
    (1, "2023-09-28", "Maria Coces", "Si te gustan las películas de suspense, 
	esta es una opción excelente", 4),
    (1, "2023-10-23", "Jose Luis", "Una película de misterio que te mantendrá adivinando hasta el final", 4),
    (1, "2023-10-11", "Iker Casillas", "Una comedia hilarante que te sacará carcajadas", 2);
ENDSQL;

mysqli_query($db, $query) or die(mysqli_error($db));

echo 'Reseñas añadidas correctamente';
?>
