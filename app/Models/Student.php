<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nickname',
        'nis',
        'nisn',
        'major',
        'class',
        'gender',
        'place_of_birth',
        'date_of_birth',
        'religion',
        'nationality',
        'which_child',
        'siblings',
        'phone',

        'address',
        'district',
        'city',
        'transport',
        'status_of_residence',
        'live_with',

        'parent_name',
        'parent_status',
        'parent_place_of_birth',
        'parent_date_of_birth',
        'parent_education',
        'parent_proffession',
        'parent_income',
        'parent_liabilities',
        'parent_phone',
        'parent_address',

        'school_before',
        'school_certificate_link',
        'school_certificate_number',
        'photo_link',
        'birth_certificate_link',
        'registration_path'
    ];

    protected $appends = [
        'auth_data'
    ];

    public function getCreatedAtAttribute($value)
    {
        if ($value != null) {
            return Carbon::parse($value)->isoFormat('D MMMM YYYY');
        }
    }

    public function getUpdatedAtAttribute($value)
    {
        if ($value != null) {
            return Carbon::parse($value)->isoFormat('D MMMM YYYY');
        }
    }

    public function getAuthDataAttribute() {
        return $this->auth;
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->whereHas('auth', function ($q) {
                $q->where('name', 'like', '' . request('search') . '%');
            })->orWhere('class', 'like', '%' . request('search') . '%')->orWhere('nis', 'like', '%' . request('search') . '%')->orWhere('nisn', 'like', '%' . request('search') . '%');
        });
    }

    public function getProfileCompletionProgressAttribute()
    {
        return count(array_filter($this->attributes));
    }

    public function auth() {
        return $this->morphOne(User::class, 'authenticatable');
    }
}
