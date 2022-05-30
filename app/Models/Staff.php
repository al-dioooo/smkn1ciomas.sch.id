<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'place_of_birth',
        'date_of_birth',
        'gender',
        'religion',
        'marrital_status',

        'address',
        'province',
        'city',
        'district',
        'rural',
        'neighbourhood',
        'hamlet',
        'post_code',
        'latitude',
        'longitude',

        'phone',

        'nip',
        'nuptk',
        'employment_status',
        'ptk',
        'additional_duty',
        'cpns_sk',
        'cpns_date',
        'appointment_sk',
        'appointment_tmt',
        'appointment_institute',
        'rank',
        'source_of_salary',
        'pns_tmt',
        'karpeg',
        'pair_pns_identity_link',
        'nuks',
        'is_licensed_as_principal',
        'had_supervision_training',

        'family_certificate_number',
        'mother_name',
        'pair_name',
        'pair_nip',
        'pair_profession',

        'npwp',
        'tax_payer_name',
        'nationality',
        'bank_name',
        'bank_account_number',
        'bank_account_name',

        'is_mastering_braille',
        'is_mastering_gestural_language'
    ];

    protected $appends = [
        'auth_data',
        'pair_pns_identity'
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

    public function getAuthDataAttribute()
    {
        return $this->auth;
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->whereHas('auth', function ($q) {
                $q->where('name', 'like', '%' . request('search') . '%')->orWhere('email', 'like', '%' . request('search') . '%');
            })->orWhere('nik', 'like', '%' . request('search') . '%')->orWhere('nip', 'like', '%' . request('search') . '%')->orWhere('nuptk', 'like', '%' . request('search') . '%');
        });
    }

    public function getProgressAttribute()
    {
        return count(array_filter($this->attributes));
    }

    public function getPairPnsIdentityAttribute()
    {
        return $this->pair_pns_identity_link ? Storage::disk('public')->url($this->pair_pns_identity_link) : $this->defaultNoImageUrl();
    }

    protected function defaultNoImageUrl() {
        return 'https://placehold.co/525x225/EBF4FF/7F9CF5?text=Empty,%20please%20upload%20file.&font=source-sans-pro';
    }

    public function auth()
    {
        return $this->morphOne(User::class, 'authenticatable');
    }
}
