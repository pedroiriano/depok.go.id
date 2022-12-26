<?php

namespace App\Http\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;

class Extended extends Basic
{
    public function configure()
    {
        parent::configure();
        
        $this
            /* ->addDirective(Directive::STYLE, 'https://unicons.iconscout.com')
            ->addDirective(Directive::STYLE, 'https://cdnjs.cloudflare.com')
            ->addDirective(Directive::STYLE, 'https://unpkg.com')
            ->addDirective(Directive::STYLE, 'https://fonts.googleapis.com')
            ->addDirective(Directive::SCRIPT, 'https://kit.fontawesome.com')
            ->addDirective(Directive::SCRIPT, 'https://cdnjs.cloudflare.com')
            ->addDirective(Directive::SCRIPT, 'https://cdn.jsdelivr.net')
            ->addDirective(Directive::SCRIPT, 'https://unpkg.com')
            ->addDirective(Directive::SCRIPT, 'https://www.googletagmanager.com')
            ->addDirective(Directive::CONNECT, 'https://ka-f.fontawesome.com')
            ->addDirective(Directive::CONNECT, 'https://cms.depok.go.id')
            ->addDirective(Directive::CONNECT, 'https://berita.depok.go.id')
            ->addDirective(Directive::DEFAULT, 'https://fonts.gstatic.com')
            ->addDirective(Directive::DEFAULT, 'https://unicons.iconscout.com')
            ->addDirective(Directive::IMG, 'https://cms.depok.go.id')
            ->addDirective(Directive::IMG, 'https://berita.depok.go.id') */
            ->addDirective(Directive::BASE, ['https://unicons.iconscout.com', 'https://cdnjs.cloudflare.com', 'https://unpkg.com', 'https://fonts.googleapis.com', 'https://kit.fontawesome.com', 'https://cdn.jsdelivr.net', 'https://fontawesome.com', 'https://www.googletagmanager.com', 'https://ka-f.fontawesome.com', 'https://cms.depok.go.id', 'https://berita.depok.go.id', 'https://fonts.gstatic.com'])
            ->addDirective(Directive::CONNECT, ['https://unicons.iconscout.com', 'https://cdnjs.cloudflare.com', 'https://unpkg.com', 'https://fonts.googleapis.com', 'https://kit.fontawesome.com', 'https://cdn.jsdelivr.net', 'https://fontawesome.com', 'https://www.googletagmanager.com', 'https://ka-f.fontawesome.com', 'https://cms.depok.go.id', 'https://berita.depok.go.id', 'https://fonts.gstatic.com'])
            ->addDirective(Directive::DEFAULT, ['https://unicons.iconscout.com', 'https://cdnjs.cloudflare.com', 'https://unpkg.com', 'https://fonts.googleapis.com', 'https://kit.fontawesome.com', 'https://cdn.jsdelivr.net', 'https://fontawesome.com', 'https://www.googletagmanager.com', 'https://ka-f.fontawesome.com', 'https://cms.depok.go.id', 'https://berita.depok.go.id', 'https://fonts.gstatic.com'])
            ->addDirective(Directive::FORM_ACTION, ['https://unicons.iconscout.com', 'https://cdnjs.cloudflare.com', 'https://unpkg.com', 'https://fonts.googleapis.com', 'https://kit.fontawesome.com', 'https://cdn.jsdelivr.net', 'https://fontawesome.com', 'https://www.googletagmanager.com', 'https://ka-f.fontawesome.com', 'https://cms.depok.go.id', 'https://berita.depok.go.id', 'https://fonts.gstatic.com'])
            ->addDirective(Directive::IMG, ['https://unicons.iconscout.com', 'https://cdnjs.cloudflare.com', 'https://unpkg.com', 'https://fonts.googleapis.com', 'https://kit.fontawesome.com', 'https://cdn.jsdelivr.net', 'https://fontawesome.com', 'https://www.googletagmanager.com', 'https://ka-f.fontawesome.com', 'https://cms.depok.go.id', 'https://berita.depok.go.id', 'https://fonts.gstatic.com'])
            ->addDirective(Directive::MEDIA, ['https://unicons.iconscout.com', 'https://cdnjs.cloudflare.com', 'https://unpkg.com', 'https://fonts.googleapis.com', 'https://kit.fontawesome.com', 'https://cdn.jsdelivr.net', 'https://fontawesome.com', 'https://www.googletagmanager.com', 'https://ka-f.fontawesome.com', 'https://cms.depok.go.id', 'https://berita.depok.go.id', 'https://fonts.gstatic.com'])
            ->addDirective(Directive::OBJECT, ['https://unicons.iconscout.com', 'https://cdnjs.cloudflare.com', 'https://unpkg.com', 'https://fonts.googleapis.com', 'https://kit.fontawesome.com', 'https://cdn.jsdelivr.net', 'https://fontawesome.com', 'https://www.googletagmanager.com', 'https://ka-f.fontawesome.com', 'https://cms.depok.go.id', 'https://berita.depok.go.id', 'https://fonts.gstatic.com'])
            ->addDirective(Directive::SCRIPT, ['https://unicons.iconscout.com', 'https://cdnjs.cloudflare.com', 'https://unpkg.com', 'https://fonts.googleapis.com', 'https://kit.fontawesome.com', 'https://cdn.jsdelivr.net', 'https://fontawesome.com', 'https://www.googletagmanager.com', 'https://ka-f.fontawesome.com', 'https://cms.depok.go.id', 'https://berita.depok.go.id', 'https://fonts.gstatic.com'])
            ->addDirective(Directive::STYLE, ['https://unicons.iconscout.com', 'https://cdnjs.cloudflare.com', 'https://unpkg.com', 'https://fonts.googleapis.com', 'https://kit.fontawesome.com', 'https://cdn.jsdelivr.net', 'https://fontawesome.com', 'https://www.googletagmanager.com', 'https://ka-f.fontawesome.com', 'https://cms.depok.go.id', 'https://berita.depok.go.id', 'https://fonts.gstatic.com']);
            
            
    }
}
