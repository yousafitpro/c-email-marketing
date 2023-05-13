<?php

namespace Yousafitpro\MailMarketingSoftware;
    use Illuminate\Support\ServiceProvider;
    class UcMailMarketingSoftwareServiceProvider extends ServiceProvider {
        public function boot()
        {
            //gjhgjhgasdasdasd
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $this->loadViewsFrom(__DIR__.'/resources/views', 'UcPhotoLib');

            $this->loadMigrationsFrom(__DIR__.'/migrations');

        }
        public function register()
        {

      }
   }
?>
