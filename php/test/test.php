<?php
require_once "../vendor/autoload.php";
require_once "MyGreeter_Client_Test.php";
$testClass = new Test();
$testClass->setUp();
print_R($testClass->test_Instance());
print_R($testClass->test_getGreeting());

//composer加载了测试类
//test_两个方法是应用类测试的断言方法
//调整类Test的类名
//新增了greeter类
