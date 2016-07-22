<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>moose clothing company</title>

    <!-- CSS  -->
    <?php include ('./head-css.php'); ?>
</head>
<body>

<?php include('./nav.php'); ?>

<div class="container">
    <div class="section row contact-per">
        <div class=" col m4 s12">
            <img src="./images/kenu%20reaves.jpeg" class="circle col m5 s12">
            <div class="col m7 s12" style="padding: 40px 0">
                Mr. Keanu Reeves<br>
                CEO<br>
                <a href="mailto:k.reeves@mail.com">k.reeves@mail.com</a>
            </div>
        </div>
        <div class=" col m4 s12">
            <img src="./images/scarlet.jpg" class="circle col m5 s12">
            <div class="col m7 s12" style="padding: 40px 0">
                Miss. Scarlett Johansson<br>
                Director Finance<br>
                <a href="mailto:s.johansson@mail.com">s.johansson@mail.com</a>
            </div>
        </div>
        <div class=" col m4 s12">
            <img src="./images/N.cage.jpeg" class="circle col m5 s12">
            <div class="col m7 s12" style="padding: 40px 0">
                Mr. Nicolas Cage<br>
                Director Operations<br>
                <a href="mailto:nicolas.c@mail.com">nicolas.c@mail.com</a>
            </div>
        </div>
    </div>
    <div class="section">
        <!--   Icon Section   -->
        <div class="row">
            <form class="col s12 frm-inq" id="frm-inq">
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Last Name" id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="email" id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea placeholder="Message" id="msg" class="materialize-textarea"></textarea>
                        <label for="msg">Message</label>
                    </div>
                </div>
                <button class="waves-effect waves-light btn">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include('./footer.php'); ?>

</body>
</html>
