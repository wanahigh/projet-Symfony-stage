<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNdlyjuv\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNdlyjuv/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerNdlyjuv.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerNdlyjuv\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerNdlyjuv\appDevDebugProjectContainer();
