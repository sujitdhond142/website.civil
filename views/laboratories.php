<div class="uk-padding-small">
    <div class="uk-h2 text-center uk-padding-small">
        OUR &nbsp;<span class="span-color">LABORATORIES</span>
    </div>
    <div class="uk-clearfix">

        <?php
                include_once('includes/dbconnect.php');
                $query=mysqli_query($mysqli,"SELECT * FROM sub_pages WHERE uid=22");
                while($row=mysqli_fetch_array($query))
                {
                        echo $row['pageinfo'];
                        echo "<br/>";
                }
        ?>
    </div>
</div>
