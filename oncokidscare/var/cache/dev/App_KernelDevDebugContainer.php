<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEimmE4s\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEimmE4s/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEimmE4s.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEimmE4s\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEimmE4s\App_KernelDevDebugContainer([
    'container.build_hash' => 'EimmE4s',
    'container.build_id' => '9b1bd77b',
    'container.build_time' => 1740778804,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEimmE4s');
