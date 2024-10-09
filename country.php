<h1>Страны</h1>
<?php
$result = $conn->query("SELECT * FROM `country` WHERE 1 /*GROUP BY transport.ID*/");

while ($row = $result->fetch()) {
//style="max-width: 18rem;"
    echo'
        
        <div class="card border-dark mb-3" >
            <div class="card-header"> ' . $row['name'] . '</div>
            <div class="card-body text-dark">
                <div class="row g-0">
                    <div class="col-md-7">
                    <a class="nav-link" href="/index.php?page=c" >
                        <h5 class="card-title">' . 'Столица страны - ' . $row['capital'] . '</h5>
                        <p class="card-text">' . 'Площадь - ' .$row['square'] . ' ' .'км^3' .'</p>
                    </a>
                    </div>
                    
                </div>
            </div>
            
        </div>
 
    ';
//    echo '<tr>';
//    echo '<td>' .  $row['id']. '</td><td>' . $row['name'] . '</td>';
//    echo '<td><a href=deletecategory.php?id='.$row['id'].'>Удалить</a></td>';
//    echo '</tr>';
}
?>
