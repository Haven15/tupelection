<?php
$username="14-037-027";
$password="delacruz15";
//$no_url=urlencode("0078915030900");
$jsonurl = 'http://www.tup.edu.ph/android/get_studprofile/'.$username.'/'.$password.'';
$json = file_get_contents($jsonurl);
echo $json;
$obj = json_decode($json);
if($obj->{'success'} == '1'){
  echo "YEHEY!!! <br />";
}
else if($obj->{'success'} == '0'){
  echo "Boooo!!! <br />";
}
foreach ($obj->student as $student){
  echo $fname = $student->fname;
  echo $lname = $student->lname;
  echo $initial = $student->initial;
  echo $course = $student->course;
}

//echo $obj->{'student'};

echo "$username <br />";
echo "$password";
?>
