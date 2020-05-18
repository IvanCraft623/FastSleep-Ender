<?php

namespace IvanCraft623\FastSleep;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerBedEnterEvent;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as TE;
use pocketmine\network\mcpe\protocol\LevelEventPacket;

class FastSleep extends PluginBase implements Listener {

	public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
	
    public function onPlayerEnterToBed(PlayerBedEnterEvent $event){
    	$this->getScheduler()->scheduleDelayedTask(new EnterBedTask($this), 90);
    }
}
