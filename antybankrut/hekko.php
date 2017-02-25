<?php


echo 'jesli nie wyswietla informacji po user info znaczy ze nie dziala funkcja exec <br/>';



// test_exec.php
// wyświetli informacje o aktualnie zalogowanym użytkowniku.
echo exec('whoami');


echo '<br/>test funkcji system<br/>';
echo '<pre>';

// Outputs all the result of shellcommand "ls", and returns
// the last output line into $last_line. Stores the return value
// of the shell command in $retval.
$last_line = system('ls', $retval);

// Printing additional info
echo '
</pre>
<hr />Last line of the output: ' . $last_line . '
<hr />Return value: ' . $retval;



phpinfo();
?>