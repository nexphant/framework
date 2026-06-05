<?php
namespace Nexph;

class App
{
    private Application $app;

    private function __construct(array $config = [])
    {
        $this->app = new Application($config);
    }

    public static function create(array $config = []): self
    {
        $instance = new self($config);
        return $instance;
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

    public function put(string $path, callable $handler): self
    {
        $this->app->put($path, $handler);
        return $this;
    }

    public function delete(string $path, callable $handler): self
    {
        $this->app->delete($path, $handler);
        return $this;
    }

    public function use(callable $middleware): self
    {
        $this->app->use($middleware);
        return $this;
    }

    public function group(string $prefix, callable $callback): self
    {
        $this->app->group($prefix, $callback);
        return $this;
    }

    public function serve(int $port = 8080): void
    {
        $this->app->listen($port);
    }

    public function queue(): mixed
    {
        return null;
    }

    public function db(): mixed
    {
        return \Nexph\Database\DB::class;
    }

    public function cache(): mixed
    {
        return null;
    }

    public function runtime(): mixed
    {
        return \Nexph\Runtime\Runtime::class;
    }
}

