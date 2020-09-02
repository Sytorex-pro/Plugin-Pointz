<?php

class PointzConfig extends PointzAppModel
{
    public $useTable = "configurations";
    public function edit($id, $name_shop, $name_gui)
    {
		$name_shop = $this->getDataSource()->value($name_shop, 'string');
		$name_gui = $this->getDataSource()->value($name_gui, 'string');
		
		return $this->updateAll([
			'name_shop' => $name_shop,
            'name_gui' => $name_gui
		], ['id' => $id]);
	}

    public function edit_keys($id, $public_key, $private_key)
    {
        $public_key = $this->getDataSource()->value($public_key, 'string');
        $private_key = $this->getDataSource()->value($private_key, 'string');

        return $this->updateAll([
            'public_key' => $public_key,
            'private_key' => $private_key
        ], ['id' => $id]);
    }
    
    public function add($name_shop = "", $name_gui = "")
    {
        $this->create();
        $this->set(array(
            'name_shop' => $name_shop,
            'name_gui' => $name_gui
        ));
        $this->save();
	}
}