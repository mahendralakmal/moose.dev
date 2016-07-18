<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>moose clothing company</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

  <?php include ('./nav.php'); ?>

  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
        <form class="col s12" id="frm-inq">
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
          <button class="btn btn-flat">Submit</button>
        </form>
      </div>
    </div>
  </div>

    <?php include ('./footer.php'); ?>

  </body>
</html>
