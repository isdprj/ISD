<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'));
        $grid->column('full_name', __('Full name'));
        $grid->column('email', __('Email'));
        $grid->column('password', __('Password'));
        $grid->column('phone_number', __('Phone number'));
        $grid->column('address', __('Address'));
        $grid->column('remember_token', __('Remember token'));
        $grid->column('is_admin', __('Is admin'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('token', __('Token'));
        $grid->column('is_Verified', __('Is Verified'));
        $grid->column('email_verified_at', __('Email verified at'));

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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('full_name', __('Full name'));
        $show->field('email', __('Email'));
        $show->field('password', __('Password'));
        $show->field('phone_number', __('Phone number'));
        $show->field('address', __('Address'));
        $show->field('remember_token', __('Remember token'));
        $show->field('is_admin', __('Is admin'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('token', __('Token'));
        $show->field('is_Verified', __('Is Verified'));
        $show->field('email_verified_at', __('Email verified at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User());

        $form->text('full_name', __('Full name'));
        $form->email('email', __('Email'));
        $form->password('password', __('Password'));
        $form->text('phone_number', __('Phone number'));
        $form->text('address', __('Address'));
        $form->text('remember_token', __('Remember token'));
        $form->switch('is_admin', __('Is admin'));
        $form->text('token', __('Token'));
        $form->switch('is_Verified', __('Is Verified'));
        $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
