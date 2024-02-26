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

$selected_parking = isset($_GET['parking']) ? $_GET['parking'] : '';
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
        <div class="mb-4">
            <form action="index.php" method="get">
                <label for="parking" class="form-label">Parking</label>
                <select class="form-select form-select mb-3" id="parking" name="parking">
                    <option value="" selected>All Hotels</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                <button type="submit" class="btn btn-secondary">Cerca</button>
            </form>

        </div>
        <div>

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

                    foreach ($hotels as $element) {
                        if ($selected_parking === '' || ($selected_parking === 'yes' && $element['parking']) || ($selected_parking === 'no' && !$element['parking'])) {
                    ?>
                            <tr>
                                <td><?php echo $element['name']; ?></td>
                                <td><?php echo $element['description']; ?></td>
                                <td><?php echo $element['parking'] ? 'Yes' : 'No'; ?></td>
                                <td><?php echo $element['vote']; ?></td>
                                <td><?php echo $element['distance_to_center']; ?> km</td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>