<!-- PHP -->
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
    <title>Document</title>

    <!-- BS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <h1>
            Hotel
        </h1>

        <div>
            <ul>
                <?php
                foreach ($hotels as $index => $oneHotel) {
                ?>

                    <li class="mb-4">
                        <h2>
                            <?php
                            echo $oneHotel['name'];
                            ?>
                        </h2>

                        <!-- ----------------------------- -->

                        <div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <?php
                                        foreach ($oneHotel as $index => $infoHotel) {
                                            echo
                                            '<th scope="col">'
                                                . $index .
                                                '</th>';
                                        }
                                        ?>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th scope="row">--></th>
                                        <?php
                                        foreach ($oneHotel as $index => $infoHotel) {
                                            echo
                                            '<td>'
                                                . $infoHotel .
                                                '</td>';
                                        }
                                        ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>

                    <hr>

                <?php
                }
                ?>
            </ul>
        </div>

        <h1 class="my-5">ALTERNATIVA</h1>

        <div>
            <table class="table">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <?php
                        foreach ($hotels[0] as $i => $keyArray) {
                            echo '<th scope="col">' . $i . '</th>';
                        }
                        ?>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <?php
                        foreach ($hotels[0] as $key => $info) {
                            echo '<td>' . $info . '</td>';
                        }
                        ?>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <?php
                        foreach ($hotels[1] as $key => $info) {
                            echo '<td>' . $info . '</td>';
                        }
                        ?>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <?php
                        foreach ($hotels[2] as $key => $info) {
                            echo '<td>' . $info . '</td>';
                        }
                        ?>
                    </tr>

                    <tr>
                        <th scope="row">4</th>
                        <?php
                        foreach ($hotels[3] as $key => $info) {
                            echo '<td>' . $info . '</td>';
                        }
                        ?>
                    </tr>

                    <tr>
                        <th scope="row">5</th>
                        <?php
                        foreach ($hotels[4] as $key => $info) {
                            echo '<td>' . $info . '</td>';
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>