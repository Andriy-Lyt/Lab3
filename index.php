<?php
       $name=$nameErr=$nameGood=$phone=$phoneErr=$phoneGood=$email=$emailErr=$emailGood=$subject=$subjectErr=$subjectGood =$ratingGood=$ratingErr=$feelErr=$feelGood=$messageErr=$messageGood=$rating=$feel="";

if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $checkName = "/^[a-zA-Z ]*$/";
    if($name == ""){
        $nameErr =  "please enter your Name";
    } else if (!preg_match($checkName, $name)){
        $nameErr = "please enter valid Name";
    } else {
        $nameGood = "Name is valid";
    } 

    $phone = $_POST['phone'];
    $checkPhone = "/[0-9]{7,10}/";
    if($phone == ""){
         $phoneErr = "please enter phone number";
    } else if (!preg_match($checkPhone, $phone)){
         $phoneErr = "please enter valid phone number";
    } else {
         $phoneGood = "valid phone";
    }

   $email = $_POST['email'];
   if($email == ""){
       $emailErr =  "please enter email";
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr = "please enter valid email";
   } else {
        $emailGood = "email is valid";
   }

   $subject = $_POST['subject'];
   if($subject == "select"){
       $subjectErr =  "please select subject";
   } else {
        $subjectGood = "subject is selected";
   }

   $rating = $_POST['rating'];
   if (empty($rating)) {
       $ratingErr =  "please select rating";
   } else {
        $ratingGood = "rating is selected";
   }

   $feel = $_POST['feel'];
   if (empty($feel)) {
       $feelErr =  "please say how you feel";
   } else {
        $feelGood = "We're happy for you!";
   }

   $message = $_POST['message'];
   if($message == ""){
       $messageErr =  "please type your message";
   } else {
       $messageGood = "Thank you for your message!";
   } 


}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LAB 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
    <?php include("includes/header.php");?>

    <main>

        <form method='post' action='' id="contactForm" name="contact_form">
        <h2>Give us a buzz</h2>

            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Your Name" 
                value = "<?php if(isset($name)){echo $name;} ?>" />
                <span id="noname" class="red"> <? echo $nameErr; ?> </span>
                <span id="goodname" class="green"> <? echo $nameGood; ?> </span>
            </div>

            <div>
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" placeholder="Your Phone"
                value = "<?php if(isset($phone)){echo $phone;} ?>" />
                <span id="nophone" class="red"> <?= $phoneErr; ?> </span>
                <span id="goodphone" class="green"> <? echo $phoneGood; ?> </span>
            </div>


            <div>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Your@email.com"
                value = "<?php if(isset($email)){echo $email;} ?>" />
                <span id="noemail" class="red"> <?= $emailErr; ?> </span> 
                <span id="goodemail" class="green"> <? echo $emailGood; ?> </span>
            </div>

            <div>
                <label for='subject'>Subject:</label>
                <select id='subject' name='subject'/>
                    <option value='select' selected>-Select-</option>
                    <option value='general'>General Question</option>
                    <option value='complement'>Complement</option>
                    <option value='employment'>Employment</option>
                    <option value='enterprice'>Enterprice</option>
                </select>
                <span id="nosubject" class="red"><?= $subjectErr; ?></span>
                <span id="goodsubject" class="green"> <? echo $subjectGood; ?> </span>
                
            </div>

            <div>
                <fieldset>
                    <legend id="radios">How do you like this web site?</legend>
                    <label for='radio1'>Unbelievable</label>
                    <input type='radio' id='radio1' name='rating' value='unbeliev'>
                    <label for='radio2'>Amazing</label>
                    <input type='radio' id='radio2' name='rating' value='amaz' >
                    <label id='noradio'></label>
                    <span id="norating" class="red"><?= $ratingErr; ?></span>
                    <span id="goodrating" class="green"> <? echo $ratingGood; ?> </span>
                </fieldset>
            </div>

            <div>
                <fieldset>
                    <legend id="checkboxes">How are you feeling today?</legend>
                    <label for='checkbox1'>Splendid</label>
                    <input type='checkbox' id='checkbox1' name='feel' value='splendid'>
                    <label for='checkbox2'>Marvelous</label>
                    <input type='checkbox' id='checkbox2' name='feel' value='marvelous' >
                    <label id='nocheckbox'></label>
                    <span id="norating" class="red"><?= $feelErr; ?></span>
                    <span id="nocheckbox" class="green"> <? echo $feelGood; ?> </span>  
                </fieldset>
            </div>

            <div>
                <label for="message">Your Message:</label>
                <textarea id="message" name="message"></textarea>
                <span id="nomessage" class="red"><?= $messageErr; ?></span>
                <span id="goodmessage" class="green"> <? echo $messageGood; ?> </span>  
            </div>
            
            <button type='submit' id='submit' name='submit'>Submit</button>
            <img id="bunny" src="img/bunny.png" alt="bunny image">
        </form>

        <section id="right-section">

        <h2>Fun facts to read</h2> 
        <img src="img/fish.png" id="fish-img"  alt="image of fish"> 
            <p class = "margin-top15"> 
                The blue tang is a surgeonfish, a group of fishes named for the scalpel-like spine on the side of the body, just ahead of the tail. Blue tangs, like all surgeonfishes, use these spines to defend against predators. They erect the sharp spines in an effort to make themselves harder to swallow or to inflict injury on their predators.
            </p>

            <p class = "margin-top15">
                    Blue tangs are herbivores, and they actively browse the surface of coral reefs, searching for their favorite algae.&nbsp;Though larger individuals sometimes browse by themselves or in pairs or threesomes, small to medium adults often form large groups and swim long distances, browsing along the reef surface throughout the day.
            </p>
                <p class = "margin-top15">
                With overfishing of their main predators (e.g., <a href="/marine-life/ocean-fishes/nassau-grouper" target="_blank">large groupers</a>&nbsp;and snappers) and a reduction of some of their main competitors for algae (e.g., the Longspine Urchin), numbers of adult blue tangs can be quite high on many reefs.&nbsp;Juveniles live among dead coral rubble or in <a href="/marine-life/marine-science-and-ecosystems/mangrove-forest" target="_blank">mangrove forests</a> in more protected waters and move to the open reef surface as they mature. Adult blue tangs are solid blue (or almost dark purple), while juveniles are solid yellow.
            </p>
            <p>Original article is published at <a href="https://oceana.org/marine-life/ocean-fishes/blue-tang" target="_blank">oceana.org</a> </p>
        </section>
    </main>

    <?php include("includes/footer.php");?>
    <!-- <script src="js/script.js"></script> -->
    </body>
</html>

