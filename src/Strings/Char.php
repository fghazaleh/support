<?php

declare(strict_types=1);

namespace FG\Support\Strings;

class Char
{
    /**
     * @var string
     */
    private $char;

    public function __construct(string $char)
    {
        $this->char = $char;
    }

    public function toString(): string
    {
        return $this->char;
    }

    public function __toString(): string
    {
        return $this->toString();
    }

    public function code(): int
    {
        return ord($this->char);
    }

    public static function fromCode(int $byteValue):Char
    {
        return new Char(chr($byteValue));
    }
}