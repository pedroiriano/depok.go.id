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

// Home > Agenda > Tambah Agenda
Breadcrumbs::for(
    'agenda.create',
    fn (Generator $trail) => $trail->parent('agenda')->push('Tambah Agenda', route('agenda.create'))
);

// Home > Agenda > [Agenda]
Breadcrumbs::for(
    'agenda.edit',
    fn (Generator $trail, $agenda) => $trail->parent('agenda')->push($agenda->nama, route('agenda.edit', $agenda->id))
);

// Home > Pengumuman
Breadcrumbs::for(
    'pengumuman',
    fn (Generator $trail) => $trail->parent('home')->push('Pengumuman', route('slider.index'))
);

// Home > Pengumuman > Tambah Pengumuman
Breadcrumbs::for(
    'pengumuman.create',
    fn (Generator $trail) => $trail->parent('pengumuman')->push('Tambah Pengumuman', route('slider.create'))
);

// Home > Pengumuman > [Pengumuman]
Breadcrumbs::for(
    'pengumuman.edit',
    fn (Generator $trail, $slider) => $trail->parent('pengumuman')->push($slider->nama, route('slider.edit', $slider->id))
);

// Home > Infografis
Breadcrumbs::for(
    'infografis',
    fn (Generator $trail) => $trail->parent('home')->push('Infografis', route('infografis.index'))
);

// Home > Infografis > Tambah Infografis
Breadcrumbs::for(
    'infografis.create',
    fn (Generator $trail) => $trail->parent('infografis')->push('Tambah infografis', route('infografis.create'))
);

// Home > Infografis > [Infografis]
Breadcrumbs::for(
    'infografis.edit',
    fn (Generator $trail, $infografis) => $trail->parent('infografis')->push($slider->nama, route('infografis.edit', $infografis->id))
);

// Home > Layanan DSW
Breadcrumbs::for(
    'layanan-dsw',
    fn (Generator $trail) => $trail->parent('home')->push('Layanan DSW', route('service.index'))
);

// Home > Layanan DSW > Tambah Layanan DSW
Breadcrumbs::for(
    'layanan-dsw.create',
    fn (Generator $trail) => $trail->parent('layanan-dsw')->push('Tambah Layanan DSW', route('service.create'))
);

// Home > Layanan DSW > [Layanan DSW]
Breadcrumbs::for(
    'layanan-dsw.edit',
    fn (Generator $trail, $service) => $trail->parent('layanan-dsw')->push($service->namaservice, route('service.edit', $service->id))
);

// Home > Kategori DSW
Breadcrumbs::for(
    'kategori-dsw',
    fn (Generator $trail) => $trail->parent('home')->push('Kategori DSW', route('kategori-dsw.index'))
);

// Home > Kategori DSW > Tambah Kategori
Breadcrumbs::for(
    'kategori-dsw.create',
    fn (Generator $trail) => $trail->parent('kategori-dsw')->push('Tambah Kategori', route('kategori-dsw.create'))
);

// Home > Kategori DSW > [Kategori]
Breadcrumbs::for(
    'kategori-dsw.update',
    fn (Generator $trail, $category) => $trail->parent('kategori-dsw')->push($category->nama, route('kategori-dsw.edit', $category->id))
);

// Home > Pengguna
Breadcrumbs::for(
    'pengguna',
    fn (Generator $trail) => $trail->parent('home')->push('Pengguna', route('user.index'))
);

// Home > Pengguna > Tambah Pengguna
Breadcrumbs::for(
    'pengguna.create',
    fn (Generator $trail) => $trail->parent('pengguna')->push('Tambah Pengguna', route('user.create'))
);

// Home > Pengguna > Tambah Pengguna
Breadcrumbs::for(
    'admin.create',
    fn (Generator $trail) => $trail->parent('pengguna')->push('Tambah Administrator', route('user.create'))
);

// Home > Pengguna > [Pengguna]
Breadcrumbs::for(
    'pengguna.edit',
    fn (Generator $trail, $user) => $trail->parent('pengguna')->push($user->name, route('user.edit', $user->id))
);

// Home > Konten
Breadcrumbs::for(
    'content',
    fn (Generator $trail, $content) => $trail->parent('home')->push($content->nama, route('admin.content', $content->id))
);