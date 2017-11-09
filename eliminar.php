
<?php

function Delete($path)
{
    if (is_dir($path) === true)
    {
        $files = array_diff(scandir($path), array('.', '..'));

        foreach ($files as $file)
        {
            Delete(realpath($path) . '/' . $file);
        }

        return rmdir($path);
    }

    else if (is_file($path) === true)
    {
        return unlink($path);
    }

    return false;
}

Delete("C:/xampp/htdocs/GytHot/data");
mkdir("C:/xampp/htdocs/GytHot/data", 0777, true);




if (file_exists("C:/xampp/htdocs/GytHot/Info/info.json")) {

	unlink("C:/xampp/htdocs/GytHot/Info/info.json");
	echo "<meta http-equiv='refresh' content='0;URL=cambio.php'/>";
} 
else {
	echo "<meta http-equiv='refresh' content='0;URL=sinrepositorio.php'/>";
}

	



?>

