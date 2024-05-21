<?php
namespace App\Traits;


use App\Models\Admin\Hencategory;
use App\Models\Admin\User;
use Illuminate\Support\Facades\Validator;


trait CustomValidationTrait{

    public function customValidation()
    {
        $this->foreignIdValidation('user_id_validation',User::class);
        $this->foreignIdValidation('hencategory_id_validation', hencategory::class);

    }

    /*
        * validate the foreign key
     * accept request validation key and related model
    */
    protected function foreignIdValidation($key, $model) : void
    {
       Validator::extend($key,function ($attribute, $value, $parameter, $validator) use ($model){
            if($model::find($value))
                return true;
            return false;
        });
    }

    /*
        *  Show the messages
    */
    public function messages()
    {
        return [
            'user_id.user_id_validation'                                     => 'Select valid user',
            'hencategory_id.hencategory_id_validation'                       => 'Select valid Title',
            

        ];
    }
}
