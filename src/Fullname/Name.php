<?php
declare(strict_types=1);

namespace FullName;

class Name
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function Name(): string
    {
        if ($this->value == null) {
            throw new \Exception('文字列を入力してください');
        }

        return $this->value;
    }
}
