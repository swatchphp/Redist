<?php

namespace Redist\search;
require_once("abssearch.php");
require_once("pfiles.php");
require_once("abssetup.php");

class user_search extends Redist implements search {

	// look for an email address amongst the
	// files that are in self::path_user
	public static function find_user_first($token) {
		$search = [];
		$search = parent::detail_scrape();
		krsort($search);
		if ($search[0] != null)
			return $search[0];
		return false;
	}

	// look for an email address amongst the
	// files that are in self::path_user
	public static function find_user_last($token) {
		$search = [];
		$search = parent::detail_scrape();
		ksort($search);
		if ($search[0] != null)
			return $search[0];
		return false;
	}

	// look for an email address amongst the
	// files that are in self::path_user
	public static function find_user_range($token) {
		$search = [];
		$search = parent::detail_scrape();
		krsort($search);
		if ($search != null)
			return $search;
		return false;
	}

	// look for an email address amongst the
	// files that are in "users.conf"
	public static function find_user_queue($token) {
		$search = [];
		$y = sizeof(parent::$request);
		$search = parent::detail_scrape();
		if ($search != null)
			return $search;
		return false;
	}

}