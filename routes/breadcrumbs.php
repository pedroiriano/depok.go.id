<?php

use Rawilk\Breadcrumbs\Facades\Breadcrumbs;
use Rawilk\Breadcrumbs\Support\Generator;

// Home
Breadcrumbs::for('home', fn (Generator $trail) => $trail->push('Home', route('home')));

// Home > Agenda
Breadcrumbs::for(
    'agenda',
    fn (Generator $trail) => $trail->parent('home')->push('Agenda', route('agenda.index'))
);

// Home > Pengumuman
Breadcrumbs::for(
    'pengumuman',
    fn (Generator $trail) => $trail->parent('home')->push('Pengumuman', route('slider.index'))
);

// Home > Infografis
Breadcrumbs::for(
    'infografis',
    fn (Generator $trail) => $trail->parent('home')->push('Infografis', route('infografis.index'))
);

// Home > Layanan DSW
Breadcrumbs::for(
    'layanan dsw',
    fn (Generator $trail) => $trail->parent('home')->push('Layanan DSW', route('service.index'))
);

// Home > Layanan DSW
Breadcrumbs::for(
    'kategori dsw',
    fn (Generator $trail) => $trail->parent('home')->push('Kategori DSW', route('kategori-dsw.index'))
);

// Home > Pengguna
Breadcrumbs::for(
    'pengguna',
    fn (Generator $trail) => $trail->parent('home')->push('Pengguna', route('user.index'))
);

// Home > About
Breadcrumbs::for(
    'about',
    fn (Generator $trail) => $trail->parent('home')->push('About', route('About'))
);

// Home > Blog
Breadcrumbs::for(
    'blog',
    fn (Generator $trail) => $trail->parent('home')->push('Blog', route('blog'))
);

// Home > Blog > [Category]
Breadcrumbs::for(
    'category',
    fn (Generator $trail, $category) => $trail->parent('blog')->push($category->title, route('category', $category->id))
);

// Home > Blog > [Category] > [Post]
Breadcrumbs::for(
    'post',
    fn (Generator $trail, $post) => $trail->parent('category', $post->category)->push($post->title, route('post', $post->id))
);
