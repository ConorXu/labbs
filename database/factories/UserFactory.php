<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

// 头像假数据
$avatars = [
    config('app.url') . '/uploads/images/avatars/方正黄草简体.png',
    config('app.url') . '/uploads/images/avatars/方正狂草简繁.png',
    config('app.url') . '/uploads/images/avatars/经典繁体毛楷.png',
    config('app.url') . '/uploads/images/avatars/李佺标准草书.png',
    config('app.url') . '/uploads/images/avatars/李旭科毛笔行.png',
    config('app.url') . '/uploads/images/avatars/毛泽东毛笔字.png',
    config('app.url') . '/uploads/images/avatars/迷你简启简体.png',
    config('app.url') . '/uploads/images/avatars/向佳红毛笔字.png',
    config('app.url') . '/uploads/images/avatars/邢体草书简体.png',
    config('app.url') . '/uploads/images/avatars/钟齐流江草体.png',
    // 'https://cdn.learnku.com/uploads/images/201710/14/1/s5ehp11z6s.png',
    // 'https://cdn.learnku.com/uploads/images/201710/14/1/Lhd1SHqu86.png',
    // 'https://cdn.learnku.com/uploads/images/201710/14/1/LOnMrqbHJn.png',
    // 'https://cdn.learnku.com/uploads/images/201710/14/1/xAuDMxteQy.png',
    // 'https://cdn.learnku.com/uploads/images/201710/14/1/ZqM7iaP4CR.png',
    // 'https://cdn.learnku.com/uploads/images/201710/14/1/NDnzMutoxX.png',
];

//个人简介假数据
$introduction = [
    '我既没有柔美的身段，也没有亮丽的双眸，但我有进取的心，有似水的梦怀，有崇高的理想，我坚信腹有诗书气自华。',
    '路漫漫其修远兮，吾将上下而求索。',
    '我渴望朝向艺术之塔，文化之巅，事业之厦，庆功之缘，不负这繁花似锦的时代，留一行扎实稳健的足迹，把美和爱洒向人间…… ',
    '泪眼问花花不语，乱红飞过秋千去。',
    '弄潮儿向涛头立，手把红旗旗不湿。',
    '聚散苦匆匆，此恨无穷。今年花胜去年红。可惜明年花更好，知与谁同？',
    '凉生岸柳催残暑。耿斜河，疏星淡月，断云微度。万里江山知何处？回首对床夜语。雁不到，书成谁与？目尽青天怀今古，肯儿曹恩怨相尔汝！举大白，听金缕。 ',
    '第四桥边，拟共天随住。今何许。凭阑怀古。残柳参差舞。 ',
    '书山有路勤为径，学海无涯苦作舟',
    '学如逆水行舟，不进则退',
];


/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) use ($avatars, $introduction){

    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'remember_token' => Str::random(20),
        'avatar' => $faker->randomElement($avatars),
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'introduction' => $faker->randomElement($introduction),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
