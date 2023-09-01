
<aside>
           

<nav>
    
                <p>POSTS:</p>
                <!-- section 1 menu-->
                <a class="sectiontitle" <?php if ($thisSection=="Section 1") echo " id=\"currentsection\""; ?>> Section 1</a>
                <ul>
                    
                    <li><a href="../section1/artem.php" <?php if ($thisPage=="Artem Kostyukevich") echo " id=\"currentpage\""; ?>> Artem Kostyukevich</a>
                    </li>
                     <li><a href="../section1/Page 2.php" <?php if ($thisPage=="Hieronymus Bosch") echo " id=\"currentpage\""; ?>> Hieronymus Bosch</a>
                    </li>
                    <li><a href="../section1/Page 3.php" <?php if ($thisPage=="Diego Velazquez") echo " id=\"currentpage\""; ?>> Diego Velazquez</a>
                    </li>
                   
                </ul>
                
                <!-- section 2 menu-->
                <a class="sectiontitle">Section 2</a>
                <ul>
                    
                    <li><a href="../section2/Page1.2.php" <?php if ($thisPage=="Jimi Hendrix") echo " id=\"currentpage\""; ?>> Jimi Hendrix</a>
                    </li>
                    <li><a href="../section2/page 2.2.php" <?php if ($thisPage=="Pearl Jam") echo " id=\"currentpage\""; ?>> Pearl Jam</a>
                    </li>
                    <li><a href="../section2/page 3.2.php" <?php if ($thisPage=="The Velvet Underground") echo " id=\"currentpage\""; ?>> The Velvet Underground</a>
                    </li>
                    
                    
                </ul>         

                <a href="">About</a>

            </nav>
            <br>
            <hr>
            <p class="s">(This is an extra paragraph in the aside element)</p>
        </aside>
