<?php

declare(strict_types=1);

namespace Raiolanetworks\Atlas\Commands;

use Raiolanetworks\Atlas\Enum\EntitiesEnum;
use Raiolanetworks\Atlas\Models\City;

class CitiesSeeder extends BaseSeeder
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    public $signature = 'atlas:cities';

    /**
     * The console command description.
     *
     * @var string
     */
    public $description = 'Seeding of cities in the database';

    protected ?string $dataPath = __DIR__ . '/../../resources/json/cities.json';

    protected string $pluralName = EntitiesEnum::Cities->value;

    protected ?string $model = City::class;

    protected function parseItem(array $rawItem, array &$bulk): void
    {
        $bulk[] = [
            'id'           => $rawItem['id'],
            'country_id'   => $rawItem['country_id'],
            'state_id'     => $rawItem['state_id'],
            'name'         => $rawItem['name'],
            'country_code' => $rawItem['country_code'],
            'state_code'   => $rawItem['state_code'],
            'latitude'     => $rawItem['latitude'],
            'longitude'    => $rawItem['longitude'],
        ];
    }
}
