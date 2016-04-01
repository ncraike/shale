<?php declare(strict_types=1);
namespace Schale\Annotation;

/**
 * @Annotation
 */
class Id extends Property
{
    public function __construct(array $values)
    {
        $this->name = 'id';
        $this->type = 'number';
    }
}
