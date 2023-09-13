<?php

function hello($name,$email){
   return[
'name' => $name,
'email' => $email
   ];
}
$data =  hello('MOMMO','momo@gmal.com');

echo 'name : '.$data['name'].', Email : '.$data['email'];