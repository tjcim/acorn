<?php
ini_set("session.use_cookies",0);
ini_set("session.use_trans_sid",1);
session_id($_GET['session_id']);
session_start();
if(!$_SESSION['logged']){
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="/">Acorn</a>
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav">
                            <li><a href="/">Home</a></li>
                            <li><a href="login.php">Login Page</a></li>
                            <li class="active"><a href="users.php">Users Page</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container">
                <div class="row">
                        <div class="span12">
                            <h1>Welcome <?php echo $_SESSION['username'] ?></h1>
                            <?php
                            if($_SESSION['permissions'] == 'admin') {
                            ?>
                            <div class="page-header users-header">
                                  <a  href="#" class="btn btn-success">Add a new user</a>
                              </div>
                              <div class="row">
                                <div class="span10 columns">
                                  <div class="well">
                                      <input type="text" placeholder="Search users..." class="tmargin xlarge"> <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                                  <table class="table table-striped table-bordered table-condensed">
                                    <thead>
                                      <tr>
                                        <th class="header">
                                          #
                                        </th>
                                        <th class="yellow header headerSortDown">
                                          First Name
                                        </th>
                                        <th class="blue header">
                                          Last Name
                                        </th>
                                        <th class="green header">
                                          Language
                                        </th>
                                        <th class="red header">
                                          Actions
                                        </th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                          1
                                        </td>
                                        <td>
                                          Your
                                        </td>
                                        <td>
                                          One
                                        </td>
                                        <td>
                                          English
                                        </td>
                                        <td class="crud-actions">
                                          <a href="#" class="btn btn-info">view</a>  
                                          <a href="#" class="btn btn-primary">edit</a>
                                          <a href="#" class="btn btn-danger">delete</a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          2
                                        </td>
                                        <td>
                                          Joe
                                        </td>
                                        <td>
                                          Sixpack
                                        </td>
                                        <td>
                                          English
                                        </td>
                                        <td class="crud-actions">
                                          <a href="#" class="btn btn-info">view</a>  
                                          <a href="#" class="btn btn-primary">edit</a>
                                          <a href="#" class="btn btn-danger">delete</a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          3
                                        </td>
                                        <td>
                                          Stu
                                        </td>
                                        <td>
                                          Dent
                                        </td>
                                        <td>
                                          Code
                                        </td>
                                        <td class="crud-actions">
                                          <a href="#" class="btn btn-info">view</a>  
                                          <a href="#" class="btn btn-primary">edit</a>
                                          <a href="#" class="btn btn-danger">delete</a>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <div class="pagination">
                                    <ul>
                                      <li class="prev">
                                        <a href="#">← Previous</a>
                                      </li>
                                      <li>
                                        <a href="#">10</a>
                                      </li>
                                      <li>
                                        <a href="#">11</a>
                                      </li>
                                      <li>
                                        <a href="#">12</a>
                                      </li>
                                      <li>
                                        <a href="#">13</a>
                                      </li>
                                      <li>
                                        <a href="#">14</a>
                                      </li>
                                      <li class="active">
                                        <a href="#">15</a>
                                      </li>
                                      <li>
                                        <a href="#">16</a>
                                      </li>
                                      <li>
                                        <a href="#">17</a>
                                      </li>
                                      <li>
                                        <a href="#">18</a>
                                      </li>
                                      <li>
                                        <a href="#">19</a>
                                      </li>
                                      <li>
                                        <a href="#">20</a>
                                      </li>
                                      <li class="next">
                                        <a href="#">Next →</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="span2 columns">
                                  <div class="well">
                                    <h4>
                                      Settings
                                    </h4>
                                    <ul>
                                      <li>
                                        <a href="#">Link 1</a>
                                      </li>
                                      <li>
                                        <a href="#">Link 2</a>
                                      </li>
                                      <li>
                                        <a href="#">Link 3</a>
                                      </li>
                                      <li>
                                        <a href="#">Link 4</a>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="well">
                                    <h4>
                                      Filter by
                                    </h4>
                                    <ul>
                                      <li>
                                        <a href="#">Link 1</a>
                                      </li>
                                      <li>
                                        <a href="#">Link 2</a>
                                      </li>
                                      <li>
                                        <a href="#">Link 3</a>
                                      </li>
                                      <li>
                                        <a href="#">Link 4</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <?php

                            } else {
                                ?>
<div class="container top">
  <div class="row">
    <div class="span12 columns">
      <div class="page-header">
      </div>
    </div>
    <div class="span8 columns">

      <div class="alert alert-success">
        <a class="close" href="#" data-dismiss="alert">×</a>
        <p>
          <strong>Well done!</strong> You successfully read this alert message. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum.
        </p>
        <div class="alert-actions">
          <a class="btn btn-primary" href="#">Take this action</a> <a class="btn small" href="#">Or do this</a>
        </div>
      </div>
      <div class="row">
        <div class="span4 columns">
          <h4>
            Customizable
          </h4>
          <p>
            All elements within, and the entire topbar as well, are optional. You can choose to include a logo/name, nav, search, and a secondary nav or any combination of that.
          </p>
        </div>
        <div class="span4 columns">
          <h4>
            Dropdowns included
          </h4>
          <p>
            As part of the main navigation, we've included the ability for you to add dropdowns to your nav. Check out the secondary nav above (right aligned) to see how it's done.
          </p>
        </div>
      </div>
      <div class="page-header">
        <h3>
          Recent drafts
        </h3>
      </div>
      <ul class="nav nav-tabs">
        <li class="active">
          <a href="#news" data-toggle="tab">News</a>
        </li>
        <li>
          <a href="#profile" data-toggle="tab">Profile</a>
        </li>
        <li>
          <a href="#" data-toggle="tab">Messages</a>
        </li>
        <li>
          <a href="#" data-toggle="tab">Settings</a>
        </li>
        <li>
          <a href="#" data-toggle="tab">Contact</a>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" href="#" data-toggle="dropdown">Dropdown</a>
          <ul class="dropdown-menu">
            <li>
              <a href="#">Secondary link</a>
            </li>
            <li>
              <a href="#">Something else here</a>
            </li>
            <li>
              <a href="#">Another link</a>
            </li>
          </ul>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="news">
          <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th class="header">
                  #
                </th>
                <th class="yellow header headerSortDown">
                  First Name
                </th>
                <th class="blue header">
                  Last Name
                </th>
                <th class="green header">
                  Language
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  2
                </td>
                <td>
                  Joe
                </td>
                <td>
                  Sixpack
                </td>
                <td>
                  English
                </td>
              </tr>
              <tr>
                <td>
                  3
                </td>
                <td>
                  Stu
                </td>
                <td>
                  Dent
                </td>
                <td>
                  Code
                </td>
              </tr>
              <tr>
                <td>
                  1
                </td>
                <td>
                  Your
                </td>
                <td>
                  One
                </td>
                <td>
                  English
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="tab-pane" id="profile">
          <p>All elements within, and the entire topbar as well, are optional. You can choose to include a logo/name, nav, search, and a secondary nav or any combination of that.</p>
        </div>
      </div>
    </div>
    <div class="span4 columns">
      <h3>
        Quick actions
      </h3>
      <div class="well">
        <ul>
          <li>
            <a href="#">Link 1</a>
          </li>
          <li>
            <a href="#">Link 2</a>
          </li>
          <li>
            <a href="#">Link 3</a>
          </li>
          <li>
            <a href="#">Link 4</a>
          </li>
        </ul>
      </div>
      <h3>
        Tip of the day
      </h3>
      <div class="well">
          <p>
            As part of the main navigation, we've included the ability for you to add dropdowns to your nav. Check out the secondary nav above (right aligned) to see how it's done.
          </p>
      </div>
      <h3>
        Feedback
      </h3>
      <div class="well">
          <p>
            As part of the main navigation, we've included the ability for you to add dropdowns to your nav. Check out the secondary nav above (right aligned) to see how it's done.
          </p>
      </div>
    </div>
  </div>
</div>
<?php
                            }
                            ?>
                        </div>
                </div> <!-- /row -->
        </div> <!-- /container -->
        <div class="container">
            <hr>

            <footer>
                <p>&copy; Trevor Christiansen 2013</p>
            </footer>

        </div> <!-- /container -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
