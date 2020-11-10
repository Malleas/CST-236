<?php

require_once "UserBusinessService.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

$firstName = $_POST['firstName'];

$businessService = new UserBusinessService();

$users = $businessService->findByFirstName($firstName);

?>
    <h2>Search Results</h2>
<p>Here is what we found:</p>
<?php
echo "Searching for: ".$firstName;
if($users){
    include ('_displayAllUsers.php');
}else{
    echo"No results found";
}

//echo "<pre>".print_r($businessService->searchByFirstname($firstName), TRUE)."</pre>";
//echo json_encode($businessService->searchByFirstname($firstName));
?>