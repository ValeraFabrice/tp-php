<?php 
require_once __DIR__ . '/../partials/header.php';

$query = $db->query('SELECT * FROM car');
$cars = $query->fetchAll(); // [ ['id' => 1, 'name' => 'A'], ['id' => 2, 'name' => 'B'] ]

?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Photo</th>
            <th scope="col">Marque</th>
            <th scope="col">Modèle</th>
            <th scope="col">Prix</th>
            <th scope="col">Année de sortie</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach($cars as $car) { ?>
            <th scope="row">1</th>
            <td><img class="carphoto" src="../img/<?php echo$car['photo']; ?>" alt=""> </td>
            <td><?php echo$car['brand']; ?></td>
            <td><?php echo$car['model']; ?></td>
            <td><?php echo$car['price']; ?></td>
            <td><?php echo$car['release_date']; ?></td>
            <td>
                <a><i class=" btn btn-primary fas fa-pen"></i></a>
                <a><i class=" btn btn-danger far fa-trash-alt"></i></a>
            </td>
        </tr>

        <?php } ?>

    </tbody>
</table>