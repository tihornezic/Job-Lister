<?php

include_once 'config/init.php';
$job = new Job;

$template = new Template('templates/job-single.php');

// if there is an id in the url, set this variable to it, if not then null
$job_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJob($job_id);

echo $template



?>