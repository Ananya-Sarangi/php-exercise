<!DOCTYPE html>
<html lang="en-GB">
            
    <head>   

    <?php $thisPage="Jimi Hendrix"; ?>
        <?php $thisSection="Section 2"; ?>   
        <?php include("../php/meta.php"); ?>

    </head>       

    <body>
        
        <header><a href="/">MULTIPAGE PHP WEBSITE</a></header>

        <div class="content-wrap">
        
            <main>
                <h1>Jimi Hendrix</h1>
                
                <figure>
                    <img src="../images/jimi1.jpg">
                    <img src="../images/jimi2.jpg">                        
                    <figcaption><em>About Jimi Hendrix</em></figcaption>
                </figure>

                <p>Artem Kostyukevich was born in 1971 in Omsk. Artem graduated Leningrad School of Arts named after V. Serov (now St. Petersburg School of Arts named after N.K.Roerich). He studied at St. Petersburg State Pedagogical University named after A.I.Herzen (department of fine arts) and graduated from HAW Hamburg Institute (department of design and illustration).</p>
                <p>Artem (voller Name Artem Kostyukevich), geboren 1971 in Omsk (Russland), lebt seit 1999 in Deutschland. Er studiert Kinder- und Jugendbuchillustration an der Hochschule für Angewandte Wissenschaften Hamburg. Zuvor hat er in St. Petersburg an der Kunstlehranstalt "W.A.Serow" studiert und an der Pädagogischen Universität "A.I.Herzen" das Fach Darstellende Kunst belegt. Seine Illustrationen wurden unter anderem auf der Kinderbuchmesse in Bologna ausgestellt. Artem lebt mit seiner Familie in Hamburg.</p>

            </main>
        
            <?php include("../php/nav.php"); ?>

        </div>
        
        <?php include("../php/footer.php"); ?>

    </body>
</html>


