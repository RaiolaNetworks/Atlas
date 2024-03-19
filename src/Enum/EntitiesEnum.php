<?php

declare(strict_types=1);

namespace Raiolanetworks\Atlas\Enum;

enum EntitiesEnum: string
{
    case Countries  = 'countries';
    case States     = 'states';
    case Cities     = 'cities';
    case Timezones  = 'timezones';
    case Currencies = 'currencies';
    case Languages  = 'languages';

    public function getLabel(): ?string
    {
        return $this->name;
    }

    public function getSingular(): ?string
    {
        return match ($this->getLabel()) {
            self::Countries->value  => 'country',
            self::States->value     => 'state',
            self::Cities->value     => 'city',
            self::Timezones->value  => 'timezone',
            self::Currencies->value => 'currency',
            self::Languages->value  => 'language',
            default                 => $this->value
        };
    }
}
