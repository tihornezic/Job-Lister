<?php

include_once 'config/init.php';
$job = new Job;

$template = new Template('templates/job-create.php');



// categories dropdown
$template->categories = $job->getCategories();

echo $template



?>