<?php
$date = '30/12/2222';
$two='[[:digit:]]{2}';
if ( mb_ereg("^$two/$two/$two$two$", $date ) )
{
print "Valid date= $date";
} else {
print "Invalid date= $date";
}
?>