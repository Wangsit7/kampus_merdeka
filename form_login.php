<!DOCTYPE html>
<html>
  <head>
    <title>FORM LOGIN</title>
    <link rel="stylesheet" href="css/mystyle.css" />
  </head>
  <body>
        <?php 
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];

              if (isset($_REQUEST['login'])) {
                if ($username == 'admin' && $password == 'mimin') {
                  header('Location: landingPage/index.html');
                } else {
                  echo '<script type="text/javascript">alert("Username atau password salah")</script>';
                  echo '<a href="form_login.php" onclick="window.history.go(-1); return false;"> Kembali ke form login </a>';
                }
              } 
              else {
                cekLogin($username, $password);
              }

    function cekLogin($username, $password) { ?>
      <form action="#" method="POST">
      <table align="center" cellpadding="15" width="30%">
        <thead>
          <tr>
            <th colspan="2">Login</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Username</td>
            <td><input type="text" id="username" name="username" /></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" id="password" name="password" /></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" id="login" name="login" value="login"/></td>
          </tr>
        </tbody>
      </table>
    </form>
    <?php } ?>
    
    <script src="js/myscript.js"></script>
  </body>
</html>