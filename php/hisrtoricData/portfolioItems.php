<?php

include_once "portfolioGITHUB.php";
include_once "portfolioOldApp.php";
include_once "portfolioWebApp.php";
include_once "portfolioDescop.php";

echo " <button class=\"accordion\">DESKTOPOVÉ APLIKACE</button>


            <div class=\"panel\">
                " . giveDescopBlock() . "
            </div>




            <button class=\"accordion\">WEBOVÉ APLIKACE</button>
            <div class=\"panel\">
                <div class=\"row justify-content-center\">
                    <!-- Portfolio Items-->
                    " . giveWebBlock() ."
                    </div>
                </div>


            <button class=\"accordion\">GITHUB</button>
            <div class=\"panel\">
                <div class=\"row justify-content-center\">
                    <!-- Portfolio Items-->
                    " . giveGITHUBblock() . "
                </div>
            </div>

            <button class=\"accordion\">STARÉ APLIKACE (z dob učení)</button>
            <div class=\"panel\">
                <div class=\"row justify-content-center\">
                <!-- Portfolio Items-->
                " . giveOldAppbBock() . "
                </div>
            </div>
";