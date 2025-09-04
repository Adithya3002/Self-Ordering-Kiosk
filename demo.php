<?php
if(isset($_POST['create_directory'])) {
    $new_directory_name = $_POST['new_directory_name'];
    if(!is_dir($new_directory_name)) {
        mkdir($new_directory_name);
        echo "Directory '$new_directory_name' created successfully.";
    } else {
        echo "Directory '$new_directory_name' already exists.";
    }
}
if(isset($_POST['list_contents'])) {
    $directory_path = $_POST['directory_path'];
    if(is_dir($directory_path)) {
        $contents = scandir($directory_path);
        echo "Contents of Directory '$directory_path':<br>";
        foreach($contents as $item) {
            echo "$item<br>";
        }
        closedir(opendir($directory_path));
    } else {
        echo "Directory '$directory_path' does not exist.";
    }
}

if(isset($_POST['change_directory'])) {
    $new_directory_path = $_POST['new_directory_path'];
    if(is_dir($new_directory_path)) {
        chdir($new_directory_path);
        echo "Current directory changed to '$new_directory_path'.";
    } else {
        echo "Directory '$new_directory_path' does not exist.";
    }
}




if(isset($_POST['reset_directory_handle']))
{
$direc = "C:\\xampp\\htdocs\\Adithya";


if (is_dir($direc)) {
    if ($place = opendir($direc)) {
    
        while (($file = readdir($place)) !== false) {
            echo "filename: $file<br>";
        }

       
        rewinddir($place);
        echo "Using the function rewinddir<br>";

        while (($file = readdir($place)) !== false) {
            echo "filename: $file<br>";
        }

        closedir($place);
        echo "Closed directory";
    }
}
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Directory Operations</title>
</head>
<body>
    <h1>Directory Operations</h1>
    <h2>Create a New Directory:</h2>
    <form method="post">
        <label for="new_directory_name">New Directory Name:</label>
        <input type="text" name="new_directory_name" id="new_directory_name" required>
        <button type="submit" name="create_directory">Create Directory</button>
    </form>

    <h2>List Contents of a Directory:</h2>
    <form method="post">
        <label for="directory_path">Directory Path:</label>
        <input type="text" name="directory_path" id="directory_path" required>
        <button type="submit" name="list_contents">List Contents</button>
    </form>

    <h2>Change the Current Directory:</h2>
    <form method="post">
        <label for="new_directory_path">New Directory Path:</label>
        <input type="text" name="new_directory_path" id="new_directory_path" required>
        <button type="submit" name="change_directory">Change Directory</button>
    </form>

    <h2>Reset Directory Handle:</h2>
    <form method="post">
        <button type="submit" name="reset_directory_handle">Reset Directory</button>
    </form>
</body>
</html>
