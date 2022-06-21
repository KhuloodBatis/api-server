<?php

namespace Database\Factories;

use App\Models\Commit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commit>
 */
class CommitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Commit::class;
    
    public function definition()
    {
        return [
            'body'=>[],
            'user_id'=> 1,
            'post_id'=>1,
        ];
    }
}
