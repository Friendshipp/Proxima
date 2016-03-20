<?php

namespace _64FF00\Proxima;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\utils\TextFormat;

class Proxima extends PluginBase
{
	/*
        Proxima by 64FF00 (Twitter: @64FF00)

          888  888    .d8888b.      d8888  8888888888 8888888888 .d8888b.   .d8888b.
          888  888   d88P  Y88b    d8P888  888        888       d88P  Y88b d88P  Y88b
        888888888888 888          d8P 888  888        888       888    888 888    888
          888  888   888d888b.   d8P  888  8888888    8888888   888    888 888    888
          888  888   888P "Y88b d88   888  888        888       888    888 888    888
        888888888888 888    888 8888888888 888        888       888    888 888    888
          888  888   Y88b  d88P       888  888        888       Y88b  d88P Y88b  d88P
          888  888    "Y8888P"        888  888        888        "Y8888P"   "Y8888P"
    */

    public function onEnable()
    {
    }

	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args)
	{
		if(!isset($args[0]))
		{
			$sender->sendMessage(TextFormat::YELLOW . "Usage: /proxima <clisec / dpname / ip / port / uuid / usrname / vwdis>");

			return true;
		}

		switch($args[0])
		{
			case "clisec":

				if(!$sender->hasPermission("proxima.clisec"))
				{
					$sender->sendMessage(TextFormat::RED . "You don't have permission to use this command.");

					return true;
				}

				if(!isset($args[1]) || !isset($args[2]))
				{
					$sender->sendMessage(TextFormat::YELLOW . "Usage: /proxima clisec <player> <clientSecret>");

					return true;
				}

				$player = $this->getServer()->getPlayer($args[1]);

				if(!$player instanceof Player)
				{
					$sender->sendMessage(TextFormat::RED . "Invalid Player.");

					return true;
				}

				$this->setClientSecret($player, $args[2]);

				$sender->sendMessage(TextFormat::YELLOW . "Great job!");

				return true;

			case "dpname":

				if(!$sender->hasPermission("proxima.dpname"))
				{
					$sender->sendMessage(TextFormat::RED . "You don't have permission to use this command.");

					return true;
				}

				if(!isset($args[1]) || !isset($args[2]))
				{
					$sender->sendMessage(TextFormat::YELLOW . "Usage: /proxima dpname <player> <displayName>");

					return true;
				}

				$player = $this->getServer()->getPlayer($args[1]);

				if(!$player instanceof Player)
				{
					$sender->sendMessage(TextFormat::RED . "Invalid Player.");

					return true;
				}

				$this->setDisplayName($player, $args[2]);

				$sender->sendMessage(TextFormat::YELLOW . "Great job!");

				return true;

			case "ip":

				if(!$sender->hasPermission("proxima.ip"))
				{
					$sender->sendMessage(TextFormat::RED . "You don't have permission to use this command.");

					return true;
				}

				if(!isset($args[1]) || !isset($args[2]))
				{
					$sender->sendMessage(TextFormat::YELLOW . "Usage: /proxima ip <player> <ip>");

					return true;
				}

				$player = $this->getServer()->getPlayer($args[1]);

				if(!$player instanceof Player)
				{
					$sender->sendMessage(TextFormat::RED . "Invalid Player.");

					return true;
				}

				$this->setIp($player, $args[2]);

				$sender->sendMessage(TextFormat::YELLOW . "Great job!");

				return true;

			case "port":

				if(!$sender->hasPermission("proxima.port"))
				{
					$sender->sendMessage(TextFormat::RED . "You don't have permission to use this command.");

					return true;
				}

				if(!isset($args[1]) || !isset($args[2]))
				{
					$sender->sendMessage(TextFormat::YELLOW . "Usage: /proxima port <player> <port>");

					return true;
				}

				$player = $this->getServer()->getPlayer($args[1]);

				if(!$player instanceof Player)
				{
					$sender->sendMessage(TextFormat::RED . "Invalid Player.");

					return true;
				}

				$this->setPort($player, $args[2]);

				$sender->sendMessage(TextFormat::YELLOW . "Great job!");

				return true;

			case "uuid":

				if(!$sender->hasPermission("proxima.uuid"))
				{
					$sender->sendMessage(TextFormat::RED . "You don't have permission to use this command.");

					return true;
				}

				if(!isset($args[1]) || !isset($args[2]))
				{
					$sender->sendMessage(TextFormat::YELLOW . "Usage: /proxima uuid <player> <uniqueId>");

					return true;
				}

				$player = $this->getServer()->getPlayer($args[1]);

				if(!$player instanceof Player)
				{
					$sender->sendMessage(TextFormat::RED . "Invalid Player.");

					return true;
				}

				$this->setUniqueId($player, $args[2]);

				$sender->sendMessage(TextFormat::YELLOW . "Great job!");

				return true;

			case "usrname":

				if(!$sender->hasPermission("proxima.usrname"))
				{
					$sender->sendMessage(TextFormat::RED . "You don't have permission to use this command.");

					return true;
				}

				if(!isset($args[1]) || !isset($args[2]))
				{
					$sender->sendMessage(TextFormat::YELLOW . "Usage: /proxima usrname <player> <userName>");

					return true;
				}

				$player = $this->getServer()->getPlayer($args[1]);

				if(!$player instanceof Player)
				{
					$sender->sendMessage(TextFormat::RED . "Invalid Player.");

					return true;
				}

				$this->setUserName($player, $args[2]);

				$sender->sendMessage(TextFormat::YELLOW . "Great job!");

				return true;

			case "vwdis":

				if(!$sender->hasPermission("proxima.vwdis"))
				{
					$sender->sendMessage(TextFormat::RED . "You don't have permission to use this command.");

					return true;
				}

				if(!isset($args[1]) || !isset($args[2]))
				{
					$sender->sendMessage(TextFormat::YELLOW . "Usage: /proxima vwdis <player> <viewDistance>");

					return true;
				}

				$player = $this->getServer()->getPlayer($args[1]);

				if(!$player instanceof Player)
				{
					$sender->sendMessage(TextFormat::RED . "Invalid Player.");

					return true;
				}

				$this->setViewDistance($player, $args[2]);

				$sender->sendMessage(TextFormat::YELLOW . "Great job!");

				return true;

			default:

				$sender->sendMessage(TextFormat::YELLOW . "Usage: /proxima <dpname / ip / port / clisec / uuid / usrname / vwdis>");

				return true;
		}
	}

	/*
          888  888          d8888 8888888b. 8888888
          888  888         d88888 888   Y88b  888
        888888888888      d88P888 888    888  888
          888  888       d88P 888 888   d88P  888
          888  888      d88P  888 8888888P"   888
        888888888888   d88P   888 888         888
          888  888    d8888888888 888         888
          888  888   d88P     888 888       8888888
    */

	public function setDisplayName(Player $player, $displayName = "")
	{
		$this->modifyValue($player, "displayName", $displayName);
	}

	public function setIp(Player $player, $ip = "")
	{
		$this->modifyValue($player, "ip", $ip);
	}

	public function setPort(Player $player, $port = "")
	{
		$this->modifyValue($player, "port", $port);
	}

	public function setClientSecret(Player $player, $clientSecret = "")
	{
		$this->modifyValue($player, "clientSecret", $clientSecret);
	}

	public function setUniqueId(Player $player, $uniqueId = "")
	{
		$this->modifyValue($player, "uniqueId", $uniqueId);
	}

	public function setUserName(Player $player, $userName = "")
	{
		$this->modifyValue($player, "username", $userName);
	}

	public function setViewDistance(Player $player, $viewDistance = 56)
	{
		$this->modifyValue($player, "viewDistance", (int) $viewDistance);
	}

	/**
	 * @param Player $player
	 * @param $property
	 * @param string $value
	 * @return bool
	 */
	public function modifyValue(Player $player, $property, $value = "")
	{
		/** @var \ReflectionClass $tempReflectionClass */
		$tempReflectionClass = new \ReflectionClass('\pocketmine\Player');

		if(!$tempReflectionClass->hasProperty($property))
			return false;

		$tempProperty = $tempReflectionClass->getProperty($property);
		$tempProperty->setAccessible(true);

		$tempProperty->setValue($player, $value);

		return true;
	}
}
