<form class="clock-form" action="php/groups.php" method="POST">
            <div class="form-items-holder flex">
                <div class="form-items flex">
                    <div class="form-btns flex">
                        <button type="submit" name="prevgroup" class="btn-dark round">Poprzednia</button>
                        <button type="submit" name="nextgroup" class="btn-dark round">Następna </button>
                    </div>
                    <p>Na torze: 
                        <?php 
                            require "currentgroups.php";
                            echo $currentGroup;
                            $conn->close();
                        ?>
                    Oczekuje: 
                    <?php
                        require "currentgroups.php";
                        if($currentGroup < $lastGroup) echo $currentGroup+1;
                        else echo 1;
                        $conn->close();
                    ?>
                    </p>
                    <div class="form-btns flex">
                        <?php
                            require_once "php/turnonoffbutton.php";
                        ?>
                    </div>
                </div>
            </div>
        </form>