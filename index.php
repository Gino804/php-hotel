<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <form class="mt-5 d-flex align-items-center" action="">
            <label for="parking-filter" class="form-check-label pe-2">Parcheggi necessari:</label>
            <input type="checkbox" class="form-check-input" id="parking-filter" name="parking-filter">

            <button type="submit" class="btn btn-primary ms-3">Filtra</button>
        </form>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Parcheggio</th>
                    <th>Valutazione</th>
                    <th>Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel) : ?>
                    <?php if (isset($_GET['parking-filter'])) : ?>
                        <?php if ($hotel['parking']) : ?>
                            <tr>
                                <?php foreach ($hotel as $key => $value) : ?>
                                    <td>
                                        <?= $key == 'parking' ? 'Sì' : $value ?>
                                    </td>
                                <?php endforeach ?>
                            </tr>
                        <?php endif ?>
                    <?php else : ?>
                        <tr>
                            <?php foreach ($hotel as $key => $value) : ?>
                                <td>
                                    <?php
                                    if ($key == 'parking') {
                                        echo $value ? 'Sì' : 'No';
                                    } else echo $value;
                                    ?>
                                </td>
                            <?php endforeach ?>
                        </tr>
                    <?php endif ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>