<?php

use App\Entity\Region;
use DaveJamesMiller\Breadcrumbs\BreadcrumbsGenerator;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::register('home', function (BreadcrumbsGenerator $crambs) {
    $crambs->push('Home', route('home'));
});

Breadcrumbs::register('massages.create', function (BreadcrumbsGenerator $crambs) {
    $crambs->push('Проекти', route('massages.create'));
});

Breadcrumbs::register('comerc', function (BreadcrumbsGenerator $crambs) {
    $crambs->push('Комерційна', route('comerc'));
});
Breadcrumbs::register('comerc.stepTwo', function (BreadcrumbsGenerator $crambs, \App\Entity\Floor\Floor $floor, int $id) {
    $crambs->push('Комерційна', route('comerc.stepTwo', $id));
});
Breadcrumbs::register('comerc.stepThree', function (BreadcrumbsGenerator $crambs, App\Entity\Floor\Floor $floor, $id) {
    $crambs->push('Комерційна', route('comerc.stepThree', $floor));
});
Breadcrumbs::register('comerc.finish', function (BreadcrumbsGenerator $crambs) {
    $crambs->push('Комерційна', route('comerc.finish'));
});
Breadcrumbs::register('comerc.show', function (BreadcrumbsGenerator $crambs, \App\Entity\Comercial $comercel) {
    $crambs->push('Комерційна', route('comerc.show'));
});

Breadcrumbs::register('admin.panel.login', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('home');
    $crambs->push('Login', route('admin.panel.login'));
});

Breadcrumbs::register('admin.panel.showLoginForm', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('home');
    $crambs->push('Login', route('admin.panel.showLoginForm'));
});

Breadcrumbs::register('password.request', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('login');
    $crambs->push('Reset password', route('password.request'));
});

Breadcrumbs::register('register', function (BreadcrumbsGenerator $crambs) {
    $crambs->push('Register', route('register'));
});

Breadcrumbs::register('cabinet', function (BreadcrumbsGenerator $crambs) {
    $crambs->push('Cabinet', route('cabinet'));
});

Breadcrumbs::register('admin.panel.home', function (BreadcrumbsGenerator $crambs) {
    $crambs->push('Admin', route('admin.panel.home'));
});

////////////////////////////////////////////////////////////////////////////////////

Breadcrumbs::register('admin.users.index', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('admin.panel.home');
    $crambs->push('Users', route('admin.users.index'));
});

Breadcrumbs::register('admin.users.create', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('admin.users.index');
    $crambs->push('Create', route('admin.users.create'));
});

Breadcrumbs::register('admin.users.show', function (BreadcrumbsGenerator $crambs, \App\User $user) {
    $crambs->parent('admin.users.index');
    $crambs->push('Show', route('admin.users.show', $user));
});

Breadcrumbs::register('admin.users.edit', function (BreadcrumbsGenerator $crambs, \App\User $user) {
    $crambs->parent('admin.users.show', $user);
    $crambs->push('Edit', route('admin.users.edit', $user));
});

//////////////////////////////////////////////////////////////////////////////////////

Breadcrumbs::register('admin.region.index', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('admin.panel.home');
    $crambs->push('Region', route('admin.region.index'));
});

Breadcrumbs::register('admin.region.create', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('admin.region.index');
    $crambs->push('Create', route('admin.region.create'));
});

Breadcrumbs::register('admin.region.parent.create', function (BreadcrumbsGenerator $crambs, $id ) {
    $crambs->parent('admin.region.index');
    $crambs->push('Create Parent', route('admin.region.create', $id));
});

Breadcrumbs::register('admin.region.show', function (BreadcrumbsGenerator $crumbs, Region $region) {
    if ($parent = $region->parent){
        $crumbs->parent('admin.region.show', $parent);
    }else{
        $crumbs->parent('admin.region.index');
    }
    $crumbs->push($region->name, route('admin.region.show', $region));
});

Breadcrumbs::register('admin.region.edit', function (BreadcrumbsGenerator $crambs, Region $region) {
    $crambs->parent('admin.region.show', $region);
    $crambs->push('Edit', route('admin.region.edit', $region));
});

/////////////////////////////////////////////////////////////////////////////////////////

