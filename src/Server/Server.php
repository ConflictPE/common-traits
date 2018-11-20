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

namespace ConflictNetwork\Common\Traits\Server;

use ConflictNetwork\Common\Contracts\Server\ServerId as IServerId;
use ConflictNetwork\Common\Contracts\Server\ServerType as IServerType;

/**
 * Provides a base implementation for the server contract.
 */
trait Server {

	/** @var \ConflictNetwork\Common\Contracts\Server\ServerId */
	private $id;

	/** @var \ConflictNetwork\Common\Contracts\Server\ServerType */
	private $type;

	/** @var int */
	private $online;

	/** @var int */
	private $max;

	/**
	 * Initialise the server trait.
	 *
	 * @param \ConflictNetwork\Common\Contracts\Server\ServerId $id
	 * @param \ConflictNetwork\Common\Contracts\Server\ServerType $type
	 * @param int $online
	 * @param int $max
	 */
	public function initialiseServer(IServerId $id, IServerType $type, int $online, int $max) {
		$this->id = $id;
		$this->type = $type;
		$this->online = $online;
		$this->max = $max;
	}

	/**
	 * Get the server id.
	 *
	 * @return \ConflictNetwork\Common\Contracts\Server\ServerId
	 */
	public function getId() : IServerId {
		return $this->id;
	}

	/**
	 * Get the server type.
	 *
	 * @return \ConflictNetwork\Common\Contracts\Server\ServerType
	 */
	public function getType() : IServerType {
		return $this->type;
	}

	/**
	 * Get the online player count.
	 *
	 * @return int
	 */
	public function getOnline() : int {
		return $this->online;
	}

	/**
	 * Get the max player slots.
	 *
	 * @return int
	 */
	public function getMax() : int {
		return $this->max;
	}

}