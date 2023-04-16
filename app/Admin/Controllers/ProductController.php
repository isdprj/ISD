<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('id_category', __('Id category'));
        $grid->column('description', __('Description'));
        $grid->column('stats', __('Stats'));
        $grid->column('unit_price', __('Unit price'));
        $grid->column('promotion_price', __('Promotion price'));
        $grid->column('image', __('Image'));
        $grid->column('unit', __('Unit'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('id_category', __('Id category'));
        $show->field('description', __('Description'));
        $show->field('stats', __('Stats'));
        $show->field('unit_price', __('Unit price'));
        $show->field('promotion_price', __('Promotion price'));
        $show->field('image', __('Image'));
        $show->field('unit', __('Unit'));
        $show->field('quantity', __('Quantity'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());

        $form->text('name', __('Name'));
        $form->number('id_category', __('Id category'));
        $form->textarea('description', __('Description'));
        $form->textarea('stats', __('Stats'));
        $form->decimal('unit_price', __('Unit price'));
        $form->decimal('promotion_price', __('Promotion price'));
        $form->image('image', __('Image'));
        $form->text('unit', __('Unit'));
        $form->number('quantity', __('Quantity'));
 
        return $form;
    }
}
