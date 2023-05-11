<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use Doctrine\DBAL\Query;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Database\QueryException;

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
        $id_category = [
            1 => '1 - Adidas',
            2 => '2 - Nike',
            3 => '3 - Mizuno',
            4 => '4 - Kamito',
            5 => '5 - Puma',
            6 => '6 - Găng tay',
            7 => '7 - Túi',
            8 => '8 - Quần áo',
            9 => '9 - Băng keo',
            10 => '10 - Tất'
        ];
        $form->select('id_category', __('Id category'))->options($id_category);
        $form->textarea('description', __('Description'));
        $form->textarea('stats', __('Stats'));
        $form->decimal('unit_price', __('Unit price'));
        $form->decimal('promotion_price', __('Promotion price'));
        $form->text('image', __('Image'));
        $form->text('unit', __('Unit'));
        $form->number('quantity', __('Quantity'));
        $form->saving(function (Form $form){
            try{

                $product = new Product();
                $product->name = $form->name;
                $product->id_category = $form->id_category;
                $product->description = $form->description;
                $product->stats = $form->stat;
                $product->unit_price = $form->unit_price;
                $product->promotion_price = $form->promotion_price;
                $product->image = $form->image;
                $product->unit = $form->unit;
                $product->quantity = $form->quantity;
                $product->save();
            } catch(QueryException $e){
                $errorMessage = $e->getMessage();
                return redirect()->back()->withErrors($errorMessage)->withInput();
            }
        });
        $form->saved(function(){
            return redirect()->back()->with('success', 'Product added successfully');
        });
        return $form;
    }
}
