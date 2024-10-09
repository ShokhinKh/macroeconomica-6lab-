<h1>Экспорт</h1>
<?php
$result = $conn->query("SELECT * FROM `trade_turnover` WHERE 1 /*GROUP BY cruise.ID*/");

while ($row = $result->fetch()) {
//style="max-width: 18rem;"
    echo'
        
        <div class="card border-dark mb-3" >
            <div class="card-header"> ' . 'ID - ' . $row['id'] .'</div>
            <div class="card-body text-dark">
                <div class="row g-0"> 
                    <div class="col-md-10">
                    <a class="nav-link" href="/index.php?page=n" >                  
                        <p class="card-text">' . 'ID первой страны - ' .$row['id_country1']  .'</>
                        <p class="card-text">' . 'ID второй страны - ' .$row['id_country2']  .'</>
                        <p class="card-text">' . 'Год - ' .$row['year']  .'</>
                        <p class="card-text">' . 'Из первой страны во вторую - ' .$row['export_from_country1_to_country2']  .'</>
                        <p class="card-text">' . 'Из второй страны в первую - ' .$row['export_from_country2_to_country1']  .'</>
                        </a>          
                    </div>              
                </div>             
            </div>           
        </div>
 
    ';
}
?>