<?php

/**
 *     ___                 __  _  _        _      ___    __
 *    / __\  ___   _ __   / _|| |(_)  ___ | |_   / _ \  /__\
 *   / /    / _ \ | '_ \ | |_ | || | / __|| __| / /_)/ /_\
 *  / /___ | (_) || | | ||  _|| || || (__ | |_ / ___/ //__
 *  \____/  \___/ |_| |_||_|  |_||_| \___| \__|\/     \__/
 *
 *
 *  Copyright (C) 2018 Conflict Network.
 *
 *  This is private software, you cannot redistribute and/or modify it in any way
 *  unless given explicit permission to do so. If you have not been given explicit
 *  permission to view or modify this software you should take the appropriate actions
 *  to remove this software from your device immediately.
 *
 * @author Jack Noordhuis
 *
 *
 */

declare(strict_types=1);

namespace ConflictNetwork\Common\Traits\Game;

use ConflictNetwork\Common\Contracts\Game\GameId as IGameId;
use ConflictNetwork\Common\Contracts\Game\GameType as IGameType;

/**
 * Provides a base implementation for the game contract.
 */
trait Game {

	/** @var \ConflictNetwork\Common\Contracts\Game\GameId */
	private $id;

	/** @var \ConflictNetwork\Common\Contracts\Game\GameType */
	private $type;

	/** @var int */
	private $online;

	/** @var int */
	private $max;

	/**
	 * Initialise the game trait.
	 *
	 * @param \ConflictNetwork\Common\Traits\Game\GameId $id
	 * @param \ConflictNetwork\Common\Traits\Game\GameType $type
	 * @param int $online
	 * @param int $max
	 */
	protected function initGame(GameId $id, GameType $type, int $online, int $max) {
		$this->id = $id;
		$this->type = $type;
		$this->online = $online;
		$this->max = $max;
	}

	/**
	 * Get the game id.
	 *
	 * @return \ConflictNetwork\Common\Contracts\Game\GameId
	 */
	public function getId() : IGameId {
		return $this->id;
	}

	/**
	 * Get the game type.
	 *
	 * @return \ConflictNetwork\Common\Contracts\Game\GameType
	 */
	public function getType() : IGameType {
		return $this->type;
	}

	/**
	 * Get the total online player count for this game.
	 *
	 * @return int
	 */
	public function getOnline() : int {
		return $this->online;
	}

	/**
	 * Get the total max player slots for this game.
	 *
	 * @return int
	 */
	public function getMax() : int {
		return $this->max;
	}

}