<?php

namespace App\Adapters;

use App\Http\Resources\DefaultResource;
use App\Repositories\PaginationInterface;

class ApiAdapter
{
    public static function toJson(
        PaginationInterface $data
    )
    {
        return DefaultResource::collection($data->items())
                                ->additional([
                                    'meta' =>[
                                        'total' =>$data->total(),
                                        'is_First_Page' =>$data->isFirstPage(),
                                        'is_Last_Page' =>$data->isLastPage(),
                                        'current_page' =>$data->currentPage(),
                                        'next_page' =>$data->getNumberNextPage(),
                                        'previous_page' =>$data->getNumberPreviousPage(),
                                    ]
                                ]);
    }
}
