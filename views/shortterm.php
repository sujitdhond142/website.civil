<div class="uk-padding uk-text-center">
    <div class="uk-h2 uk-padding-small uk-text-center">
        Short Term Courses
    </div>
    <div class="uk-clearfix">
        <?php
            include_once('includes/dbconnect.php');
            $query=mysqli_query($mysqli,"SELECT * FROM sub_pages WHERE uid=30");
            while($row=mysqli_fetch_array($query))
            {
                echo $row['pageinfo'];
                echo "<br/>";
            }
        ?>
    </div>
</div>