Breadcrumbs::register('admin.floor.categories.index', function (BreadcrumbsGenerator $crumbs) {
    $crumbs->parent('admin.panel.home');
    $crumbs->push('Категорії', route('admin.floor.categories.index'));
});

Breadcrumbs::register('admin.floor.categories.create', function (BreadcrumbsGenerator $crumbs) {
    $crumbs->parent('admin.floor.categories.index');
    $crumbs->push('Створити категорію', route('admin.floor.categories.create'));
});

Breadcrumbs::register('admin.floor.categories.show', function (BreadcrumbsGenerator $crumbs, \App\Entity\Floor\Category $category) {
    if ($parent = $category->parent){
        $crumbs->parent('admin.floor.categories.show', $parent);
    }else{
        $crumbs->parent('admin.floor.categories.index');
    }
    $crumbs->push($category->name, route('admin.floor.categories.show', $category));
});

Breadcrumbs::register('admin.floor.categories.edit', function (BreadcrumbsGenerator $crumbs, \App\Entity\Floor\Category $category) {
    $crumbs->parent('admin.floor.categories.index');
    $crumbs->push('Змінити категорію', route('admin.floor.categories.edit', $category));
});

///////////////////////////////////////////////////////////////////////

Breadcrumbs::register('page', function (BreadcrumbsGenerator $crumbs, $slag) {
    $crumbs->parent('home');
    $crumbs->push($slag, route('page', $slag));
});
Breadcrumbs::register('pageInTown', function (BreadcrumbsGenerator $crumbs, \App\Entity\Project $slag, \App\Entity\Region $region) {
    $crumbs->parent('home');
    $crumbs->push($slag, route('pageInTown',  $slag, $region));
});

//////////////////////////////////////////////////////////////////////////////////////

Breadcrumbs::register('admin.client.index', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('admin.panel.home');
    $crambs->push('Region', route('admin.client.index'));
});

Breadcrumbs::register('admin.client.create', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('admin.panel.home');
    $crambs->push('Region', route('admin.client.create'));
});

Breadcrumbs::register('admin.client.show', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('admin.panel.home');
    $crambs->push('Region', route('admin.client.show'));
});


/////////////////////////////////////////////////////////

Breadcrumbs::register('admin.comercial.index', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('admin.panel.home');
    $crambs->push('Region', route('admin.comercial.index'));
});

Breadcrumbs::register('admin.comercial.create', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('admin.panel.home');
    $crambs->push('Region', route('admin.comercial.create'));
});

Breadcrumbs::register('admin.comercial.show', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('admin.panel.home');
    $crambs->push('Region', route('admin.comercial.show'));
});


/////////////////////////////////////////////////////////

Breadcrumbs::register('portfolio', function (BreadcrumbsGenerator $crumbs, \App\Entity\Floor\Portfolio $portfolio) {
    $crumbs->parent('home');
    $crumbs->push($portfolio->slug, route('portfolio', $portfolio));
});

Breadcrumbs::register('company', function (BreadcrumbsGenerator $crumbs, App\Entity\Client\Company\Company $company) {
    $crumbs->parent('home');
    $crumbs->push($company->slug, route('company', $company));
});

////////////////////

Breadcrumbs::register('admin.company.index', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('admin.panel.home');
    $crambs->push('Компанії', route('admin.company.index'));
});

Breadcrumbs::register('admin.company.create', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('admin.panel.home');
    $crambs->push('Компанії', route('admin.company.create'));
});

Breadcrumbs::register('admin.company.show', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('admin.panel.home');
    $crambs->push('Компанії', route('admin.company.show'));
});

////////////
Breadcrumbs::register('admin.portfolio.index', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('admin.panel.home');
    $crambs->push('Проекти', route('admin.portfolio.index'));
});
Breadcrumbs::register('admin.portfolio.show', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('admin.panel.home');
    $crambs->push('Проекти', route('admin.portfolio.show'));
});
Breadcrumbs::register('admin.portfolio.create', function (BreadcrumbsGenerator $crambs) {
    $crambs->parent('admin.panel.home');
    $crambs->push('Проекти', route('admin.portfolio.create'));
});
