<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">Firstname?</label>
            <input type="text" name="firstname" id="firstname" placeholder="Firstname...">

            <label for="lastname">Lastname?</label>
            <input required type="text" name="lastname" id="lastname" placeholder="Lastname...">

            <label for="favouritepet">Favourite Pet?</label>
            <select name="favouritepet" id="favouritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </main>
    
</body>
</html>