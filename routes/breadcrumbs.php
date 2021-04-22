<?php

// Home

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// Home
Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
});


// author Index

Breadcrumbs::for('admin.author.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Penulis', route('admin.author.index'));
});


// author Tambah
Breadcrumbs::for('admin.author.create', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Penulis', route('admin.author.index'));
    $trail->push('Tambah Penulis', route('admin.author.create'));
});



// author Edit
Breadcrumbs::for('admin.author.edit', function ($trail, $author) {
    $trail->parent('admin.dashboard');
    $trail->push('Penulis', route('admin.author.index'));
    $trail->push('Edit Penulis', route('admin.author.edit', $author));
});

// Breadcrumbs::for('admin.author.edit', function ($trail, $author) {
//     $trail->parent('admin.dashboard');
//     $trail->push('Edit Penulis', route('admin.author.edit', $author));
// });
