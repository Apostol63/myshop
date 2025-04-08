<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $secondName
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Employee extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'secondName',
        'status',
    ];

    public function service(): BelongsToMany
    {
        return $this->belongsToMany(Service::class);
    }
}
