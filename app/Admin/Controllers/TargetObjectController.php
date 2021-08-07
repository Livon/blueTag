<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\TargetObject;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class TargetObjectController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new TargetObject(), function (Grid $grid) {
            $grid->number();
            $grid->column('id')->sortable();
            $grid->column('obj_key');
            $grid->column('title');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->equal('title');

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new TargetObject(), function (Show $show) {
            $show->field('id');
            $show->field('obj_key');
            $show->field('title');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new TargetObject(), function (Form $form) {
            $form->display('id');
            $form->text('obj_key');
            $form->text('title');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
