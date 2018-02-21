<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Add Record Form</title>
  </head>
  <body>
    <form action="insert.php" method="post">
      <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName">
      </p>
      <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName">
      </p>
       <p>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
      </p>
      <p>
        <label for="username">User Name:</label>
        <input type="text" name="username" id="username">
      </p>
      <p>
        <label for="password">Password:</label>
        <input type="password" name="password" id="lastName">
      </p>
      
      <input type="submit" value="Submit" name="submit">
    </form>
  </body>
</html>
