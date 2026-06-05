<?php
namespace Nexph;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class Route extends \Nexph\Server\Attributes\Route
{
}
