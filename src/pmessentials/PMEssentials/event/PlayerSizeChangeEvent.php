<?php

namespace pmessentials\PMEssentials\event;

use pocketmine\command\CommandSender;
use pocketmine\event\Cancellable;
use pocketmine\event\player\PlayerEvent;
use pocketmine\event\plugin\PluginEvent;
use pocketmine\Player;

class PlayerSizeChangeEvent extends PlayerCommandEvent implements Cancellable{

    protected $size;
    protected $canceled = false;

    public function __construct(Player $player, CommandSender $sender, int $size){
        parent::__construct($player, $sender);
        $this->size = $size;
    }

    public function isCancelled(): bool
    {
        return $this->canceled;
    }

    public function setCancelled(bool $value = true) : void
    {
        $this->canceled = $value;
    }

    public function getSize() : int{
        return $this->size;
    }

    public function setFlight(int $size) : void{
        $this->size = $size;
    }
}