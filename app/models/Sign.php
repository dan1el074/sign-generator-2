<?php 

namespace App\Models;

class Sign {
    private string $name;
    private string $position;
    private string | null $phone;
    private bool $withWhatsapp;
    private bool $withPGS;

    public function __construct(string $name, string $position, string | null $phone, bool $withWhatsapp, bool $withPGS) {
    	$this->name = $name;
    	$this->position = $position;
    	$this->phone = $phone;
    	$this->withWhatsapp = $withWhatsapp;
    	$this->withPGS = $withPGS;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPosition(): string {
        return $this->position;
    }

    public function getPhone(): string | null {
        return $this->phone;
    }

    public function getWithWhatsapp(): bool {
        return $this->withWhatsapp;
    }

    public function getWithPGS(): bool {
        return $this->withPGS;
    }
}
