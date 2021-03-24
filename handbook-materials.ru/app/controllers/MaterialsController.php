<?php

class MaterialsController extends BaseController {
    public function getIndex() {
	$cats = Category::orderBy('name', 'asc')->get();

	return View::make('index/cats', array(
	    'nav_name' => 'materials',
	    'cats' => $cats,
	));
    }

    public function getSection($id) {
	$cats = Category::orderBy('name', 'asc')->get();
	$cur_cat = Category::find($id);

	//получаем значение фильтра свойств, если они есть
	$filter_props = Input::get('filter_props');
	if (count($filter_props)) {
	    $search_props = Property::whereIn('value', $filter_props)->get();
	    $tmp = array();
	    foreach ($search_props as $item) {
		$tmp[] = $item->material_id;
	    }
	    $materials = Material::where('cat_id', '=', $id)->whereIn('id', $tmp)->orderBy('name', 'asc')->paginate(30);
	}
	else {
	    $materials = Material::where('cat_id', '=', $id)->orderBy('name', 'asc')->paginate(30);
	}

	foreach ($materials as $item) {
	    Image::make($_SERVER['DOCUMENT_ROOT'] . '/upload/' . $item->image)->grab(198, 115)->save($_SERVER['DOCUMENT_ROOT'] . '/upload/thumb_' . $item->image);
	}

	$props = DB::table('properties')->groupBy('value')->get();

	return View::make('index/section', array(
	    'nav_name' => 'materials',
	    'cats' => $cats,
	    'materials' => $materials,
	    'cur_cat' => $cur_cat,
	    'props' => $props,
	    'filter_props' => $filter_props
	));
    }
}