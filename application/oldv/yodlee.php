<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>



<div class='center processText'>Processing...</div><div>
<form action='https://node.developer.yodlee.com/authenticate/restserver/' method='post' id='rsessionPost'>
    FinappId : <input type='text' name='app' placeholder='FinappId' value='10003600' id='finappId'/><br/>
    RSession : <input type='text' name='rsession' placeholder='rsession' value='08062013_0:4feb34fe544694c6514f9b9f771a9c6f0c4aefec6a11b62ab57731a20d69b0aff6484dad883bf44c331f3082bce7745597ae036864c69bc3d8611ac54e9e978d'/>
Redirect : <input type='text' name='redirectReq' placeholder='true/false' value='true'/><br/>
Token : <input type='text' name='token' placeholder='token' value='23c28b3f7dffed3f0857eb977fc4125ad88beefb4d9497a39cc28fae02646076' id='token'/><br/>
Extra Params : <input type='text' name='extraParams' placeholder='Extra Params' value='' id='extraParams'/><br/></form></div>
<script>document.getElementById('rsessionPost').submit();</script>
<div class='center processText'>Processing...</div><div>

