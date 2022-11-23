<?php

namespace App\Http\Requests;

use App\Models\Pimpinan;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;
use Str;

class PimpinanRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'image'     => 'required|image|max:1024',
            'nama'      => 'required',
            'deskripsi' => 'required',
            'facebook'  => 'nullable',
            'twitter'   => 'nullable',
            'instagram' => 'nullable',
        ];

        return $rules;
    }

    public function storePimpinanImage()
    {
        $image = $this->file('image');

        $dir = Str::finish(Pimpinan::STORAGE_PATH, '/');

        if(!Storage::exists($dir)) {
            Storage::makeDirectory($dir);
        }
        $fileName = $image->storeAs($dir, $image->hashName());

        return $fileName;
    }
}
