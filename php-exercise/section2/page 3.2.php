<!DOCTYPE html>
<html lang="en-GB">
            
    <head>       
    <?php $thisPage="The Velvet Underground"; ?>
        <?php $thisSection="Section 2"; ?>   
        <?php include("../php/meta.php"); ?> 

    </head>       

    <body>
        
        <header><a href="/">MULTIPAGE PHP WEBSITE</a></header>

        <div class="content-wrap">
        
            <main>
                <h1>The Velvet Underground</h1>
                
                <figure>
                    <img src="../images/vu1.jpg">
                    <img src="../images/vu.jpeg">                        
                    <figcaption><em>From the book 'Shadows'</em></figcaption>
                </figure>

                <p>The Velvet Underground was an American rock band formed in New York City in 1964. It originally comprised singer and guitarist Lou Reed, Welsh multi-instrumentalist John Cale, guitarist Sterling Morrison, and drummer Angus MacLise. MacLise was replaced by Moe Tucker in 1965, who played on most of the band's recordings. Though their integration of rock and the avant-garde achieved little commercial success, they became one of the most influential bands in rock, underground, experimental, and alternative music. Their provocative subject matter, musical experiments, and nihilistic attitude was also instrumental in the development of punk rock, new wave and several other genres.</p>

            </main>
        
            <?php include("../php/nav.php"); ?>
        </div>
        
        <?php include("../php/footer.php"); ?>

    </body>
</html>


