<?php
if (class_exists(\Nexph\Server\Request::class) && !class_exists('Nexph\\Request', false)) {
    class_alias(\Nexph\Server\Request::class, 'Nexph\\Request');
}
if (class_exists(\Nexph\Server\Response::class) && !class_exists('Nexph\\Response', false)) {
    class_alias(\Nexph\Server\Response::class, 'Nexph\\Response');
}
if (class_exists(\Nexph\App::class) && !class_exists('Nexph\\Framework\\App', false)) {
    class_alias(\Nexph\App::class, 'Nexph\\Framework\\App');
}
if (class_exists(\Nexph\Application::class) && !class_exists('Nexph\\Framework\\Application', false)) {
    class_alias(\Nexph\Application::class, 'Nexph\\Framework\\Application');
}
