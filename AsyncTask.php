<?php
    class AsyncTask{
       public function __construct(){

       } 
       //创建进程函数
       public static function run($call){
           $pid=pcntl_fork();//创建子进程
           if($pid==-1){
               die("fork(1) failed!\n");
           }else if($pid>0){

           }else{
               //子进程创建会话，并且成为进程组组长
               //posix_setsId();
               if(is_callable($call))$call();
               exit;
           }
       }
    }