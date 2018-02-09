    <div class="uk-heading-primary uk-text-center">
        About Us
    </div>
<div class=" my-flex">
    <!-- <ul class="uk-nav uk-nav-side  uk-visible@m" data-uk-scrollspy-nav="closest:li;scroll:true" uk-sticky>
        <li class="uk-active"><a href="#preamble" >Preamble</a></li>
        <li><a href="#vision" >Vision</a></li>
        <li><a href="#mission" >Mission</a></li>
        <li><a href="#policy" >Policy</a></li>
        <li><a href="#strength" >Strength</a></li>
        <li><a href="#courses" >Courses</a></li>
    </ul> -->
    <div class="uk-container uk-width-2-3@s uk-padding">
    <?php
        include_once('includes/dbconnect.php');
        $query=mysqli_query($mysqli,"SELECT * FROM sub_pages WHERE uid=21");
        while($row=mysqli_fetch_array($query))
        {
            echo $row['pageinfo'];
            echo "<br/>";
            echo "<hr/>";
        }
    ?>
    </div>
</div>
