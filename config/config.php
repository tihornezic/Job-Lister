<?php

// db params

/* define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "job_lister"); */


define("DB_HOST", getenv('DB_HOST'));
define("DB_USER", getenv('DB_NAME'));
define("DB_PASS", getenv('DB_PASS'));
define("DB_NAME", getenv('DB_USER'));

define("SITE_TITLE", "Job Lister")

?>