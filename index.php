<?php
// Sample app for AIVMS PHP2Shell detection test — vulnerable runtime, harmless code.
session_start();
echo "<h1>PHP2Shell sample</h1><p>PHP " . PHP_VERSION . "</p>";
echo '<form method="post" enctype="multipart/form-data">'
   . '<input type="hidden" name="' . ini_get("session.upload_progress.name") . '" value="x">'
   . '<input type="file" name="f"><button>Upload</button></form>';
