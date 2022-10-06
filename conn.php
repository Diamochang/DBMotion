<?php
/**
* DBMotion 1.1.0
* DBMotion basic code framework https://download.csdn.net/download/modern358/11064349, thanks.
* DBMotion basic code framework created by PhpStorm. 
* DBMotion MDUI import & consummate by Diamochang (Mike Wang, https://gitee.com/Diamochang and https://github.com/Diamochang)
* DBMotion-based organization ICP system ©Favocas 2022.
*/

//建立数据库连接
$conn = mysqli_connect("localhost","root","","icp_data");

@ mysqli_set_charset($conn,"utf8mb4");

if(mysqli_connect_errno())
{
    echo "连接MySQL数据库失败。如您频繁遇到此情况请联系我们。".mysqli_connect_error();
}

 