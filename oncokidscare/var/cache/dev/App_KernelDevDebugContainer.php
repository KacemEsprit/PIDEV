<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCcw8RMq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCcw8RMq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCcw8RMq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCcw8RMq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCcw8RMq\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ccw8RMq',
    'container.build_id' => '1d79e5e7',
    'container.build_time' => 1739493952,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCcw8RMq');
