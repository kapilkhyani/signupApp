<?php
$output = shell_exec('git stash');
echo "<pre>$output</pre>";

$output = shell_exec('git status');
echo "<pre>$output</pre>";

$output2 = shell_exec('git pull');
echo "<pre>$output2</pre>";

$output3 = shell_exec('git status');
echo "<pre>$output3</pre>";

// $output3 = shell_exec('git reset --hard origin/master');
// echo "<pre>$output3</pre>";
?>
<h2>pulled</h2>
