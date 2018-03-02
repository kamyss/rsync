<?php
    require_once "AsyncTask.php";
    //master task start
    AsyncTask::run(function(){
            //asynchronous task
            //do something...
            sleep(10);   
    });
?>