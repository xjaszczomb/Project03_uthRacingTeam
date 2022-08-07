<div class="trackday-banner">
    <div class="track-date">
        <span>Najbliższe eventy</span>

        <?php
            require "connect.php";
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        
            $resultEvents = $conn->query("SELECT * FROM events  WHERE `date`>=CURRENT_DATE() Order BY `date`");
            $events = $resultEvents->fetch_assoc();
            $i=0;

            while($events && $i<2) {
                $date = date_create($events['date']);

                echo "<p class='date-info'>".date_format($date, 'd-m-Y')."</p>
                <p class='place-info'>".$events['place']."</p>
                <p class='other-info'>".$events['hourstart']."-".$events['hourend']."</p>
                <p class='other-info'>".$events['type']."</p>";

                $events = $resultEvents->fetch_assoc();
                $i++;
            }
            
            $conn->close();
        ?>

    </div>
    <div class="img-xl">
        <img src="img/trackday.png" alt="samochód">
    </div>  
</div>