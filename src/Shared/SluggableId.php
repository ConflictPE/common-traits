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

namespace ConflictNetwork\Common\Traits\Shared;

use ConflictNetwork\Common\Contracts\Shared\SluggableId as ISluggableId;

/**
 * Provides a base implementation for the sluggable id contract.
 */
trait SluggableId {

	/** @var string */
	private $hashId;

	/** @var int */
	private $internalId;

	/**
	 * Initialise the sluggable id trait.
	 *
	 * @param string $hashId
	 * @param int $internalId
	 */
	public function initialiseId(string $hashId, int $internalId = -1) {
		$this->hashId = $hashId;
		$this->internalId = $internalId;
	}

	/**
	 * Get the hash identifier.
	 *
	 * @return string
	 */
	public function getHashId() : string {
		return $this->hashId;
	}

	/**
	 * Get the internal identifier.
	 *
	 * @return int
	 */
	public function getInternalId() : int {
		return $this->internalId;
	}

	/**
	 * Check if the internal integer id is present/valid.
	 *
	 * @return bool
	 */
	public function hasValidInternalId() : bool {
		return $this->internalId >= 0;
	}

	/**
	 * Compare two ids. This method should be used in comparisons in case any internal
	 * id representation changes.
	 *
	 * @param \ConflictNetwork\Common\Contracts\Shared\SluggableId $id
	 *
	 * @return bool
	 */
	public function equals(ISluggableId $id) {
		return is_a($id, $this->getBaseContract()) and //make sure the id is of the correct type
			(($id->hasValidInternalId() and $this->hasValidInternalId() and $id->getInternalId() === $this->internalId) or //try and check the internal ids first if available
			$id->getHashId() === $this->hashId); //chance of collision is basically non-existent due to our algorithm so this comparison is enough if it gets this far.
	}

	/**
	 * Get the base contract for use in comparison checks.
	 *
	 * @return string
	 */
	abstract public function getBaseContract() : string;

}