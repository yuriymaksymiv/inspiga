<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    protected $table = "briefs";
    protected $primaryKey = "id";

    protected $fillable =[
        'name',
        'phone',
        'email',
        'company_name',
        'activity',
        'service',
        'price',
        'credit',
        'company_site',
        'term',
        'structure',
        'blog',
        'mobile_version',
        'multi_languages',
        'online_pay',
        'google_analytics',
        'gallery',
        'search',
        'registration',
        'online_consultant',
        'maps',
        'sites_like',
        'sites_dislike',
        'statistic',
        'design',
        'logo',
        'color',
        'basic_site',
        'photosession',
        'copywriter',
        'add_content',
        'support',
        'update_content',
        'details',
        'document',
        'status'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
