<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UniqueUpdateChampionName implements InvokableRule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    private $id;
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function __invoke($attribute, $value, $fail)
    {
        $count =  DB::table("champions")->where("name", $value)
            ->where("id", "<>", $this->id)->count();

        if($count) {
            $fail("Champion name is already taken");
        }
    }
}
