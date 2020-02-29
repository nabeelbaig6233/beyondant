<?php
if (!function_exists('setAciveCategory')) {
    function setAciveCategory($slug) {
        return request()->category == $slug ? 'active' : '';
    }
}

if (!function_exists('single_image')) {
    function single_image($image,$folder) {
        $image_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('assets/uploads/'.$folder),$image_name);
        return 'assets/uploads/'.$folder.'/'.$image_name;
    }
}

if (!function_exists('getSinglieField')) {
    function getSinglieField($table,$where,$field) {
        return \DB::table($table)->where($where)->first()->$field;
    }
}

if (!function_exists('getList')) {
    function getList($table,$where = null) {
        $query = \DB::table($table);
        if ($where) {
            $query = $query->where($where)->get()->all();
        } else {
            $query = $query->get()->all();
        }
        return $query;
    }
}
?>
