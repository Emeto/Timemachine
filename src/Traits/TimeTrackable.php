<?php
namespace Emeto\Timemachine\Traits;

use Emeto\Timemachine\Models\State;
use Illuminate\Support\Facades\DB;

trait TimeTrackable
{
    /**
     * Creates and remove waypoints in the space-time continuum
     *
     * @return void
     *
     */
    public static function bootTimeTrackable()
    {
        /**
         * Save the model state upon model creation
         */
        static::creating(function ($model) {
            $state = new State();
            $state->model = get_class($model);
            $state->model_id = DB::table($model->getTable())->orderBy('id', 'desc')->first()->id + 1;
            $state->state_content = $model;
            $state->save();
        });

        /**
         * Save the model state upon model update
         */
        static::updating(function ($model) {
            $state = new State();
            $state->model = get_class($model);
            $state->model_id = DB::table($model->getTable())->orderBy('id', 'desc')->first()->id + 1;
            $state->state_content = $model;
            $state->save();
        });

        /**
         * Delete all model related saved states
         */
        static::deleting(function ($model) {
            State::where('model', get_class($model))->where('model_id', $model->id)->delete();
        });
    }
}