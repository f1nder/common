<?php

namespace Doctrine\Tests\Common\Annotations\Fixtures;

/**
 * @ignoreAnnotation("NotBeIncluded")
 */
class ClassWithIgnoredAnnotation {
    /**
     * @NotBeIncluded
     */
    private $id;
}
