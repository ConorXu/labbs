<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $categories = [
            [
                'name'        => '诗歌',
                'description' => '诗歌是一种抒情言志的文学体裁。是用高度凝练的语言，生动形象地表达作者丰富情感，集中反映社会生活并具有一定节奏和韵律的文学体裁。',
            ],
            [
                'name'        => '散文',
                'description' => '散文是一种抒发作者真情实感、写作方式灵活的记叙类文学体裁。',
            ],
            [
                'name'        => '小说',
                'description' => '小说是以刻画人物形象为中心，通过完整的故事情节和环境描写来反映社会生活的文学体裁。',
            ],
            [
                'name'        => '戏剧',
                'description' => '戏剧文学包括歌剧剧本、戏曲剧本在内，根据戏剧冲突的性质分为悲剧、喜剧和正剧，根据艺术形式的不同分为话剧、诗剧、歌剧。',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('categories')->truncate();
    }
}
