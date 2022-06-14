<php?
session_start();
$firstname = $_REQUEST[ 'firstname'];
$lastname = $_REQUEST[ 'lastname'];

   if ($firstname == null||$lastname ==null) {
        echo "null username";
}else{
   

   echo "done";
}
  ?>

