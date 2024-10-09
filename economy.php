<h1>Экономика:</h1>
<?php
$result = $conn->query("SELECT * FROM `economy` WHERE 1 /*GROUP BY cargo.ID*/");

while ($row = $result->fetch()) {
//style="max-width: 18rem;"
    echo'
        
        <div class="card border-dark mb-3" >
            <div class="card-header"> ' . 'ID - ' . $row['id'] .'</div>
            <div class="card-body text-dark">
                <div class="row g-0"> 
                    <div class="col-md-10">
                    <a class="nav-link" href="/index.php?page=b" >                  
                        <p class="card-text">' . 'ID Страны - ' .$row['id_country']  .'</>
                        <p class="card-text">' . 'Год - ' .$row['year'] . 'год' .'</>
                        <p class="card-text">' . 'ВВП - ' .$row['GDP']  . '$' . '</>
                        <p class="card-text">' . 'ВВП на душу - ' .$row['GDP_person'] . '$' .'</>
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