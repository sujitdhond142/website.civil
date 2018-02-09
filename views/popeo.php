<div class="uk-padding">
    <div class="uk-clearfix">
        <?php
            include_once('includes/dbconnect.php');
            $query=mysqli_query($mysqli,"SELECT * FROM sub_pages WHERE uid=29");
            while($row=mysqli_fetch_array($query))
            {
                    echo $row['pageinfo'];
                    echo "<br/>";
            }
        ?>
    </div>
</div>
