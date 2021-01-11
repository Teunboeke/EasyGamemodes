<?php

namespace Teunboeke\EasyGamemodes;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use pocketmine\Player;

class Main extends PluginBase{

public function onCommand(CommandSender $sender, Command $cmd, string $label,

switch($cmd->getname()){

case "gm0"
if($sender instanceof Player){
if($sender->hasPermissions("gm0.cmd")){
$sender->sendMessage("Succesfully switched to gm0");
$sender->setGamemode(0);
}else{
$sender->sendMessage("§cYou do not have permissions to use this command");
  }
}
break;

case "gm1"
if($sender instanceof Player){
if($sender->hasPermissions("gm1.cmd")){
$sender->sendMessage("Succesfully switched to gm1");
$sender->setGamemode(1);
}else{
$sender->sendMessage("§cYou do not have permissions to use this command");
  }
}
break;

case "gm2"
if($sender instanceof Player){
if($sender->hasPermissions("gm2.cmd")){
$sender->sendMessage("Succesfully switched to gm2");
$sender->setGamemode(2);
}else{
$sender->sendMessage("§cYou do not have permissions to use this command");
  }
}
break;

case "gm3"
if($sender instanceof Player){
if($sender->hasPermissions("gm3.cmd")){
$sender->sendMessage("Succesfully switched to gm3");
$sender->setGamemode(1);
}else{
$sender->sendMessage("§cYou do not have permissions to use this command");
  }
}
break;
}
return true;
    }
 }
