<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome Codeception</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">

      <h1>Hello Codeception</h1>
      <form class="form-inline" id="login_form" action="profile.php" method="post">
        <div class="form-group">
          <label class="sr-only" for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
        </div>
        <div class="form-group">
          <label class="sr-only" for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name"remember"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
      <hr>

      <form method="post" action="/update" id="update_form">
        <div class="form-group">
          <label for="user_name">Name</label>
          <input type="text" name="user[name]" id="user_name" class="form-control" />
        </div>
        <div class="form-group">
           <label for="user_email">Email</label>
           <input type="text" name="user[email]" id="user_email" class="form-control" />
         </div>
         <div class="form-group">
           <label for="user_gender">Gender</label>
           <select id="user_gender" name="user[gender]" class="form-control">
                <option value="m">Male</option>
                <option value="f">Female</option>
           </select>
         </div>
         <div class="form-group">
           <input type="submit" name="submitButton" value="Update" class="btn btn-success" />
         </div>
      </form>

    </main>
  </body>
</html>
