<!DOCTYPE html>
<html lang="en-GB">
            
    <head> 
        <?php $thisPage="Hieronymus Bosch"; ?>
        <?php $thisSection="Section 1"; ?>   
    
        <?php include("../php/meta.php"); ?>


        

    </head>       

    <body>
        
        <header><a href="/">MULTIPAGE PHP WEBSITE</a></header>

        <div class="content-wrap">
        
            <main>
                <h1>Hieronymus Bosch</h1>
                
                <figure>
                    <img src="../images/bosch1.jpg">
                    <img src="../images/bosch2.jpg">                        
                    <figcaption><em>About Hieronymus Bosch</em></figcaption>
                </figure>

                <p>Bosch produced at least sixteen triptychs: of them, eight survive fully intact with another five surviving in fragments.[17] Bosch's works are generally organised into three periods of his life dealing with the early works (c. 1470–1485), the middle period (c. 1485–1500), and the late period (c. 1500 until his death). According to Stefan Fischer, thirteen of Bosch's surviving paintings were completed in the late period, with seven attributed to his middle period.Bosch's early period is studied in terms of his workshop activity and possibly some of his drawings. Indeed, he taught pupils in the workshop, who were influenced by him. The recent dendrochronological investigation of the oak panels by the scientists at the Bosch Research and Conservation Project led to a more precise dating of the majority of Bosch's paintings.</p>
                <p>Bosch sometimes painted in a comparatively sketchy manner, contrasting with the traditional Early Netherlandish style of painting in which the smooth surface—achieved by the application of multiple transparent glazes—conceals the brushwork.Bosch's paintings with their rough surfaces, so called impasto painting, differed from the tradition of the great Netherlandish painters of the end of the 15th, and beginning of the 16th centuries, who wished to hide the work done and so suggest their paintings as more nearly divine creations.</p>

            </main>
        
            <?php include("../php/nav.php"); ?>

        </div>
        
        <?php include("../php/footer.php"); ?>

    </body>
</html>



<!-- REFERENCE PHP CODE: -->
<!--
Declare variables
<?php $thisSection=""; ?>

Echo function w. if statement
<?php if ($thisPage!="") echo "$thisPage"; ?>

Include function
<?php include("php/something.php"); ?>

Add an ID to an element dynamically
<?php if ($thisPage=="Page One") echo " id=\"currentpage\""; ?>
Add this as an attribute within an element

Date
<?php
date_default_timezone_set('Asia/Kolkata');
echo "" . date("Y") ;
?>
-->