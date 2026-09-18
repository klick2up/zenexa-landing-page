<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = ['name', 'email_template_id', 'status'];

    public function template()
    {
        return $this->belongsTo(EmailTemplate::class, 'email_template_id');
    }

    public function recipients()
    {
        return $this->hasMany(CampaignRecipient::class);
    }
}
