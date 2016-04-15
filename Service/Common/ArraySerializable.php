<?php
namespace Service\Common;

interface ArraySerializable
{
	static function fromArray($array);
	function toArray();
}