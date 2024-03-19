<?php

declare(strict_types=1);

namespace Raiolanetworks\Atlas\Commands;

use Illuminate\Console\Command;
use Raiolanetworks\Atlas\Enum\EntitiesEnum;
use Raiolanetworks\Atlas\Models\State;

class StatesSeeder extends BaseSeeder
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    public $signature = 'atlas:states';

    /**
     * The console command description.
     *
     * @var string
     */
    public $description = 'Seeding of states in the database';

    protected ?string $dataPath = __DIR__ . '/../../resources/json/states.json';

    protected string $pluralName = EntitiesEnum::States->value;

    protected ?string $model = State::class;

    protected function parseItem(array $rawItem, array &$bulk): void
    {
        $bulk[] = [
            'id'           => $rawItem['id'],
            'country_id'   => $rawItem['country_id'],
            'name'         => $rawItem['name'],
            'country_code' => $rawItem['country_code'],
            'state_code'   => $rawItem['state_code'],
            'type'         => $rawItem['type'],
            'latitude'     => $rawItem['latitude'],
            'longitude'    => $rawItem['longitude'],
        ];
    }
}
