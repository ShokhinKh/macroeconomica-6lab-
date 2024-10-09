<h1>События</h1>
<?php
$result = $conn->query("SELECT * FROM `event` WHERE 1 /*GROUP BY route.I*/");

while ($row = $result->fetch()) {
//style="max-width: 18rem;"
    echo'
        
        <div class="card border-dark mb-3" >
            <div class="card-header"> ' . $row['Name'] . '</div>
            <div class="card-body text-dark">
                <div class="row g-0">
                    <div class="col-md-1">  
                        <img src="'.$row['img'].'" alt="Task picture" height="360px">  
                    </div>
                    <div class="col-md-12">
                    <a class="nav-link" href="/index.php?page=v" >
                        <h5 class="card-title">' . 'ID Страны - ' . $row['id_country'] . '</h5>
                        <p class="card-text">' . 'Событие - ' .$row['description'] . ' ' .'</>
                        <p class="card-text">' . 'Дата - ' .$row['date'] . ' '.'<p>
                    </a>
                    </div> 
                    <div class="col-md-1">
                        <a href="deleteevente.php?ID='.$row['id_country'].'" class="btn btn-danger">Удалить</a>
                    </div> 
                </div>
            </div>
            
        </div>
 
    ';

}

?>
<h2>Добавить Событие</h2>
<form action="insertevent.php" method="post" enctype="multipart/form-data">
    <p><label>
            ID страны: <input type="text" name="id_country">
        </label>
    <p><label>
           Событие : <input type="text" name="description">
        </label>
    <p><label>
           Дата: <input type="text" name="date">
        </label>
    <p><label>
            Ссылка на изображение<input type="text" name="img">
        </label>
    <p><input type="submit" value="Добавить">
</form>
