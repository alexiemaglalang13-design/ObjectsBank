<?php
class Account {
    public int $number;
    public string $type;
    public float $balance;

    public function __construct(int $number, string $type, float $balance) {
        $this->number = $number;
        $this->type = $type;
        $this->balance = $balance;
    }
}
?>
