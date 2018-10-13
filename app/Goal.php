<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Goal
 *
 * @mixin \Eloquent
 * @property int $course_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property string $goal
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goal whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goal whereGoal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goal whereUpdatedAt($value)
 */
class Goal extends Model
{
    //
}
