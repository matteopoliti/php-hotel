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

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body data-bs-theme="dark">
    <div class="p-3">
        <table class="table">
            <thead>
                <tr>
                    <?php

                    foreach (array_keys($hotels[0]) as $key) {
                        echo "<th>" . ucfirst($key) . "</th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                foreach ($hotels as $element) :
                ?>
                    <tr>
                        <td><?php echo $element['name']; ?></td>
                        <td><?php echo $element['description']; ?></td>
                        <td><?php echo $element['parking'] ? 'Yes' : 'No'; ?></td>
                        <td><?php echo $element['vote']; ?></td>
                        <td><?php echo $element['distance_to_center']; ?> km</td>
                    </tr>
                <?php
                endforeach
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>