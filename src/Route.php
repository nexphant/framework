<?php
namespace Nexphant;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class Route extends \Nexphant\Server\Attributes\Route
{
}
