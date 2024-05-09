<?php
namespace App\Domain\MemoCategory;
use Exception;

final class CategoryId
{
    const MIN_VALUE = 1;

    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function value(): int
    {
        return $this->value;
    }
}
