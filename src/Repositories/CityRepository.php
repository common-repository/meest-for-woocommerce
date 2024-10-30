<?php

namespace MeestShipping\Repositories;

class CityRepository extends Repository
{
    /**
     * @param $city
     * @param null $text
     * @return array
     */
    public function search($country, $text = null): array
    {
        $items = meest_init('Api')->searchCity([
            'countryID' => $country,
            'cityDescr' => "%$text%",
        ]);

        return array_map(function ($item) {
            $city = $item['cityDescr']['descr'.$this->meestLocale] ?? null;
            $district = $item['districtDescr']['descr'.$this->meestLocale] ?? null;
            $region = meest_ucfirst($item['regionDescr']['descr'.$this->meestLocale] ?? null);

            return [
                'id' => $item['cityID'],
                'text' => $city . ($city !== $district ? ', ' . $district : '') . ', ' . $region,
                'city' => $city,
                'region' => $region,
                'district' => $district,
                'branch' => $item['isBranchInCity'],
                'zone' => $item['deliveryZone'],
                'latitude' => $item['latitude'],
                'longitude' => $item['longitude'],
            ];
        }, $items);
    }
}
