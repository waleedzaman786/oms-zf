<?php

namespace Order\Controller;

use Foundation\Crud\AbstractCrudController as CrudController;

class ItemController extends CrudController
{
    /**
     * @return string
     */
    protected function getResourceTitle()
    {
        return 'Item';
    }
}
