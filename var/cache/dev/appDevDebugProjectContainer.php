<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0gla09d\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0gla09d/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container0gla09d.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container0gla09d\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container0gla09d\appDevDebugProjectContainer([
    'container.build_hash' => '0gla09d',
    'container.build_id' => 'e0c235d0',
    'container.build_time' => 1634763642,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0gla09d');
