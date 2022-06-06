<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>David</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="main">
        <div class="form">
            <span>Save data</span>
            <form action="save.php" method="post">
                <label>
                    First Name 
                    <input name="firstName" type="text" required >
                </label>
                <label>
                    Last Name 
                    <input name="lastName" type="text" required >
                </label>Hobby
                <div class="hobbies">

                    <label> Soccer  <input name="hobbies[0]"    type="checkbox"   value="soccer"></label>
                    <label> Sleep   <input name="hobbies[1]"    type="checkbox"   value="slepp"></label>
                    <label> Paint   <input name="hobbies[2]"    type="checkbox"   value="Paint"></label>
                    <label> Program <input name="hobbies[3]"    type="checkbox"   value="Program"></label>
                </div>
                <button class="button"> Save</button>
            </form>
        </div>

        <div class="table">
            <span>BD Data</span>
            <table>
                <thead>
                    <tr>
                        <th>
                            First Name
                        </th>
                        <th>
                            Last Name
                        </th>
                        <th>
                            hobbies
                        </th>
                    </tr>
                </thead>
                <tbody>

                   <?php
                   
                   require_once './table.php'
                   
                   ?>
                </tbody>
            </table>
        </div>
    </main> 
</body>

</html>