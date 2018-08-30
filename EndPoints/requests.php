<?php

namespace API\EndPoints;

abstract class Requests 
{
	abstract public function execute($ci);
}