<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Health</title>
    <link rel="shortcut icon" type="image/png" href="logo3.png">
    <link rel="stylesheet" href="styleformpdes.css">
    <script src="https://kit.fontawesome.com/a2bdf52fb7.js" crossorigin="anonymous"></script> </head>
    <body>
    <?php include('header.php');?>

        <div class = "container">
            <ul class="tab-container">
                <li>
                    <input type="radio" id="tab-1" name="tab" checked>
                    <label for="tab-1"> Topic </label>
                    
                    <div class="tab-content">
                        <div class ="inner">
                            <div class="inner-left">
                            <h2> What is Cancer</h2>
                                <p> Cancer is a disease in which some of the body’s cells grow uncontrollably and spread to other parts of the body. 
                                Cancer can start almost anywhere in the human body, which is made up of trillions of cells. </p> 
                            </p>Normally, human cells grow and multiply (through a process called cell division) to form new cells as the body needs them. 
                                When cells grow old or become damaged, they die, and new cells take their place. </p>
                                <a href="https://www.cancer.gov/about-cancer/understanding/what-is-cancer" class="learn">
                                    learn more <span>&rarr; </span> </a>  
                                
                                </div>
                                <div class="inner-right">
                                <img src="Images/Curing.jpg" alt="sakit"> </div>  
                        </div>
                    </div>
                </li> 
                      
                <li>
                    <input type="radio" id="tab-2" name="tab">
                    <label for="tab-2"> Information </label>
                    <div class="tab-content">
                        <div class ="inner">
                            <div class="inner-left">
                                <h2> Prevention ! </h2>
                                <p>You've probably heard conflicting reports about cancer prevention. Sometimes a specific cancer-prevention tip recommended in one study is advised against in another.
                                Often, what's known about cancer prevention is still evolving. However, it's well-accepted that your chances of developing cancer are affected by the lifestyle choices you make. 
                                So if you're interested in preventing cancer, take comfort in the fact that simple lifestyle changes can make a difference. Consider these cancer-prevention tips. </p>
                                <a href="https://www.mayoclinic.org/healthy-lifestyle/adult-health/in-depth/cancer-prevention/art-20044816" class="learn"> 
                                    learn more <span>&rarr; </span> </a> </div>    
                                    
                                    <div class="inner-right"> 
                            <img src="Images/doctors.jpg" alt="sakit"></div>   

                        </div>
                    </div>
                </li>

                <li>
                    <input type="radio" id="tab-3" name="tab">
                    <label for="tab-3"> Contact </label>
                    <div class="tab-content">
                        <div class ="inner">
                        <div class="inner-left">
                            
                                <h2> Our Doctor </h2>
                                <p> Choose positive, hopeful words, but don't give people false hope or talk about other people's cancer outcomes.
                                    Remember, each person is different, and hearing other people's stories may scare your friend or loved one.
                                </p></div> <div class="inner-right">  
                                <img src="Images/Doctor.jpg" alt="sakit"></div>
                        </div>
                    </div>
                </li> 

            </ul>
        </div>
    </body>
</html>