<?php
    require "php/trackdaystatus.php";
    if($status['status']) echo "<form class='clock-form' action='php/groups.php' method='POST'>
                                    <button type='submit' name='off' class='btn-light round'>Wyłącz</button>
                                </form>"; 
    else echo "<form class='clock-form' action='php/groups.php' method='POST'>
                    <button type='submit' name='off' class='btn-light round'>Włącz</button>
                </form>";
    $conn->close();
?>