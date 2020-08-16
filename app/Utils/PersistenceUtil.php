<?php


namespace App\Utils;

use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class PersistenceUtil
{
    public static function getAllPaginate($model, $request)
    {

        $query = null;
        if ($request->has('page') && $request->has('itemsPerPage')) {
            $page = $request->query('page');
            $limit = $request->query('itemsPerPage');
            if ($request->has('sortBy') && $request->has('sortDesc')) {
                $query = $model::limit($limit)
                    ->offset(($page - 1) * $limit)
                    ->orderBy($request->query('sortBy'), $request->query('sortDesc') == 'true' ? 'DESC' : 'ASC');
            } else {
                $query = $model::limit($limit)->offset(($page - 1) * $limit);
            }
        } else {
            return $model::all();
        }
        \Log::info($query->toSql());
        $array = $query->get()->toArray();
        $total = $model::count();

        return new Paginator($array, $total, $limit, $page, [
            'path' => $request->url(),
            'query' => $request->query(),
        ]);
    }
}
