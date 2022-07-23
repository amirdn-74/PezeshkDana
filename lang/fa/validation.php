<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => ':attribute باید فقط شامل حرف باشد',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'array' => 'The :attribute must have between :min and :max items.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'numeric' => 'The :attribute must be between :min and :max.',
        'string' => 'The :attribute must be between :min and :max characters.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => ':attribute های وارد شده منطبق نیستند',
    'current_password' => 'رمز عبور اشتباه است',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => ':attribute باید یک ایمیل معتبر باشد',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'enum' => 'مقدار :attribute اشتباه است',
    'exists' => 'The selected :attribute is invalid.',
    'file' => ':attribute باید یک فایل باشد',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'array' => 'The :attribute must have more than :value items.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'numeric' => 'The :attribute must be greater than :value.',
        'string' => 'The :attribute must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The :attribute must have :value items or more.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
    ],
    'image' => ':attribute باید یک عکس باشد',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'array' => 'The :attribute must have less than :value items.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
        'string' => 'The :attribute must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute must not have more than :value items.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'array' => ':attribute باید حداکثر شامل :max آیتم باشد',
        'file' => ':attribute نباید بیشتر از :max کیلوبایت باشد',
        'numeric' => ':attribute نباشد بزرگ تر از :max باشد',
        'string' => ':attribute باید کمتر از :max حرف داشته باشد',
    ],
    'mimes' => ':attribute باید یک فایل از نوع :values باشد',
    'mimetypes' => ':attribute باید یک فایل از نوع :values باشد',
    'min' => [
        'array' => ':attribute باید حداقل شامل :min آیتم باشد',
        'file' => ':attribute باید حداقل :min کیلوبایت باشد',
        'numeric' => ':attribute باید حداقل :min باشد',
        'string' => ':attribute باید حداقل شامل :min حرف باشد',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => ':attribute باید یک عدد باشد',
    'password' => 'رمز عبور وارد شده اشتباه است',
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'لطفا :attribute را وارد کنید',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => ':attribute و :other باید یکی باشند',
    'size' => [
        'array' => ':attribute باید شامل :size آیتم باشد',
        'file' => ':attribute باید :size کیلوبایت حجم داشته باشد',
        'numeric' => ':attribute باید :size باشد',
        'string' => ':attribute باید :size حرف داشته باشد',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'این :attribute قبلا استفاده شده است',
    'uploaded' => ':attribute آپلود نشد',
    'url' => ':attribute باید یک آدرس وب معتبر باشد',
    'uuid' => ':attribute باید یک UUID معتبر باشد',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name' => 'نام',
        'email' => 'ایمیل',
        'password' => 'رمز عبور',
        'password_confirmation' => 'تکرار رمز عبور',
        'promote_type' => 'نوع ارتقا',
        'message' => 'پیام',
        'title' => 'عنوان',
        'article_file' => 'فایل مقاله',
        'writer' => 'نویسنده',
        'scientificLevel' => 'سطح علمی',
        'speciality' => 'تخصص',
        'illness' => 'بیماری و شرایط',
        'user' => 'کاربر',
        'status' => 'وضعیت',
        'file' => 'فایل انتخابی',
        'body' => 'متن اصلی',
        'source' => 'منبع',
        'publishDate' => 'تاریخ انتشار',
        'version' => 'ورژن مقاله',
        'articleNumber' => 'شماره مقاله',
        'images' => 'تصاویر',
        'attributes' => 'ویژگی ها',
        'illnesses' => 'بیماری ها',
        'specialities' => 'تخصص ها'
    ],

];
