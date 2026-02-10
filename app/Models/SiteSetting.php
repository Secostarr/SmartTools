<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    public function up()
{
    Schema::create('site_settings', function (Blueprint $table) {
        $table->id();
        $table->string('key')->unique(); // contoh: 'hero_title'
        $table->text('value')->nullable();
        $table->timestamps();
    });
}
}

