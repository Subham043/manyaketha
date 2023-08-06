<?php

namespace App\Modules\Campaign\Faq\Services;

use App\Http\Services\FileService;
use App\Modules\Campaign\Faq\Models\Faq;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\AllowedFilter;

class FaqService
{

    public function all(Int $campaign_id): Collection
    {
        return Faq::where('campaign_id', $campaign_id)->get();
    }

    public function paginate(Int $total = 10, Int $campaign_id): LengthAwarePaginator
    {
        $query = Faq::where('campaign_id', $campaign_id)->latest();
        return QueryBuilder::for($query)
                ->allowedFilters([
                    AllowedFilter::custom('search', new CommonFilter),
                ])
                ->paginate($total)
                ->appends(request()->query());
    }

    public function getById(Int $id): Faq|null
    {
        return Faq::findOrFail($id);
    }

    public function getByIdAndCampaignId(Int $campaign_id, Int $id): Faq|null
    {
        return Faq::where('campaign_id', $campaign_id)->findOrFail($id);
    }

    public function create(array $data): Faq
    {
        $faq = Faq::create($data);
        return $faq;
    }

    public function update(array $data, Faq $faq): Faq
    {
        $faq->update($data);
        return $faq;
    }

    public function delete(Faq $faq): bool|null
    {
        return $faq->delete();
    }

}

class CommonFilter implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        $query->where('question', 'LIKE', '%' . $value . '%')->orWhere('answer', 'LIKE', '%' . $value . '%');
    }
}
