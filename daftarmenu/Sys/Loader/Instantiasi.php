<?php
$index=new Index;
$index->setIndex("Form oop loh");
$index->setIndex("Form Input dengan metode Object Oriented");
$index->setIndex("ini Form OOP");

$form=new Form;
$form->setForm("index.php");
$form->setForm("post");


$labelname=new Label;
$labelname->setLabel("nama");
$labelname->setLabel("Nama Lengkap : ");

$inputname=new Input;
$inputname->setInput("text");
$inputname->setInput("nama");
$inputname->setInput("nama");


$labelemail=new Label;
$labelemail->setLabel("email");
$labelemail->setLabel("Email Aktif : ");

$inputemail=new Input;
$inputemail->setInput("email");
$inputemail->setInput("email");
$inputemail->setInput("email");

$buttonSubmit=new Button;
$buttonSubmit->setButton("submit");
$buttonSubmit->setButton("enter");
$buttonSubmit->setButton(strtoupper("enter"));

$buttonReset=new Button;
$buttonReset->setButton("reset");
$buttonReset->setButton("cancel");
$buttonReset->setButton(strtoupper("cancel"));

//before instant
$index->debuging();
/*
$form->debuging();
$labelname->debuging();
$inputname->debuging();
$labelemail->debuging();
$inputemail->debuging();
*/