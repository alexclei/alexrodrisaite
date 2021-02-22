<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Carbon\Carbon;
use Spatie\Sitemap\Tags\Url;
use App\Model\Post;
use App\Model\Servico;
use Illuminate\Support\Str;

class SitemapGenerator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generator';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a sitemap of all system';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * Url::CHANGE_FREQUENCY_ALWAYS = 'always';
     * Url::CHANGE_FREQUENCY_HOURLY = 'hourly';
     * Url::CHANGE_FREQUENCY_DAILY = 'daily';
     * Url::CHANGE_FREQUENCY_WEEKLY = 'weekly';
     * Url::CHANGE_FREQUENCY_MONTHLY = 'monthly';
     * Url::CHANGE_FREQUENCY_YEARLY = 'yearly';
     * Url::CHANGE_FREQUENCY_NEVER = 'never';
     * 
     * @return mixed
     */
    public function handle()
    {
        $sitemap = Sitemap::create();
        $sitemap->add(Url::create('/')
                ->setLastModificationDate(Carbon::create(2020, 01, 01, 9, 0, 0, 'America/Belem'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(1.0));
        $sitemap->add(Url::create('/sobre')
                ->setLastModificationDate(Carbon::create(2020, 01, 01, 9, 0, 0, 'America/Belem'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.6));
        $sitemap->add(Url::create('/blog')
                ->setLastModificationDate(Carbon::create(2020, 01, 01, 9, 0, 0, 'America/Belem'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.9));
        $sitemap->add(Url::create('/portfolio')
                ->setLastModificationDate(Carbon::create(2020, 01, 01, 9, 0, 0, 'America/Belem'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.7));
        $sitemap->add(Url::create('/servicos')
                ->setLastModificationDate(Carbon::create(2020, 01, 01, 9, 0, 0, 'America/Belem'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8));
        $sitemap->add(Url::create('/contato')
                ->setLastModificationDate(Carbon::create(2020, 01, 01, 9, 0, 0, 'America/Belem'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.6));
        
        $posts = Post::select(['id', 'titulo', 'updated_at'])
        ->where('status', 1)
        ->get();
        
        foreach ($posts as $post) {
            
            $sitemap->add(Url::create('/blog/' . $post->id . '/' . Str::slug($post->titulo))
                                        ->setLastModificationDate($post->updated_at)
                                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                                        ->setPriority(0.6)
                                    );
            
        }

        $servico = Servico::select(['id', 'titulo', 'updated_at'])
        ->where('status', 1)
        ->get();
        
        foreach ($servico as $s) {
            
            $sitemap->add(Url::create('/servicos/' . $s->id . '/' . Str::slug($s->titulo))
                                        ->setLastModificationDate($s->updated_at)
                                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                                        ->setPriority(0.7)
                                    );
            
        }

        $sitemap->writeToFile(public_path('/sitemap.xml'));
    }
}
