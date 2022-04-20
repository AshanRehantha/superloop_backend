<?php

namespace App\Repository;

class BaseEloquentRepository{
    protected $model;

    /**
	 * Find all models
	 * @return mixed
	 */
	public function findAll() {
		return $this->model->all();
	}
}

?>
