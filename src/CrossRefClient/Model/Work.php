<?php

namespace AbstractBabel\CrossRefClient\Model;

final class Work
{
    private $abstract;

    /**
     * @internal
     */
    public function __construct(
        string $abstract
    ) {
        $this->abstract = strip_tags($abstract);
    }

    public function getAbstract() : string
    {
        return $this->abstract;
    }
}
