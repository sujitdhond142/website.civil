<ul id="testtab" uk-tab>
    <li><a href="#mom">BoS MoM</a></li>
    <li><a href="#composition">Composition</a></li>
</ul>

<ul class="uk-switcher uk-text-center uk-margin">
    <li id="mom" class="">
        <div class="uk-h3 ">
            BoS MOM
        </div>
        <table class="uk-table uk-table-striped table-width">
            <thead>
                <tr>
                    <td>Sr.No.</td>
                    <td>Title</td>
                    <td>Download</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once('includes/dbconnect.php');
                    $pname = "Civil Engineering - BoS MoM";
                    $query = mysqli_query($mysqli,"SELECT * FROM pp_files WHERE ppage='$pname'");
                    $i=1;
                    while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $row['file_name'];?></td>
                            <td><a href="<?php echo "https://gcoej.ac.in/".$row['url'];?>" taget="_blank">Download</a></td>
                        </tr>
                    <?php
                        $i++;
                    }
                ?>
            </tbody>
        </table>
    </li>
    <li id="composition">
        <div class="uk-h3 text-center">
            BoS Composition
        </div>
        <div class="uk-clearfix">
            <?php
                $query=mysqli_query($mysqli,"SELECT * FROM sub_pages WHERE uid=26");
                while($row=mysqli_fetch_array($query))
                {
                        echo $row['pageinfo'];
                        echo "<br/>";
                }
            ?>
        </div>
    </li>
</ul>