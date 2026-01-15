<?php
class Customer {
    public string $forename;
    public string $surname;
    public string $email;
    public string $password;
    public array $accounts;

    public function __construct(string $forename, string $surname, string $email, string $password, $accounts = []) {
        $this->forename = $forename;
        $this->surname = $surname;
        $this->accounts = $accounts;
    }

    public function getFullName() {
        return $this->forename . " " . $this->surname;
    }
}
?>
