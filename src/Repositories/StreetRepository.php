<?php

namespace MeestShipping\Repositories;

class StreetRepository extends Repository
{
    /**
     * @param $country
     * @param null $text
     * @return array
     */
    public function search($country, $text = null): array
    {
        $items = meest_init('Api')->searchStreet([
            'cityID' => $country,
            'addressDescr' => "%$text%",
        ]);

        return array_map(function ($item) {
            return [
                'id' => $item['addressID'],
                'text' => $item['addressDescr']['descr'.$this->meestLocale] ?? null,
            ];
        }, $items);
    }
}