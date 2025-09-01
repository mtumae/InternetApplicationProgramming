<?php
require_once 'autoload.php';

print "<p>Running index.php...</p>";

$hello = new hello();
$form = new forms();
$layout = new layout();

print $hello->greet();
print $hello->today();
print $form->signUp();
print $layout->header($conf);
print $layout->footer($conf);

?>