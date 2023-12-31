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
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
     <div class="row">
         <div class="col-12">
             <h1 class="mb-3 text-center fw-bold">
                     Hotels
                </h1>

                <table class="table table-striped table-hoverp-5 ">
                    <thead>
                        <tr>
                            <th scope="col">name</th>
                            <th scope="col">description </th>
                            <th scope="col">parking</th>
                            <th scope="col">vote</th>
                            <th scope="col">distance to center</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($hotels as $hotel) { ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $hotel['name'] ?>
                                </th>
                                <td>
                                    <?php echo $hotel['description'] ?>
                                </td>
                                <td>
                                    <?php echo $hotel['parking'] ?>
                                </td>
                                <td>
                                    <?php echo $hotel['vote'] ?>
                                </td>
                                <td>
                                    <?php echo $hotel['distance_to_center'] ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>


</body>
</html>