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

namespace ConflictNetwork\Common\Traits\Player;

use ConflictNetwork\Common\Contracts\Player\PlayerId as IPlayerId;
use ConflictNetwork\Common\Contracts\Server\ServerId as IServerId;

/**
 * Provides a base implementation for the player contract.
 */
trait Player {

	/** @var \ConflictNetwork\Common\Contracts\Player\PlayerId */
	private $id;

	/** @var string */
	private $lastAddress;

	/** @var \ConflictNetwork\Common\Contracts\Server\ServerId */
	private $lastServerId;

	/**
	 * Initialise the player trait.
	 *
	 * @param \ConflictNetwork\Common\Traits\Player\PlayerId $id
	 * @param string $lastAddress
	 * @param string $lastServerId
	 */
	protected function initialisePlayer(PlayerId $id, string $lastAddress, string $lastServerId) {
		$this->id = $id;
		$this->lastAddress = $lastAddress;
		$this->lastServerId = $lastServerId;
	}

	/**
	 * Get the unique integer identifier.
	 *
	 * @return \ConflictNetwork\Common\Contracts\Player\PlayerId
	 */
	public function getId() : IPlayerId {
		return $this->id;
	}

	/**
	 * Get the last known IP address.
	 *
	 * @return string
	 */
	public function getLastAddress() : string {
		return $this->lastAddress;
	}

	/**
	 * Get the last server id.
	 *
	 * @return \ConflictNetwork\Common\Contracts\Server\ServerId
	 */
	public function getLastServerId() : IServerId {
		return $this->lastServerId;
	}

}