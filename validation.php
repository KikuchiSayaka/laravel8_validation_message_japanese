<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines(バリデーションメッセージは以下の部分が使われます)
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attributeを承認してください。',
    'accepted_if' => ':otherが:valueの時に:attributeを承認してください。',
    'active_url' => ':attributeには有効なURLを指定してください。',
    'after' => ':attributeには:date以降の日付を指定してください。',
    'after_or_equal' => ':attributeには、:date以降の日付を指定してください。',
    'alpha' => ':attributeには、アルファベッドのみ使用できます。',
    'alpha_dash' => ":attributeには、英数字('A-Z','a-z','0-9')とハイフン('-')と下線('_')のみ使用できます。",
    'alpha_num' => ":attributeには、英数字('A-Z','a-z','0-9')のみ使用できます。",
    'array' => ':attributeには、配列を指定してください。',
    'before' => ':attributeには、:dateより前の日付を指定してください。',
    'before_or_equal' => ':attributeには、:date以前の日付を指定してください。',
    'between' => [
        'numeric' => ':attributeには、:minから、:maxまでの数字を入力してください。',
        'file' => ':attributeには、:min KBから:max KBまでのサイズのファイルを指定してください。',
        'string' => ':attributeは、:min文字から:max文字にしてください。',
        'array' => ':attributeの項目は、:min個から:max個にしてください。',
    ],
    'boolean' => ":attributeには、'true'か'false'を指定してください。",
    'confirmed' => ':attributeと:attribute確認が一致しません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attributeは、正しい日付ではありません。',
    'date_equals' => ':attributeは:dateに等しい日付でなければなりません。',
    'date_format' => ":attributeの形式は、':format'と合いません。",
    'declined' => ':attributeは辞退する必要があります。',
    'declined_if' => ':otherが:valueの時に:attributeは辞退する必要があります。',
    'different' => ':attributeと:otherには、異なるものを指定してください。',
    'digits' => ':attributeは、:digits桁にしてください。',
    'digits_between' => ':attributeは、:min桁から:max桁にしてください。',
    'dimensions' => ':attributeの画像サイズが無効です',
    'distinct'  => ':attributeの値が重複しています。',
    'email' => ':attributeには正しい形式のメールアドレスを入力してください。',
    'ends_with' => ':attributeは、:valuesのいずれか1つを末尾に付ける必要があります。',
    'enum' => '選択された:attributeは、有効ではありません。',
    'exists' => '選択された:attributeは、有効ではありません。',
    'file' => ':attributeはファイルでなければいけません。',
    'filled' => ':attributeは必須です。',
    'gt' => [
        'numeric' => ':attributeは、:valueより大きくなければなりません。',
        'file' => ':attributeは、:value KBより大きくなければなりません。',
        'string' => ':attributeは、:value文字より大きくなければなりません。',
        'array' => ':attributeの項目数は、:value個より大きくなければなりません。',
    ],
    'gte' => [
        'numeric' => ':attributeは、:value以上でなければなりません。',
        'file' => ':attributeは、:value KB以上でなければなりません。',
        'string' => ':attributeは、:value文字以上でなければなりません。',
        'array' => ':attributeの項目数は、:value個以上でなければなりません。',
    ],
    'image' => ':attributeには、画像を指定してください。',
    'in' => '選択された:attributeは、有効ではありません。',
    'in_array' => ':attributeが:otherに存在しません。',
    'integer' => ':attributeには、整数を入力してください。',
    'ip' => ':attributeには、有効なIPアドレスを指定してください。',
    'ipv4' => ':attributeはIPv4アドレスを指定してください。',
    'ipv6' => ':attributeはIPv6アドレスを指定してください。',
    'json' => ':attributeには、有効なJSON文字列を指定してください。',
    'lt' => [
        'numeric' => ':attributeは、:valueより小さくなければなりません。',
        'file' => ':attributeは、:value KBより小さくなければなりません。',
        'string' => ':attributeは、:value文字より小さくなければなりません。',
        'array' => ':attributeの項目数は、:value個より小さくなければなりません。',
    ],
    'lte' => [
        'numeric' => ':attributeは、:value以下でなければなりません。',
        'file' => ':attributeは、:value KB以下でなければなりません。',
        'string' => ':attributeは、:value文字以下でなければなりません。',
        'array' => ':attributeの項目数は、:value個以下でなければなりません。',
    ],
    'mac_address' => ':attributeは、有効なMACアドレスである必要があります。',
    'max' => [
        'numeric' => ':attributeには、:max以下の数字を入力してください。',
        'file'    => ':attributeには、:max KB以下のファイルを指定してください。',
        'string'  => ':attributeは、:max文字以下にしてください。',
        'array'   => ':attributeの項目は、:max個以下にしてください。',
    ],
    'mimes' => ':attributeには、:valuesタイプのファイルを指定してください。',
    'mimetypes' => ':attributeには、:valuesタイプのファイルを指定してください。',
    'min' => [
        'numeric' => ':attributeには、:min以上の数字を入力してください。',
        'file' => ':attributeには、:min KB以上のファイルを指定してください。',
        'string' => ':attributeは、:min文字以上にしてください。',
        'array' => ':attributeの項目は、:min個以上にしてください。',
    ],
    'multiple_of' => ':attributeは:valueの倍数である必要があります。',
    'not_in' => '選択された:attributeは、有効ではありません。',
    'not_regex' => ':attributeの形式が無効です。',
    'numeric' => ':attributeには、数字を入力してください。',
    'password' => ':attributeが間違っています',
    'present' => ':attributeが存在している必要があります。',
    'prohibited' => ':attributeフィールドでは使用できません。',
    'prohibited_if' => ':otherが:valueの時に:attributeフィールドでは使用できません。',
    'prohibited_unless' => ':attributeフィールドは、:valuesに:otherが含まれないため、:attributeフィールドでは使用できません。',
    'prohibits' => ':attributeフィールドでは、 :otherは使用できません。',
    'regex' => ':attributeの形式が無効です。',
    'required' => ':attributeは必須項目です。',
    'required_array_keys' => ':attributeには:valuesを含めてください。',
    'required_if' => ':otherが:valueの場合、:attributeを指定してください。',
    'required_unless' => ':otherが:values以外の場合、:attributeを指定してください。',
    'required_with' => ':valuesが指定されている場合、:attributeも指定してください。',
    'required_with_all' => ':valuesが全て指定されている場合、:attributeも指定してください。',
    'required_without' => ':valuesが指定されていない場合、:attributeを指定してください。',
    'required_without_all' => ':valuesが全て指定されていない場合、:attributeを指定してください。',
    'same' => ':attributeと:otherが一致しません。',
    'size' => [
        'numeric' => ':attributeには、:sizeを指定してください。',
        'file' => ':attributeには、:size KBのファイルを指定してください。',
        'string' => ':attributeは、:size文字にしてください。',
        'array' => ':attributeの項目は、:size個にしてください。',
    ],
    'starts_with' => ':attributeは、次のいずれかで始まる必要があります。:values',
    'string' => ':attributeには、文字を入力してください。',
    'timezone' => ':attributeには、有効なタイムゾーンを入力してください。',
    'unique' => '入力された:attributeは既に使用されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'url' => ':attributeは、有効なURL形式で入力してください。',
    'uuid' => ':attributeは、有効なUUIDでなければなりません。',

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
    | Custom Validation Attributes(:attattributesの部分を翻訳したいとき)
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    | 
    | 6行目以降にあったValidation Language Linesで使われていた:attattributesを翻訳したいときにこちらを使用します。
    | 配列の中に、キーを翻訳前のもの、値を翻訳後の日本語を入れてください。
    | 以下は一例として置いてあります。適宜お作りのアプリケーション用に変更してお使いください。    
    */

    'attributes' => [
        'name' => '名前',
        'email' => 'Eメールアドレス',
        'password' => 'パスワード',
    ],

];
