<?php
namespace nexphant;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class Route extends \nexphant\Server\Attributes\Route
{
}
