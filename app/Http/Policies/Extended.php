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
            ->addDirective(Directive::STYLE, 'https://unicons.iconscout.com')
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
            ->addDirective(Directive::IMG, 'https://berita.depok.go.id');
            
            
    }
}
