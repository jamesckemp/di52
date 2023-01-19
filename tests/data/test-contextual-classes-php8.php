<?php
/**
 * PHP8+ contextual binding test classes.
 */

class Concrete8Dependency {

}

class Primitive8ConstructorClass
{

    public function __construct(
        private int $num,
        private Concrete8Dependency $dependency,
        protected string $hello,
        private ?string $optional = null
    ) {}

    public function num(): int {
        return $this->num;
    }

    public function dependency(): Concrete8Dependency {
        return $this->dependency;
    }

    public function hello(): string {
        return $this->hello;
    }

    public function optional(): ?string {
        return $this->optional;
    }
}
