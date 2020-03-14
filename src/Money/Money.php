<?php
declare(strict_types=1);

namespace Money;

class Money
{

    /**
     * @var int
     */
    private int $amount;
    /**
     * @var string
     */
    private string $currency;


    /**
     * Money constructor.
     * @param int $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @throws \Exception
     */
    public function Money()
    {
        if ($this->currency == null) {
            throw new \Exception('通貨を設定してください');
        }
    }

    /**
     * @param Money $arg
     * @return Money
     * @throws \Exception
     */
    public function MoneyAdd(Money $arg)
    {
        if ($arg == null) {
            throw new \Exception('通貨を設定してください');
        }

        if ($this->currency != $arg['currency']) {
            throw new \Exception('通貨単位が異なります。');
        }
        return new Money(ammount, arg['currency']);
    }

}

