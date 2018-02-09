<div class="uk-text-center uk-padding-small">
    <div class="uk-h2 uk-padding">
        Activities and Achievements
    </div>
    <div class="uk-clearfix">
        <?php
                include_once('includes/dbconnect.php');
                $query=mysqli_query($mysqli,"SELECT * FROM sub_pages WHERE uid=25");
                while($row=mysqli_fetch_array($query))
                {
                        echo $row['pageinfo'];
                        echo "<br/>";
                }
        ?>
    </div>

</div>
