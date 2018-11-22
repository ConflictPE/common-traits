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
use ConflictNetwork\Common\Traits\Shared\SluggableId;

/**
 * Provides a base implementation for the game id contract.
 */
trait GameId {
	use SluggableId;

	/**
	 * Get the base contract for use in comparison checks.
	 *
	 * @return string
	 */
	public function getBaseContract() : string {
		return IGameId::class;
	}

}