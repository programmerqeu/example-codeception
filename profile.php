<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome profile</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">
      <h1>Welcome <?=$_REQUEST['name']?></h1>

      <form class="form-inline" id="logout_form" action="index.php" method="post">
        <button type="submit" class="btn btn-warning">Sign out</button>
      </form>

      <hr>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      </main>
      <footer class="container">
        <a href="/index.php">Sign out</a>
      </footer>
  </body>
</html>
