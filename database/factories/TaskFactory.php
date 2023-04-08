<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Project;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $project = Project::first();
        if (!$project) {
            $project = Project::factory()->create();
        }

        return [
            'project_id' => $this->faker->word,
            'name' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'description' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
