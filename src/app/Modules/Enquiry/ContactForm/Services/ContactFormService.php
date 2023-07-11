<?php

namespace App\Modules\Enquiry\ContactForm\Services;

use App\Http\Services\FileService;
use App\Modules\Enquiry\ContactForm\Models\ContactForm;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\AllowedFilter;

class ContactFormService
{

    public function all(): Collection
    {
        return ContactForm::all();
    }

    public function paginate(Int $total = 10): LengthAwarePaginator
    {
        $query = ContactForm::latest();
        return QueryBuilder::for($query)
                ->allowedFilters([
                    AllowedFilter::custom('search', new CommonFilter),
                ])
                ->paginate($total)
                ->appends(request()->query());
    }

    public function getById(Int $id): ContactForm|null
    {
        return ContactForm::findOrFail($id);
    }

    public function create(array $data): ContactForm
    {
        return ContactForm::create($data);
    }

    public function update(array $data, ContactForm $contactForm): ContactForm
    {
        $contactForm->update($data);
        return $contactForm;
    }

    public function saveImage(ContactForm $contactForm): ContactForm
    {
        $this->deleteImage($contactForm);
        $image = (new FileService)->save_file('image', (new ContactForm)->image_path);
        return $this->update([
            'image' => $image,
        ], $contactForm);
    }

    public function delete(ContactForm $contactForm): bool|null
    {
        $this->deleteImage($contactForm);
        return $contactForm->delete();
    }

    public function deleteImage(ContactForm $contactForm): void
    {
        if($contactForm->image){
            $path = str_replace("storage","app/public",$contactForm->image);
            (new FileService)->delete_file($path);
        }
    }

}

class CommonFilter implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        $query->where('name', 'LIKE', '%' . $value . '%')
        ->orWhere('phone', 'LIKE', '%' . $value . '%')
        ->orWhere('service', 'LIKE', '%' . $value . '%')
        ->orWhere('page_url', 'LIKE', '%' . $value . '%')
        ->orWhere('message', 'LIKE', '%' . $value . '%')
        ->orWhere('email', 'LIKE', '%' . $value . '%');
    }
}
