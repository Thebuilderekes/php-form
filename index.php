<!DOCTYPE html>
<html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

<style>
form {
display: flex;
width: 20%;
flex-direction: column;
gap: 2rem;
}

</style>
 </head>
 <body>
      
<form action="handleForm.php" method="post">
    <label for="name">
        name 
  <input type="text" name="name" id="name">
		</labe>


    <label for="password">
				password
<input type="password" name="password" id="password"> 
		</label>

<input type="submit" value="submit">

</form>	
 </body>
 </html>
