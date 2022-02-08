<?php

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
// 将当前请求的路由名称转换为 CSS 类名称


function category_nav_active($category_id)
{
    /**
     * 如果 $condition 不为 False 即会返回字符串 `active`
     *
     * @param        $condition
     * @param string $activeClass
     * @param string $inactiveClass
     *
     * @return string
     */
    return active_class((if_route('categories.show') && if_route_param('category', $category_id)));
}

function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return Str::limit($excerpt, $length);
}