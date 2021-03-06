<?php
namespace Edu\Cnm\Foodquisition;
require_once("autoload.php");
/**
 * JsonObjectStorage Class
 *
 * This class adds JsonSerializable to SplObjectStorage, allowing for the stored data to be json serialized. This lets the data be gotten in the interactions between frontend and backend in the RESTful apis.
 *
 *@author Dannielle Bojorquez <dannielle.bojorquez@gmail.com>
 *
 **/
class JsonObjectStorage extends \SplObjectStorage implements \JsonSerializable {
	public function jsonSerialize() {
		$fields = [];
		foreach($this as $object) {
			$fields[] = $object;
			$object->info = $this[$object];
		}
		return ($fields);
	}
}