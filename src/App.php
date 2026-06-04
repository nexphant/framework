<?php
namespace Nexph;

use Nexph\Server\Application;

class App
{
    private Application $app;

    private function __construct()
    {
        $this->app = new Application();
    }

    public static function create(): self
    {
        return new self();
    }

    public function get(string $path, callable $handler): self
    {
        $this->app->get($path, $handler);
        return $this;
    }

    public function post(string $path, callable $handler): self
    {
        $this->app->post($path, $handler);
        return $this;
    }

    public function serve(int $port = 8080): void
    {
        $this->app->listen($port);
    }
}
