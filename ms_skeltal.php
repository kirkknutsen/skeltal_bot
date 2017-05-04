<?php

$botToken = "355894613:AAHBaUoUiYIX5eTn6_j4BDsgHxjrv3ray6Q";
$website = "https://api.telegram.org/bot".$botToken;


$update = file_get_contents('php://input');

$update = json_decode($update, TRUE);

$chatID = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
$shrek = "BAADAQADAgADnHQRRa44LJ5gvpleAg";
$dootmeup = "BAADAQADAQADnHQRRYOpcNocWlMQAg";
$daddy = "BAADAQADBQADnHQRRfZ-I3MnBCPxAg";
$ded = "AgADAQADs6cxG5G3CEVHjKOkcYaamIzS5y8ABD312NHquZmTIiQBAAEC";
$custard = "AgADAQADsacxG0PvEEVbI9L9qVaVrx0p7y8ABPTpQAsZgYpqE08AAgI";
$tibbs = "AgADAQADsqcxG0PvEEWMN3ZWAg5EGxgG6C8ABKoMA7TTLUFv_9UAAgI";
$jare = 'AgADAQADs6cxG0PvEEV0I0nd3QRbvTqC3i8ABALAc6g7WmcqsVwAAgI';
$billy = 'AgADAQADtKcxG0PvEEVhKTk2Do-dJTQ37y8ABPQJzPMtKsYsJxsAAgI';
$trumps = 'AgADAQADtacxG0PvEEXCCXypkiL4K6Um7y8ABNJgBb9MUJzCSVgAAgI';
$equality = '/equality/i';
$greg = '/greg/i';
$woke = '/woke/i';
$dead = '/ded/i';
$somebody = '/somebody/i';
$greasy = '/greasy/i';
$schwifty = '/schwifty/i';
$crumb = '/crumb/i';
$hill = '/hill/i';
$trump = '/trump/i';

if (preg_match($equality, $message)) {
  sendMessage($chatID, "ms skeltal doots 78.6 percent less than mr skeltal for the same thank");
  break;
}

if (preg_match($greg, $message)) {
  sendDaddy($chatID, $daddy);
  break;
}

if (preg_match($woke, $message)) {
  sendDoot($chatID, $dootmeup);
  break;
}


if (preg_match($somebody, $message)) {
  sendShrek($chatID, $shrek);
  break;
}

if (preg_match($greasy, $message)) {
  sendgreasy($chatID, $custard);
  break;
}

if (preg_match($schwifty, $message)) {
  sendschwifty($chatID, $tibbs);
  break;
}

if (preg_match($crumb, $message)) {
  sendcrumb($chatID, $jare);
  break;
}


if (preg_match($trump, $message)) {
  sendtrump($chatID, $trumps);
  break;
}




function sendtrump ($chatID, $trumps) {
  $prl = $GLOBALS[website]."/sendPhoto?chat_id=".$chatID."&photo=".($trumps);
  file_get_contents($prl);
}

function sendschwifty ($chatID, $tibbs) {
  $prl = $GLOBALS[website]."/sendPhoto?chat_id=".$chatID."&photo=".($tibbs);
  file_get_contents($prl);
}

function sendgreasy ($chatID, $custard) {
  $prl = $GLOBALS[website]."/sendPhoto?chat_id=".$chatID."&photo=".($custard);
  file_get_contents($prl);
}

function sendcrumb ($chatID, $jare) {
  $prl = $GLOBALS[website]."/sendPhoto?chat_id=".$chatID."&photo=".($jare);
  file_get_contents($prl);
}
function sendhill ($chatID, $billy) {
  $prl = $GLOBALS[website]."/sendPhoto?chat_id=".$chatID."&photo=".($billy);
  file_get_contents($prl);
}


function sendMessage ($chatID, $message) {

  $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatID."&text=".($message);
  file_get_contents($url);
}

function sendShrek ($chatID, $shrek) {

  $irl = $GLOBALS[website]."/sendVideo?chat_id=".$chatID."&video=".($shrek);
  file_get_contents($irl);
}

function sendDaddy($chatID, $daddy) {

  $irl = $GLOBALS[website]."/sendVideo?chat_id=".$chatID."&video=".($daddy);
  file_get_contents($irl);
}

function sendDoot ($chatID, $dootmeup) {

  $lrl = $GLOBALS[website]."/sendVideo?chat_id=".$chatID."&video=".($dootmeup);
  file_get_contents($lrl);
}

function sendDed ($chatID, $ded) {
  $prl = $GLOBALS[website]."/sendPhoto?chat_id=".$chatID."&photo=".($ded);
  file_get_contents($prl);


}
?>
