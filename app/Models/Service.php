<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $id
 * @property string $name
 * @property integer $cost
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Service extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'cost'
    ];

    public function employee(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class);
    }
}
