<div>
    <nav id="navbar" class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-left ">
            <a class="uk-navbar-item uk-logo" href="#"><img src="assets/images/civil_small.png" alt="" style="max-height:70px;height:70px;width:auto"></a>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@m">
                <li class="<?php if(isset($isPageIndex)&&($isPageIndex)){echo "uk-active";}?>"><a href="index.php">Home</a></li>
                <li class="
                    <?php
                        if($isPageFaculty||$isPageStudent||$isPageStaff){
                            echo "uk-active";
                        }
                    ?>
                ">
                    <a href="#">People</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="<?php if(isset($isPageFaculty)&&($isPageFaculty)){echo "uk-active";}?>"><a href="faculty.php">Faculty</a></li>
                            <li class="<?php if(isset($isPageStudent)&&($isPageStudent)){echo "uk-active";}?>"><a href="student.php">Student </a></li>
                            <li class="<?php if(isset($isPageStaff)&&($isPageStaff)){echo "uk-active";}?>"><a href="staff.php">Staff</a></li>
                        </ul>
                    </div>
                </li>
                <li class="<?php if($isPageNotices){ echo "uk-active";}?>">
                    <a href="#">Calender</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="notices.php">Timetable</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="https://gcoej.ac.in/download/Final_Academic_Calendar_SY_2017-180.pdf">Academic Calender</a></li>
                        </ul>
                    </div>
                </li>
                <li class="
                    <?php
                        if($isPageAboutUs||$isPagePopeo||$isPageShortTerm||$isPageCesa||$isPageActivities){
                            echo "uk-active";
                        }
                    ?>
                ">
                    <a href="#">About</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="<?php if(isset($isPageAboutUs)&&$isPageAboutUs){echo "uk-active";}?>"><a href="about.php">About Us</a></li>
                            <li class="<?php if(isset($isPagePopeo)&&($isPagePopeo)){echo "uk-active";}?>"><a href="popeo.php">PEOs &amp; POs</a></li>
                            <li class="<?php if(isset($isPageShortTerm)&&($isPageShortTerm)){echo "uk-active";}?>"><a href="shortterm.php">Short Term Courses</a></li>
                            <li class="<?php if(isset($isPageCesa)&&($isPageCesa)){echo "uk-active";}?>"><a href="cesa.php">CESA</a></li>
                            <li class="<?php if(isset($isPageActivities)&&($isPageActivities)){echo "uk-active";}?>"><a href="activities.php">Activities &amp; Achievements</a></li>
                        </ul>
                    </div>
                </li>
                <li class="<?php if(isset($isPageLaboratories)&&($isPageLaboratories)){echo "uk-active";}?>">
                    <a href="#">Infrastructure</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="laboratories.php">Laboratories</a></li>
                        </ul>
                    </div>
                </li>
                <li class="<?php if(isset($isPageBos)&&($isPageBos)){echo "uk-active";}?>">
                    <a href="bos.php">BoS</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="bos.php#composition">Composition</a></li>
                            <li><a href="bos.php">MoM</a></li>
                        </ul>
                    </div>
                </li>
                <li class="<?php if(isset($isPagePhotoGallery)&&($isPagePhotoGallery)){echo "uk-active";}?>"><a href="photogallery.php">Photogallery</a></li>
            </ul>
            <a uk-navbar-toggle-icon="" href="#offcanvas" uk-toggle="" class="uk-navbar-toggle uk-hidden@m uk-navbar-toggle-icon uk-icon">
                <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" ratio="1">
                    <rect y="9" width="20" height="2"></rect>
                    <rect y="3" width="20" height="2"></rect>
                    <rect y="15" width="20" height="2"></rect>
                </svg>
            </a>
        </div>
    </nav>
</div>
<div id="offcanvas" uk-offcanvas="mode: push; overlay: true" class="uk-offcanvas" style="">
    <div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-push">
        <div class="uk-panel">
            <ul class="uk-nav uk-nav-default tm-nav">
                <li><a href="index.php">Home</a></li>

                <li class="uk-nav-header">People</li>
                <li><a href="faculty.php">Faculty</a></li>
                <li><a href="student.php">Student</a></li>
                <li><a href="staff.php">Staff</a></li>


                <li class="uk-nav-header">Calender</li>
                <li><a href="notices.php">Timetable</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="notices.php">Academic Calender</a></li>

                <li class="uk-nav-header">About</li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="popeo.php">PEOs &amp; POs</a></li>
                <li><a href="shortterm.php">Short Term Courses</a></li>
                <li><a href="activities.php">Activities &amp; Achievements</a></li>

                <li class="uk-nav-header">Infrastructure</li>
                <li><a href="laboratories.php">Laboratories</a></li>

                <li class="uk-nav-header">BoS</li>
                <li><a href="bos.php#composition">Composition</a></li>
                <li><a href="bos.php">MoM</a></li>

                <li class="uk-nav-header"><a href="photogallery.php">Photogallery</a></li>
            </ul>
        </div>
    </div>
</div>
