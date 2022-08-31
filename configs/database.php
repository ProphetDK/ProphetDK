<?php
try
{
    $sql["host"] = "";
    $sql["user"] = "";
    $sql["pass"] = "";
    $sql["base"] = "";
    $db = new PDO(":host=". $sql["host"] .";dbname=". $sql["base"], $sql["user"], $sql["pass"]);
}
catch (Exception $e)
{
        die("Error : " . $e->getMessage());
}
