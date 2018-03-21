<?php

namespace modules\Config;

class Activate
{
	public static function activate() {
		flush_rewrite_rules();
	}
}