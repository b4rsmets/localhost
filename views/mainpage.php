<?php
use DBConnect as DBConnect;
$connect= DBConnect::getInstance()->getConnect();
$query=$connect->query('SELECT * FROM movies');
if($query->num_rows) {
    while ($row = $query->fetch_assoc()) {
        $films[] = $row;
    }
}
require_once './functions/seans.php';
?>
<div class="slider">
    
</div>

<div class="container-catalog">
<?php
if(is_array($films))
foreach ($films as $item)
{
?>
    <div data-aos="zoom-in" class="card">
            <div class="image-card">
                <img src="./resource/uploads/afisha/<?=$item['movie_image']?>" alt="">
             </div>
             <div class="information">
             <a href="/film?id=<?=$item['id']?>"><div class="title-card">
            <h2><?=$item['movie_title'];?></h2>
        </div>
        </a>
        <div class="info-card">
            <span><?= $item['movie_genre']; ?></span> - <br><span><?= date("g \ч. i \мин.", strtotime($item['movie_duration']));?></span>
        </div>
        <div class="raspes-card">
            <h3>Сеансы 2D</h3>
            <div class="container-times">
            <?
            $sql="SELECT * FROM seans,movies WHERE seans.movie_id=movies.id AND movie_id=".$item['id'];
            $query=$connect->query($sql);
            if($query->num_rows) {
              while ($row = $query->fetch_assoc()) {
                $seans[] = $row;
              }
            }
if(is_array($seans))

foreach ($seans as $time)

{
?>
                <div class="block-time">
                   
                        
                <h2><?= date("G:i", strtotime($time['time_movie']));?>
                </div>
                <?php
}
if (empty($seans)) {
    echo 'Нет проката';
}


?>
            </div>
        </div>
    </div>

    </div> 
       <?php
}
if (empty($films)) {
    echo 'Пока что нет фильмов в прокате';
}
?>
</div>
<div class="container-news">
    <h1>Акции и новости</h1>
    <div class="news-card">
        <div class="poster-news">
            <img src="./resource/uploads/news/45275.jpg" alt="">
        </div>
        <div class="information-news">
             <div class="title-news">
                <h1>Открытие кинотеатра в Горно-Алтайске</h1>
            </div>
            <div class="date-news">
                <span>28.01.23</span>
            </div>
            <div class="description-news">
                <span>Приглашаем всех на открытие кинотеатра, будет много акций и розыгрышей</span>
            </div>
        </div>
       
    </div>
    <div class="news-card">
        <div class="poster-news">
            <img src="./resource/uploads/news/45275.jpg" alt="">
        </div>
        <div class="information-news">
             <div class="title-news">
                <h1>Открытие кинотеатра в Горно-Алтайске</h1>
            </div>
            <div class="date-news">
                <span>28.01.23</span>
            </div>
            <div class="description-news">
                <span>Приглашаем всех на открытие кинотеатра, будет много акций и розыгрышей</span>
            </div>
        </div>
       
    </div>
</div>
