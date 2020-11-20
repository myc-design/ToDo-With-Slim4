<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>My Slim To Do App</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">   
    
</head>
<body>
    <h1>Never Ending List</h1>
        <div class="container">
            <form action="" method="POST">
                <button type="submit">Add More Stuff</button>
                <input type="text" name="title" id="title" value="Title">
                <input type="text" name="description" id="description" value="Description">
                    <?php foreach($toDos as $toDo){ ?>
                    <li> <?php echo "{$toDo['title']} -  {$toDo['description']}"; ?> 
                    <input type="checkbox" id="id" name="checked[]" value="checked"
                      <?php if($toDo['completed']) echo 'checked="checked"';?> />
                    </li>
                    <?php } ?>
            </form>

            <form action="" method="POST">
                <div class="buttons">    
                    <button type="submit" name="completed" value="completed">
                    <a href="completed">Finished Tasks</a></button>
                    <button type="submit" name="unfinished" value="unfinished">Not Done Yet</button>
                </div>
            </form>
        </div>
</body>
</html>



