<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'nuptk',
        'gender',
        'place_of_birth',
        'date_of_birth',
        'nip',
        'status',
        'ptk',
        'religion',
        'address',
        'neighbourhood',
        'hamlet',
        'village',
        'urban_village',
        'sub_district',
        'post_code',
        'phone',
        'additional_duty',
        'cpns_sk',
        'cpns_date',
        'appointment_sk',
        'appointment_tmt',
        'appointment_institute',
        'rank',
        'source_of_salary',
        'mother_name',
        'marrital_status',
        'pair_name',
        'pair_nip',
        'pair_profession',
        'is_licensed_as_principal',
        'had_supervision_training',
        'is_mastering_braille',
        'is_mastering_gestural_language',
        'tax_payer_name',
        'nationality',
        'bank',
        'bank_account',
        'bank_name',
        'nik',
        'family_certificate_number',
        'karpeg',
        'latitude',
        'longitude',
        'nuks'
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
                $q->where('name', 'like', '%' . request('search') . '%')->orWhere('email', 'like', '%' . request('search') . '%');
            })->orWhere('nik', 'like', '%' . request('search') . '%')->orWhere('nip', 'like', '%' . request('search') . '%')->orWhere('nuptk', 'like', '%' . request('search') . '%');
        });
    }

    public function getProgressAttribute()
    {
        return count(array_filter($this->attributes));
    }

    public function auth() {
        return $this->morphOne(User::class, 'authenticatable');
    }
}
